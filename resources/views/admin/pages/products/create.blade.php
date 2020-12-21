@extends('admin.layouts.app')

@section('title','cadastrar novo produto')
@section('content')
    <h1>Cadastrar novo produto </h1>
    <form action="{{ route('products.store')}}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit"> Enviar </button>
    </form>
@endsection