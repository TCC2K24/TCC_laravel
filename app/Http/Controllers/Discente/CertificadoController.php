<?php

namespace App\Http\Controllers\Discente;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\cpa\formulario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cpa\pesquisa;
use App\Models\cpa\resultado;



class CertificadoController extends Controller
{
    public function meuCertificadoDiscente($idPesquisa)
    {
        $pesquisa = pesquisa::findOrFail($idPesquisa);

        return view("Discente.meu-certificado",compact('pesquisa'));
    }

    public function meusCertificadosDiscente()
    {
        $usuarioId = auth('usuario')->user()->idUsuario;
        
        // Recuperar todas as pesquisas nas quais o usuário respondeu algum formulário
        $pesquisasRespondidas = Pesquisa::whereHas('Formulario', function ($query) use ($usuarioId) {
            $query->whereHas('resultados', function ($query) use ($usuarioId) {
                $query->where('id_usuario', $usuarioId); // Verifica se o usuário tem resultado nesse formulário
            });
        })->get();
        
        return view('Discente.meus-certificados', compact('pesquisasRespondidas'));
    }


    public function gerarCertificado($idPesquisa)
    {
        $usuarioId = auth('usuario')->user()->idUsuario;

        // pegando o tempo de participação do usuario na pesquisa
        $temposDeParticipacao = \DB::table('formularios as f')
            ->join('pesquisas as p', 'p.idPesquisa', '=', 'f.pesquisa_id')
            ->join('resultados as r', 'r.id_formulario', '=', 'f.idFormulario')
            ->where('p.idPesquisa', $idPesquisa)
            ->where('r.id_usuario', $usuarioId)
            ->pluck('f.tempoDeParticipacao');

        $minutos = $temposDeParticipacao->sum();
        $horas = $minutos/60;

        $pesquisa = pesquisa::findOrFail($idPesquisa);
        $formularios = formulario::where('pesquisa_id', $idPesquisa)->get();
        $data['GRR'] = '20221097';
        $data['minutos'] = $minutos;
        $data['horas'] = $horas;
        $data['inicio'] = '24/06/2024';
        $data['fim'] = '08/07/2024';

        $pdf = Pdf::loadView('discente.certificado', $data)->setPaper('a4', 'landscape');

        return $pdf->stream('certificado.pdf');
    }

}