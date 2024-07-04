{{-- views/usuarios/editar.blade.php --}}

@extends('base')

@section('titulo', 'Página de Usuário - Editar')

@section('conteudo')
    <h1>Usuário - Editar</h1>

    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('usuarios.editar', $usuario->id) }}" method="post">
        @csrf
        @method('put')

        <p><input value="{{ old('nome', $usuario->nome ?? '') }}" type="text" name="nome" placeholder="Nome do Usuário" value=""></p>
        <p><input value="{{ old('email', $usuario->email ?? '') }}" type="email" name="email" placeholder="Email"></p>
        <p><input value="{{ old('username', $usuario->username ?? '') }}" type="text" name="username" placeholder="Username" value=""></p>
        <p><input value="{{ old('password', $usuario->password ?? '') }}" type="password" name="password" placeholder="Password"></p>
        <p><input type="submit" value="Gravar"></p>
    </form>
@endsection