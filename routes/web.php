<?php

use App\Http\Controllers\EventosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlunoController;

//ROUTE DE OPERAÇÃO
Route::prefix('transition')->name('transition.')->group(function () {});



Route::post('/signup/dev/register', [UserController::class, 'signup'])->name('dev.signup');

Route::post('/login', [UserController::class, 'login'])->name('login.submit');

Route::post('/workplace/cadastro/aluno', [AlunoController::class, 'create'])->name('cadastro.aluno');

Route::post('/workplace/cadastro/funcionario', [UserController::class, 'signupFuncionario'])->name('cadastro.funcionario');

Route::post('/workplace/eventos', [EventosController::class, 'store'])->name('registro.eventos');

Route::put('/workplace/eventos/{id}',[EventosController::class, 'update'])->name('editar.eventos');

Route::delete('/workplace/eventos/{id}',[EventosController::class, 'destroy'])->name('deletar.eventos');

Route::get('/export/alunos', [AlunoController::class, 'exportVisitaCSV'])->name('aluno.export');

//Transitions
Route::get('/logout', [UserController::class, 'logout'])->name('logout');




Route::get('/workplace/alunos/{nr_rm}', [AlunoController::class, 'show'])->name('aluno.profile');

Route::get('/workplace/saida',[AlunoController::class,'saida'])->name('aluno.index.saida');

Route::get('/workplace/visita_tecnica',[AlunoController::class,'visita'])->name('aluno.index.visita');

Route::get('/workplace/biblioteca',[AlunoController::class,'biblioteca'])->name('aluno.index.biblioteca');

Route::get('/workplace/sabado_letivo',[AlunoController::class, 'sabado'])->name('aluno.index.sabado');



Route::get('/workplace', function () {
    if (Auth::check()) {
        return view('wpp', ['request' => null]);
    }
    return redirect('/');
})->name('workplace');

Route::get('/workplace/eventos/editar/{id}', [EventosController::class, 'edit'])->name('acesso.eventos.editar');

Route::get('/workplace/cadastro/aluno', function () {
    return view('wppCadAl', ['request' => "Aluno"]);
})->name('acesso.cadastro.aluno');

Route::get('/workplace/cadastro/funcionario', function () {
    return view('wppCadFun', ['request' => "Funcionario"]);
})->name('acesso.cadastro.funcionario');

Route::get('/workplace/eventos/registro', function () {
    return view('wppER', ['request' => "Evento"]);
})->name('acesso.cadastro.eventos.registro');

Route::get('/workplace/eventos', [EventosController::class, 'index'])->name('acesso.eventos');

Route::get('/workplace/eventos/{id}', [EventosController::class, 'show'])->name('acesso.eventos.especifico');

Route::get('/login/academico', function () {
    if (Auth::check()) {
        return redirect('/workplace');
    }
    return view('loginCorpoAcademico');
})->name('login.academico');

Route::get('/login/responsavel', function () {
    return view('loginResponsavel');
})->name('login.responsavel');

Route::get('/signup/dev', function () {
    return view('signUpPage');
})->name('acesso.dev.signup');

Route::get('/', function () {
    return view('landingPage');
})->name('inicio');

Route::get('/produtos', function () {
    return view('productsPage');
})->name('produtos');

Route::get('/sobrenos', function () {
    return view('sobreNos');
})->name('sobrenos');

Route::get('/cadastro', function () {
    return view('signUpPage');
})->name('user.cadastro');

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/workplace');
    }
    return view('loginPage');
})->name('login');

Route::get('/contato', function () {
    return view('contactPage');
})->name('contato');

/* ROUTES DO HENRIQUE */