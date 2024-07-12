{{-- resources/views/usuarios/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')

    @if(session('erro'))
        <div style="background-color:red;color:white">
            {{session('erro')}}
        </div>
    @endif

    @if($errors->any())
        <div>
            <h4>Preenche a porcaria do formulário</h4>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="post" action="{{ route('login') }}">
        @csrf
        <input type="text" name="username" placeholder="Usuário">
        <br>
        <input type="password" name="password" placeholder="Senha">
        <br>
        <input type="submit" name="Entrar">
    </form>
@endsection