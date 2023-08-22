<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset(" css/style.css")}}">
</head>

<body>

    <h1>Meu pão na tua mão</h1>
    {{-- Usuario logado --}}
    <div>
        @if (Auth::user())
        Olá {{ Auth::user()->name }}, bonitão 😘 <br>
        <a href="{{ route('logout') }}">Ir embora</a>

        @else
        <a href="{{ route('login') }}">Faça o login, safado</a>
        @endif
    </div>

    {{-- Menu --}}
    <div>
        <ul>
            <li><a href="{{route ('home')}}">Home</a></li>
            <li><a href="{{route ('produtos')}}">Produtos</a></li>
            <li><a href="{{route ('usuarios')}}">Usuarios</a></li>
            <li><a href="{{route ('upload')}}">Upload</a></li>
        </ul>
    </div>
    <hr>
    {{-- Conteúdo --}}
    @yield('content')

</body>

</html>
