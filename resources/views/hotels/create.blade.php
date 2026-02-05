@extends('layouts.app')

@section('content')


<h1>Cadastrar Hotel</h1>
<form action="{{ route('hotels.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome do Hotel">
    <input type="text" name="endereco" placeholder="Endereço">
    <input type="text" name="cidade" placeholder="Cidade">
    <input type="number" name="preco" placeholder="Preço">
    <textarea name="descricao" placeholder="Descrição"></textarea>
    <button type="submit">Cadastrar</button>
</form>
<a href="{{ route('hotels.index') }}">Voltar à Lista de Hotéis</a>

