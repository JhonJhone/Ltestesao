

<div style="border: 100px solid cyan; width:50%; margin:0 auto; text-align:center">
    <h1>Logue aqui, demente 🤣</h1>

    @if (session('erro'))
        <div>{{ session('erro') }}</div>
    @endif

    <form action="{{url()->current()}}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email"> <br>
        <input type="password" name="password" placeholder="Senha"> <br><br>
        <input type="submit" value="🐘💨*Som de peido*">
    </form>
</div>
