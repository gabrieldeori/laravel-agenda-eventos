<h1>Teste</h1>

@if ($nome === "Deori")
    <p>Apelido = {{ $nome }}</p>
@elseif ($nome === "Gabriel")
    <p>Nome = {{ $nome }}</p>
@else
    <p>Anti Curioso!</p>
@endif

<a href="/">Página inicial</a>
