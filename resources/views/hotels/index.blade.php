<!DOCTYPE html>
<html>
<head>
    <title>Lista de Hotéis</title>
</head>
<body>
    <h1>Lista de Hotéis</h1>

    <a href="{{ route('hotels.create') }}">Cadastrar Novo Hotel</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->nome }}</td>
                    <td>{{ $hotel->endereco }}</td>
                    <td>{{ $hotel->cidade }}</td>
                    <td>{{ $hotel->preco }}</td>
                    <td>
                        <a href="{{ route('hotels.edit', $hotel->id) }}">Editar</a>
                        
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
