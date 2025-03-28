<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Registro_Evento;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;


class AlunoController extends Controller
{
    public function create(Request $request){
        $request->validate(
            [
                'nm_aluno' => 'required|max:100',
                'nr_rm' => 'required',
                'cd_rfid' => 'required|max:10',
                'img_aluno' => 'required|image|mimes:jpg,jpeg,png|max:10240'
            ]
        );

        $caminho = $request->file('img_aluno')->store('photos', 'public');

        $aluno = Aluno::create(
            [
                'nm_aluno' => $request['nm_aluno'],
                'nr_rm' => $request['nr_rm'],
                'cd_rfid' => $request['cd_rfid'],
                'img_aluno' => $caminho,
            ]
        );

       return redirect('/workplace/cadastro/aluno');
    }

    public function visita()
    {
        $alunos = Aluno::all();
        return view('wppVisita', ['alunos' => $alunos, 'request' => 'Visita']);
    }


    public function saida()
    {
        $alunos = Aluno::where('nm_aluno', '>', 'g')->get();
        return view('wppSaidas', ['alunos' => $alunos, 'request' => 'Saidas']);
    }

    public function biblioteca()
    {
        $alunos = Aluno::where('nm_aluno', '<', 'i')->get();
        return view('wppBiblio', ['alunos' => $alunos, 'request' => 'Biblio']);
    }

    public function sabado()
    {
        $alunos = Registro_Evento::
        join('tb_aluno_classe as al_cl', 'tb_registro_evento.id_aluno_classe', '=', 'al_cl.id_aluno_classe')
        ->join('tb_aluno as al', 'al_cl.nr_rm', '=', 'al.nr_rm')
        ->join('tb_classe as cl', 'al_cl.id_classe', '=', 'cl.id_classe')
        ->join('tb_evento as ev', 'tb_registro_evento.id_evento', '=', 'ev.id_evento')
        ->select(['al.nr_rm as RM', 'al.nm_aluno as Nome', 'tb_registro_evento.created_at as Horario_da_presenca'])
        ->where('ev.ds_tipo', '=', 'Sabado Letivo')
        ->get();
        return view('wppSabLet', ['alunos' => $alunos, 'request' => 'Sabado']);
    }

    public function show($nr_rm)
    {
        $aluno = Aluno::findOrFail($nr_rm);
        $request = null;
        return view('wppProfile', compact('aluno','request'));
    }

    public function exportVisitaCSV()
    {
        $nomeArquivo = 'visitaTecnica.csv';
        $caminho = 'csv/' . $nomeArquivo;

        $arquivo = Storage::disk('local')->path($caminho);
        $handler = fopen($arquivo, 'w');

        $alunos = Aluno::all();

        foreach ($alunos as $aluno) {
            fputcsv($handler, [$aluno->nr_rm, $aluno->nm_aluno, $aluno->cd_rfid]);
        }

        fclose($handler);

        return response()->download($arquivo, $nomeArquivo)->deleteFileAfterSend(true);
    }


}
