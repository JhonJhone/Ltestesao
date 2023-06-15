@extends('includes.base')

@section('title', 'Produtos')

@section('content')
    <h2>Apagar Produto</h2>
    <p>Você irá acabar com a existência de {{ $prod->name}}.</p>
    <p>Tem total certeza dessa ação?</p>

    <form action="{{route('produtos.deleteForReal', $prod->id)}}" method="post">
        @csrf
        @method('delete')

        <input type="submit" value="Apague essa desgraça">
    </form>
@endsection
