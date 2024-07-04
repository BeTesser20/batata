{{-- views/usuarios/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Usuário')

@section('conteudo')
    <p>Preencha o formuliário</p>

    @if($errors->any())
        <div>
            <h3>Deu ruim</h3>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="post" action="{{ route('usuario.gravar')}}">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
        <input type="number" name="idade" placeholder="Idade" value="{{ old('idade') }}">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
        <input type="submit" value="Gravar">
    </form>
@endsection