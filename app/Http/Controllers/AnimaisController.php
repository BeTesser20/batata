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

    // mostra na tela a confirmacao
    public function apagar(Animal $animal){
        // dd($animal);
        return view('animais.apagar', [
            'animal' => $animal,
        ]);
    }

    // efetivamente deleta no banco
    public function deletar(Animal $animal){
        $animal->delete();
        return redirect()->route('animais');
    }


    public function editar(Animal $animal) {
        return view('animais/editar', ['animal' => $animal]);
    }

    public function editarGravar(Request $form, Animal $animal) {
        $dados = $form->validate([
        'nome' => 'required|max:255',
        'idade' => 'required'
        ]);

        $animal->fill($dados);
        $animal->save();
        return redirect()->route('animais');
    }
}