@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    @if ($errors)
    @foreach ($errors->all() as $erro)
        {{$erro}} <br>
        @endforeach
    @endif

    <form action="{{ route('produtos.addSave') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome do Produto" value="{{old('name')}}"> <br>
        <input type="number" name="price" step="0.01" placeholder="Preço" value="{{old('price')}}"><br>
        <input type="number" name="quantity" placeholder="Quantidade" value="{{old('quantity')}}">
        <hr>
        <marquee behavior="" direction="">
        <input type="submit" value="Gravar">
    </marquee>
    </form>
@endsection
