{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@setion('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
    <p>Preencha o formuliário</p>
    <form method="post" action="{{ route(animais.gravar)}}">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="number" placeholder="Idade">
        <input type="submit" value="Gravar">
    </form>
@endsection