@extends('layouts.app')

@section('content')
<h2>Usuários</h2>


<a href="{{ route('users.create') }}">Cadastrar Usuário</a>

<table>
@foreach($users as $user)
<tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->role }}</td>
    <td>
       <a href="{{ route('users.edit', $user->id) }}">Editar</a>
    </td>
</tr>
@endforeach
</table>
@endsection
