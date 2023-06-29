@extends('includes.base')

@section('title', 'Usuario - Adicionar')

@section('content')
    <h2>Adicione o usuario</h2>

    @if ($errors)
    @foreach ($errors->all() as $erro)
        {{$erro}} <br>
        @endforeach
    @endif

    <form action="{{ url()->current()}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome do Usuario" value="{{old('name', $user->name ?? '')}}"> <br>
        <input type="email" name="email" step="0.01" placeholder="Email" value="{{old('email', $user->email ?? '')}}"><br>
        <input type="password" name="password" placeholder="Senha" value="{{old('password', $user->password ?? '')}}">
        <hr>
        <marquee behavior="" direction="">
        <input type="submit" value="Gravar">
    </marquee><br>
    <a href="{{route ('usuarios')}}">Voltar</a>
    </form>
@endsection
