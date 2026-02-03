<form method="post" action="{{route("hotel,store")  }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome do hotel">
    <input type="text" nome="endereco" placeholder="endereco">
    <input type="text" nome="cidade" placeholder="cidade">
    <input type="text" nome="preco" placeholder="preco">
    <textarea name="descrição"></textarea>
    <button type="submit">Cadastrar</button>
    
</form>
    