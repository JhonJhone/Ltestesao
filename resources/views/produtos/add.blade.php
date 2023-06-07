@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    @if ($errors)
    @foreach ($errors->all() as $erro)
        {{$erro}} <br>
        @endforeach
    @endif

    <form action="{{ url()->current()}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome do Produto" value="{{old('name', $prod->name ?? '')}}"> <br>
        <input type="number" name="price" step="0.01" placeholder="Preço" value="{{old('price', $prod->price ?? '')}}"><br>
        <input type="number" name="quantity" placeholder="Quantidade" value="{{old('quantity', $prod->quantity ?? '')}}">
        <hr>
        <marquee behavior="" direction="">
        <input type="submit" value="Gravar">
    </marquee><br>
    <a href="{{route ('produtos')}}">Voltar</a>
    </form>
@endsection
