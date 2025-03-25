<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class EventosController extends Controller
{
    public function index(){
        $eventos = Evento::all();
        $request = 'Evento';
        return view('wppE',compact('eventos', 'request'));
    }

    public function create(){

    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required|max:100',
            'data' => 'required|date'
        ]);

        $dataEvento = Carbon::parse($request->data)->format('Y-m-d H:i');

        Evento::create([
            'nm_evento' => $request->nome,
            'dt_evento' => $dataEvento
        ]);

        return redirect('/workplace/eventos');
    }

    public function show($id){
        try{
            $id = Crypt::decrypt($id);
       }catch(Exception $e){
           abort(404);
       }
        $evento = Evento::find($id);
        if(!$evento){
            abort(404);
        }
        $request = 'Evento';
        return view('wppES',compact('evento', 'request'));
    }

    public function edit($id){
        try{
             $id = Crypt::decrypt($id);
        }catch(Exception $e){
            abort(404);
        }
        $evento = Evento::findOrFail($id);
        $request = 'Evento';
        return view('wppEE', compact('evento', 'request'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required|max:100',
            'data' => 'required|date'
        ]);

        try{
            $id = Crypt::decrypt($id);
        }catch(Exception $e){
            abort(404);
        }

        $dataEvento = Carbon::parse($request->data)->format('Y-m-d H:i');

        $evento = Evento::findOrFail($id);
        $evento->update([
            'nm_evento' => $request->nome,
            'dt_evento' => $dataEvento
        ]);

        return redirect('/workplace/eventos');
    }

    public function destroy($id){
        try{
            $id = Crypt::decrypt($id);
        }catch(Exception $e){
            abort(404);
        }

        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect('/workplace/eventos');
    }
}
