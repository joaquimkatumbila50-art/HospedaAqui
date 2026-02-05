<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <label for="name">Nome</label>
    <input name="name" required>

    <label for="email">Email</label>
    <input name="email" type="email" required>

    <label for="password">Senha</label>
    <input type="password" name="password" required>

    <label for="role">Função</label>
    <select name="role">
        <option value="user">Usuário</option>
        <option value="manager">Gerente</option>
        <option value="admin">Administrador</option>
    </select>

    <button type="submit">Cadastrar</button>
</form>
