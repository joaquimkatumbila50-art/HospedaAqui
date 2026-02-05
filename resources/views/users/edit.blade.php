@extends('layouts.app')

@section('content')
<h2>Editar Usuário</h2>

<form method="POST" action="{{ route('users.update', $user->id) }}">
@csrf
@method('PUT')
<label for="nome">Nome</label>
<input name="name" value="{{ $user->name }}">
<label for="email">Email</label>
<input name="email" value="{{ $user->email }}">
<label for="Password">Password</label>
<input type="password" name="password" >
<select name="role">
    <option value="user" @selected($user->role=='user')>Usuário</option>
    <option value="manager" @selected($user->role=='manager')>Gerente</option>
    <option value="admin" @selected($user->role=='admin')>Administrador</option>
</select>

<button>Atualizar</button>
</form>
@endsection

