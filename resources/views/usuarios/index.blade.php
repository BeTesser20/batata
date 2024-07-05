{{-- resources/views/usuarios/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
    <p>
        <a href="{{ route('usuarios.cadastrar') }}">Cadastrar usuário</a>
    </p>

    <p>Veja nossa lista de usuários</p>

    <table border="10">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Admin</th>
        </tr>

        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario['nome'] }}</td>
                <td>{{ $usuario['email'] }}</td>
                <td>{{ $usuario['username'] }}</td>
                <td>{{ $usuario['password'] }}</td>
                <td>@if($usuario['admin'] == 0) não @else sim @endif</td>
                <td><a href="{{ route('usuarios.editar', $usuario['id']) }}">Editar</a></td>
                <td><a href="{{ route('usuarios.apagar', $usuario['id']) }}">Apagar</a></td>
            </tr>
        @endforeach
    </table>
@endsection