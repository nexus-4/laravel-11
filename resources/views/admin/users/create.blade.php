@extends('admin.layouts.app')

@section('title', 'Criacao de novo usuario')

@section('content')
    <h1> Novo usuario</h1>

    <form action="{{ route('users.store') }}" method="POST">
        <input type="text" name="_token" value="{{ csrf_token()}}">
        <input type="text" name="name" placeholder="Nome do usuario">
        <input type="email" name="email" placeholder="E-mail do usuario">
        <input type="password" name="password" placeholder="Senha do usuario">
        <button>Enviar</button>
    </form>

@endsection