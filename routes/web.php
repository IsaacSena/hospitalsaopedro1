<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrarAtividadeController;


Route::get('/home', function () {
    return view('paginas/telaHome');
});

Route::get('/sobrenos', function () {
    return view('paginas/telaSobreNos');
});







Route::get('/loginPaciente', function () {
    return view('paginas/telaLoginPaciente');
});

Route::get('/cadastrarPaciente', function () {
    return view('paginas/telaCadastroPaciente');
});

Route::get('/alterarSenhaPaciente', function () {
    return view('paginas/telaAlterarSenhaPaciente');
});

Route::get('/telaCadastroPaciente',[App\Http\Controllers\registrarAtividadeController::class, 'cadastrarPaciente'])->name('tela');





Route::get('/loginFuncionario', function () {
    return view('paginas/telaLoginFuncionario');
});

Route::get('/alterarSenhaFuncionario', function () {
    return view('paginas/telaAlterarSenhaFuncionario');
});






Route::get('/loginAdm', function () {
    return view('paginas/telaLoginAdm');
});

Route::get('/alterarSenhaAdm', function () {
    return view('paginas/telaAlterarSenhaAdm');
});

Route::get('/cadastrarAdm', function () {
    return view('paginas/telaCadastrarAdm');
});




