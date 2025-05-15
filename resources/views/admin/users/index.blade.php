@extends('admin.layouts.app')

@section('content')
    <h1>Lista de Usuarios</h1>
    <a href="{{ route('users.create') }}">Adicionar novo usuario</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Acoes</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->email }}</td>
                    <td> - </td>
                </tr>

            

            @empty
                <tr>
                    <td colspan="100"> Nenhum usuario encontrado no banco</td>
                </tr>

            @endforelse


        </tbody>
    </table>

    {{ $users->links() }} <!-- Paginação -->
    
@endsection