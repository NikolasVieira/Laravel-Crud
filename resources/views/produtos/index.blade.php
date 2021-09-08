<h2>Produtos</h2>
<a href="{{ route('produtos.create') }}">Novo Produto</a>
<br><br>
<table>
    <tr>
        <th scope="col">#Id</th>
        <th scope="col">Produto</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Opções</th>
    </tr>
    @foreach ($produto as $produtos)
    <tr>
        <th scope="row">{{ $produtos->id }}</th>
        <td> {{ $produtos->nome }}</td>
        <td> {{ $produtos->quantidade }}</td>
        <td>
        <a href="{{ route('produtos.show', $produtos->id) }}">Detalhes</a>
        <a href="{{ route('produtos.edit', $produtos->id) }}">Alterar</a>
        <a href="{{ route('produtos.delete', $produtos->id) }}">Deletar</a>
        </td>
    </tr>
    @endforeach
</table>
