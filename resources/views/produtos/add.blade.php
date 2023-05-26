@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    <form action="{{ route('produtos.addSave') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome do Produto"> <br>
        <input type="number" name="price" step="0.01" placeholder="Preço"><br>
        <input type="number" name="quantity" placeholder="Quantidade">
        <hr>
        <marquee behavior="" direction="">
        <input type="submit" value="Gravar">
    </marquee>
    </form>
@endsection
