@extends('includes.base')

@section('title', 'Produtos')

@section('content')

@if (session('sucesso'))
    <div>{{session('sucesso')}}</div>
@endif

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Editar</th>
    </tr>

@foreach ($prod as $prod)


    <tr>
        <td><a href="{{route('produtos.view', $prod->id)}}">{{$prod->name}}</a></td>
        <td>R${{ number_format($prod->price, 2, ',', '.')}}</td>
        <td>{{$prod->quantity}}</td>
        <td><a href="{{route('produtos.edit', $prod->id)}}">Editar</a></td>
    </tr>
@endforeach
</table>
    <a href="{{ route('produtos.add') }}">Adiciar Produto</a> <br><br>
@endsection
