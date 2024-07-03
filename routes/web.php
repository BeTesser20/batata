<?php

use App\Http\Controllers\AnimaisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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