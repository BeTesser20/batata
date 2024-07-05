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

    <form method="post" action="{{ route('usuarios.gravar')}}">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}"> 
        <br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"> 
        <br>
        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}"> 
        <br>
        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}"> 
        <br>
        <select name="admin" >
            <option value="null">Selecione o Admin</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
        <br>
        <input type="submit" value="Gravar">
    </form>
@endsection