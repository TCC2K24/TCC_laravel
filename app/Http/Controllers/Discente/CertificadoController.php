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
    public function meusCertificadosDiscente(Request $request)
    {
        $usuarioId = auth('usuario')->user()->idUsuario;
        
        $query = Pesquisa::whereHas('Formulario', function ($query) use ($usuarioId) {
            $query->whereHas('resultados', function ($query) use ($usuarioId) {
                $query->where('id_usuario', $usuarioId);
            });
        });
        
        if ($request->filled('titulo')) {
            $query->where('descricao', 'like', '%' . $request->titulo . '%');
        }
    
        $pesquisasRespondidas = $query->get();
        
        return view('Discente.meus-certificados', compact('pesquisasRespondidas'));
    }

    public function gerarCertificado($idPesquisa)
    {
        $usuario = auth('usuario')->user();
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
        $data['GRR'] = $usuario->GRR;
        $data['minutos'] = $minutos;
        $data['horas'] = $horas;
        $data['inicio'] = $pesquisa->dataInicio;
        $data['fim'] = $pesquisa->dataFim;

        $pdf = Pdf::loadView('discente.certificado', $data)->setPaper('a4', 'landscape');

        return $pdf->stream('certificado.pdf');
    }


}