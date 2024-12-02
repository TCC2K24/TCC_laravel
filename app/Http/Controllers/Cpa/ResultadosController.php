<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cpa\pesquisa;
use App\Models\Cpa\formulario;
use Barryvdh\DomPDF\Facade\Pdf;


class ResultadosController extends Controller
{
    public function resultados()
    {
        
        $pesquisas = Pesquisa::orderBy('created_at', 'desc')->get();
        return view("Cpa/resultados", compact('pesquisas'));
    }
    
    public function visualizarResultados($id)
    {
        // busca pesquisa com o id
        $pesquisa = Pesquisa::findOrFail($id);

        $formularios = formulario::where('pesquisa_id', $id)->get();

        return view("Cpa.visualizar-resultados", compact('pesquisa', 'formularios'));
    }

    public function visualizarResultadosFormulario($idPesquisa, $position)
    {
        // busca pesquisa com o id 
        $pesquisa = Pesquisa::findOrFail($idPesquisa);
    
        // busca formularios por data de criação
        $formularios = formulario::where('pesquisa_id', $idPesquisa)
                                    ->orderBy('created_at')
                                    ->get();
    
        // posição valida?
        if ($position < 1 || $position > $formularios->count()) {
            abort(404); // se posição inválida erro 404
        }
    
        $formulario = $formularios->get($position - 1); // obtem o formulário na posição x 
    
        $resultados = $formulario->resultados()->pluck('resultados'); // puxa só o campo 'resultados' dos resultados referentes ao formulário
    
        $dadosFormulario = $formulario->dados; // puxando o campo 'dados' do formulário
    
        $resultado_total = [];
        $dadosFormulario = json_decode($dadosFormulario); // transformando o json em um array
    
        // honestamente não tenho a menor ideia doq eu fiz aqui, mas funciona, não mexa
        foreach ($dadosFormulario as $index => $pergunta) {
            $respostas = [];
            foreach ($resultados as $resultado) {
                $resultadoJson = json_decode($resultado);
                $respostas[] = $resultadoJson[$index];
            }
    
            // verifica o tipo da pergunta e faz o devido processamento dos dados
            if ($pergunta->tipo == 'escolha-unica' || $pergunta->tipo == 'multipla-escolha') {
                $opcoes = $pergunta->opcoes;
                $contagem = array_fill_keys($opcoes, 0);
    
                // contando
                foreach ($respostas as $resposta) {
                    if (is_array($resposta)) { // multipla escolha
                        foreach ($resposta as $opcao) {
                            if (isset($contagem[$opcao])) {
                                $contagem[$opcao]++;
                            }
                        }
                    } else { // escolha unica
                        if (isset($contagem[$resposta])) {
                            $contagem[$resposta]++;
                        }
                    }
                }
    
                // armazenando
                $resultado_total[] = [
                    'pergunta' => $pergunta->pergunta,
                    'tipo' => $pergunta->tipo,
                    'dados' => $contagem,
                ];
            } elseif ($pergunta->tipo == 'estrela') {
                $estrelaContagem = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
    
                // contando estralas
                foreach ($respostas as $resposta) {
                    if (isset($estrelaContagem[$resposta])) {
                        $estrelaContagem[$resposta]++;
                    }
                }
    
                // armazenando
                $resultado_total[] = [
                    'pergunta' => $pergunta->pergunta,
                    'tipo' => $pergunta->tipo,
                    'dados' => $estrelaContagem,
                ];
            } elseif ($pergunta->tipo == 'texto-curto' || $pergunta->tipo == 'texto-longo') {
                // se tipo texto só armazena
                $resultado_total[] = [
                    'pergunta' => $pergunta->pergunta,
                    'tipo' => $pergunta->tipo,
                    'respostas' => $respostas,
                ];
            }
        }
    
        return view("Cpa.visualizar-resultados-formulario", compact('pesquisa', 'formulario', 'resultados', 'dadosFormulario', 'resultado_total'));
    }
    

    public function visualizarResultadosPesquisa()
    {
        return view("Cpa/visualizar-resultados-pesquisa");
    }
}
