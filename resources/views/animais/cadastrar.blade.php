{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
    <p>Preencha o formuliário</p>

    @if($errors->any())
        <div>
            <h3>Deu ruim</h3>
            @foreach($errors->all() as $error)
                <p>{{ $erro }}</p>
            @endforeach
        </div>
    @endif

    <form method="post" action="{{ route('animais.gravar')}}">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
        <input type="number" name="idade" placeholder="Idade" value="{{ old('idade') }}">
        <input type="submit" value="Gravar">
    </form>
@endsection