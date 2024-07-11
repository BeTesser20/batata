{{-- resources/views/usuarios/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
    @csrf
    
    <form method="post" action="{{ route('login') }}">
        <input type="text" name="username" placeholder="Usuário">
        <br>
        <input type="password" name="password" placeholder="Senha">
        <br>
        <input type="submit" name="Entrar">
    </form>
@endsection