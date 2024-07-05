<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() {
        $dados = Usuario::all();
        // dd($dados);
        return view('usuarios.index', [
            'usuarios' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('usuarios.cadastrar');
    }

    public function gravar(Request $form) {
        // // dd($form);
        // echo $form->nome;
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'email' => 'required|min:3',
            'username' => 'required|min:3',
            'password' => 'required|min:3',
            'admin' => 'boolean'
        ]);
        Usuario::create($dados);
        // echo 'Tudo certo!';
        return redirect()->route('usuarios');
    }

    // mostra na tela a confirmacao
    public function apagar(Usuario $usuario){
        // dd($usuario);
        return view('usuario.apagar', [
            'usuario' => $usuario,
        ]);
    }

    // efetivamente deleta no banco
    public function deletar(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuarios');
    }


    public function editar(Usuario $usuario) {
        return view('usuarios/editar', ['usuario' => $usuario]);
    }

    public function editarGravar(Request $form, Usuario $usuario) {
        $dados = $form->validate([
        'nome' => 'required|max:255',
        'email' => 'required|max:255',
        'username' => 'required|max:255',
        'password' => 'required|max:255'
        ]);

        $usuario->fill($dados);
        $usuario->save();
        return redirect()->route('usuarios');
    }
}