<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup(Request $request){
        $request->validate([
            'nm_usuario' => 'required|max:100',
            'ds_email' => 'required|max:45|unique:users,email',
            'cd_senha' => 'required|min:8|max:30',
            'confSenha' => 'required|same:cd_senha',
            'ds_cargo' => 'required'
        ], [
            'nm_usuario.max'=> 'O nome não pode ultrapassar 100 caracteres.',
            'nm_usuario.required' => 'Preencha o campo com alguma coisa.',
            'ds_email.required' => 'Preencha o campo com algum email.',
            'ds_email.max' => 'O email não pode ultrapassar 45 caracteres.',
            'ds_email.unique' => 'Este email já foi registrado.',
            'cd_senha.required' => 'Preencha o campo com alguma senha.',
            'cd_senha.min' => 'A senha precisa ter no mínimo 8 caracteres.',
            'cd_senha.max' => 'A senha só pode ter no máximo 30 caracteres.',
            'confSenha.required' => 'Preencha o campo com a mesma senha',
            'confSenha.same' => 'As senhas não são identicas.',
            'ds_cargo.required' => 'Selecione um cargo para realizar o registro.'
        ]);

        User::create([
            'name' => $request->nm_usuario,
            'email' => $request->ds_email,
            'password' => $request->cd_senha,
            'role' => $request->ds_cargo
        ]);

        return redirect('/login');
    }

    public function signupFuncionario(Request $request){
        $request->validate([
            'nm_usuario' => 'required|max:100',
            'ds_email' => 'required|max:45|unique:users,email',
            'cd_senha' => 'required|min:8|max:30',
            'ds_cargo' => 'required'
        ], [
            'nm_usuario.max'=> 'O nome não pode ultrapassar 100 caracteres.',
            'nm_usuario.required' => 'Preencha o campo com alguma coisa.',
            'ds_email.required' => 'Preencha o campo com algum email.',
            'ds_email.max' => 'O email não pode ultrapassar 45 caracteres.',
            'ds_email.unique' => 'Este email já foi registrado.',
            'cd_senha.required' => 'Preencha o campo com alguma senha.',
            'cd_senha.min' => 'A senha precisa ter no mínimo 8 caracteres.',
            'cd_senha.max' => 'A senha só pode ter no máximo 30 caracteres.',
            'ds_cargo.required' => 'Selecione um cargo para realizar o registro.'
        ]);

        User::create([
            'name' => $request->nm_usuario,
            'email' => $request->ds_email,
            'password' => $request->cd_senha,
            'role' => $request->ds_cargo
        ]);

        return redirect('/workplace/cadastro/funcionario');
    }

    public function login(Request $request){
        $request->validate([
            'ds_cargo' => 'required',
            'ds_email' => 'required',
            'cd_senha' => 'required'
        ], [
            'ds_cargo.required' => 'Escolha algum cargo para poder efetuar o login.',
            'ds_email.required' => 'Preencha algum email para poder efetuar o login.',
            'cd_senha.required' => 'Preencha alguma senha para poder efetuar o login.'
        ]);
        $campos = [
            'email' => $request->ds_email,
            'password' => $request->cd_senha
        ];
        if(Auth::attempt(['password'=> $campos['password'], 'email' => $campos['email']])){
            $request->session()->regenerate();
            return redirect()->route('workplace');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
