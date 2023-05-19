{{-- resources/view/teste-view.blade.php --}}
@extends('includes/base')

@section('title', 'Piringa')

@section('content')
<marquee behavior="" direction="">
<p>Este é meu primeiro arquivo Blade</p>
<p>Chorei.</p>
<p>
    Só não disse por onde 😏🥴😈
</p>
<p>A variável {{$valor_da_controller}} está partindo para uma aventura, dê seu ultimo tchau para ela</p>
</marquee>
@endsection
