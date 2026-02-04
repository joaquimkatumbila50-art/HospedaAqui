<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Editar Hotel</title>
</head>
<body>
    <h1>Editar Hotel</h1>


    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif


    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <label>Nome:</label><br>
        <input type="text" name="nome" value="{{ $hotel->nome }}"><br><br>

        <label>Endereço:</label><br>
        <input type="text" name="endereco" value="{{ $hotel->endereco }}"><br><br>

        <label>Cidade:</label><br>
        <input type="text" name="cidade" value="{{ $hotel->cidade }}"><br><br>

        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco" value="{{ $hotel->preco }}"><br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao">{{ $hotel->descricao }}</textarea><br><br>

        <button type="submit">Atualizar Hotel</button>
    </form>

    <br>
    <a href="{{ route('hotels.index') }}">Voltar à lista de hotéis</a>
</body>
</html>
