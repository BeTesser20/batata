{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

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

    <form method="post" enctype="multipart/form-data" action="{{ route('animais.gravar')}}" class="p-10 bg-white rounded shadow-xl">
        @csrf
        <div class="">
            <label class="block text-sm text-gray-600" for="nome">Nome</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="text" required="" name="nome" placeholder="Nome" value="{{ old('nome') }}">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="idade">Idade</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="number" required="" name="idade" placeholder="Idade" value="{{ old('idade') }}">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="imagem">Imagem</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="file" required="" name="imagem" placeholder="Imagem" value="{{ old('imagem') }}">
        </div>
        <div class="mt-6">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit"><i class="fas fa-save"></i></i> Gravar</button>
        </div>
    </form>
@endsection