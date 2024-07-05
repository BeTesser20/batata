<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index');

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/hello/{nome}', function($nome) {
    return "Olá {$nome}";
});

Route::get('/animais', [AnimaisController::class, 'index'])->name('animais');
// quando acassar a rota via get animais ele vai pegar a funcao  controller e executar o index

Route::get('/animais/cadastrar', [AnimaisController::class, 'cadastrar'])->name('animais.cadastrar');

Route::post('/animais/cadastrar', [AnimaisController::class, 'gravar'])->name('animais.gravar');

Route::get('animais/apagar/{animal}', [AnimaisController::class, 'apagar'])->name('animais.apagar');

Route::delete('animais/apagar/{animal}', [AnimaisController::class, 'deletar']);

Route::get('/animais/editar/{animal}', [AnimaisController::class, 'editar'])->name('animais.editar');

Route::put('/animais/editar/{animal}', [AnimaisController::class, 'editarGravar']);


Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');
// quando acassar a rota via get animais ele vai pegar a funcao  controller e executar o index

Route::get('/usuarios/cadastrar', [UsuariosController::class, 'cadastrar'])->name('usuarios.cadastrar');

Route::post('/usuarios/cadastrar', [UsuariosController::class, 'gravar'])->name('usuarios.gravar');

Route::get('usuarios/apagar/{usuario}', [UsuariosController::class, 'apagar'])->name('usuarios.apagar');

Route::delete('usuarios/apagar/{usuario}', [UsuariosController::class, 'deletar']);

Route::get('/usuarios/editar/{usuario}', [UsuariosController::class, 'editar'])->name('usuarios.editar');

Route::put('/usuarios/editar/{usuario}', [UsuariosController::class, 'editarGravar']);