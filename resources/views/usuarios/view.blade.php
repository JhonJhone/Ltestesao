@extends('includes.base')

@section('title', 'Usuarios - Ver')

@section('content')
    <h2>{{$users->name}}</h2>
    <p>Email:{{ $users->email}}</p>
    <p>Senha:{{$users->senha}}</p>

    <p>
        <a href="{{route('usuarios')}}">Voltar</a>
    </p>
@endsection
