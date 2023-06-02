@extends('includes.base')

@section('title', 'Produtos')

@section('content')
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
    </tr>

@foreach ($prod as $prod)


    <tr>
        <td><a href="{{route('produtos.view', $prod->id)}}">{{$prod->name}}</a></td>
        <td>R${{ number_format($prod->price, 2, ',', '.')}}</td>
        <td>{{$prod->quantity}}</td>
    </tr>
@endforeach
</table>
    <a href="{{ route('produtos.add') }}">Adiciar Produto</a> <br><br>
@endsection