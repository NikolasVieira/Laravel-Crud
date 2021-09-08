<h3>Informações do produto</h3>

<p>ID: {{ $produto->id }}</p>
<p>Nome: {{ $produto->nome }} </p>
<p>Quantidade: {{ $produto->quantidade }} </p>

<a href=" {{ route('produtos.index') }}">Voltar</a>

