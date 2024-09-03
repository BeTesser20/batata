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

    <form action="{{ route('animais.editar', $animal->id) }}" method="post" class="p-10 bg-white rounded shadow-xl">
        @csrf
        @method('put')

        <div class="">
            <label class="block text-sm text-gray-600" for="nome">Nome</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('nome', $animal->nome ?? '') }}" type="text" name="nome" placeholder="Nome do Animal" value="">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="idade">Idade</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('idade', $animal->idade ?? '') }}" type="number" name="idade" placeholder="Idade">
        </div>
        <div class="mt-6">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit"><i class="fas fa-save"></i></i> Gravar</button>
        </div>
    </form>
@endsection