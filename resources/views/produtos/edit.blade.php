<h3>Editar produto</h3>

<form action="{{ route('produtos.update', $produto->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $produto->nome }}">
    <input type="number" name="quantidade" value="{{ $produto->quantidade }}">
    <input type="submit" value="Salvar">
</form>

<a href=" {{ route('produtos.index') }}">Voltar</a>

