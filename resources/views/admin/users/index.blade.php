@extends('admin.layouts.app')

@section('title', 'listagem')

@section('content')
    <h1>Usuáios</h1>

    @if(session()->has('success'))
        {{ session('success') }}
    @endif

    @if(session()->has('message'))
        {{ session('message') }}
    @endif

    <a href="{{ route('users.create') }}">Novo</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum usuário no banco de dados</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
@endsection