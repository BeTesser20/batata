{{-- views/animais/editar.blade.php --}}

@extends('base')

@section('titulo', 'Página de Animais - Editar')

@section('conteudo')
    <h1>Animais - Editar</h1>

    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('animais.editar', $animal->id) }}" method="post">
        @csrf
        @method('put')

        <p><input value="{{ old('nome', $animal->nome ?? '') }}" type="text" name="nome" placeholder="Nome do Animal" value=""></p>
        <p><input value="{{ old('idade', $animal->idade ?? '') }}" type="number" name="idade" placeholder="Idade"></p>
        <p><input type="submit" value="Gravar"></p>
    </form>
@endsection