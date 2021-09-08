<h3>Novo produto</h3>
<a href="{{ route('produtos.index') }}">Voltar</a>
<br>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="produto">
    <input type="number" name="quantidade" placeholder="quantidade">
    <input type="submit" value="Salvar">
</form>
