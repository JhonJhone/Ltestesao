@extends('includes.base')

@section('title', 'Produtos')

@section('content')
    <p>Produtos funcionando</p>
    <a href="{{ route('produtos.add') }}">Adiciar Produto</a> <br><br>
    <a href="{{ route('produtos.view') }}">Mostrar Produtos</a>
@endsection
