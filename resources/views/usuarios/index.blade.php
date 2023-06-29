@extends('includes.base')

@section('title', 'Produtos')

@section('content')

@if (session('sucesso'))
    <div>{{session('sucesso')}}</div>
@endif

<form action="{{route('produtos')}}" method="POST">
    @csrf
    <input type="text" name="busca">
    <select name="ord">
        <option value="asc">Crescenu</option>
        <option value="desc">Descenu</option>
    </select>
    <input type="submit" value="🚬🗿">
</form>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
    </tr>

@foreach ($users as $user)


    <tr>
        <td><a href="{{route('usuarios.view', $user->id)}}">{{$user->name}}</a></td>
        <td>{{ $user->email}}</td>
    </tr>
@endforeach
</table>

{{ $users->links('vendor.pagination.default') }}

    <a href="{{ route('usuarios.add') }}">Adiciar Usuario</a> <br><br>
@endsection
