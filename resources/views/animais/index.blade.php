{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
    <p>
        <a href="{{ route('animais.cadastrar') }}" class="px-4 py-2 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i>Cadastrar animal</a>
    </p>

    <p>Veja nossa lista de animais para adoção</p>

    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Idade</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Editar</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Apagar</th>
                </tr>
            </thead>
    
            @foreach($animais as $animal)     
                <tbody class="text-gray-700">
                    <tr @if ($loop->even) class="bg-gray-200" @endif>
                        <td class="text-left py-3 px-4">{{ $animal['nome'] }}</td>
                        <td class="text-left py-3 px-4">{{ $animal['idade'] }}</td>
                        <td class="text-left py-3 px-4"><a class="px-3 py-1 font-bold text-green-900 bg-green-200 rounded-full" href="{{ route('animais.editar', $animal['id']) }}"><i class="fas fa-edit"></i> Editar</a></td>
                        <td class="text-left py-3 px-4"><a class="px-3 py-1 font-bold text-red-900 bg-red-200 rounded-full" href="{{ route('animais.apagar', $animal['id']) }}"><i class="fas fa-trash-alt"></i> Apagar</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection