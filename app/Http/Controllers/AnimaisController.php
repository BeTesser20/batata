<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index() {
        $dados = Animal::all();
        // dd($dados);
        return view('animais.index', [
            'animais' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('animais.cadastrar');
    }

    public function gravar(Request $form) {
        // // dd($form);
        // echo $form->nome;
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'idade' => 'required|integer',
        ]);
        Animal::create($dados);
        // echo 'Tudo certo!';
        return redirect()->route('animais');
    }

    public function apagar(Animal $animal){
        // dd($animal);
        return view('animais.apagar', [
            'animal' => $animal,
        ]);
    }
}

