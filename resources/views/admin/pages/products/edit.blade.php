@extends('admin.layouts.app')

@section('title','editar produto')
@section('content')
    <h1>Editar Produto {{ $id }}</h1>
    <form action="{{ route('products.update', $id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="nome" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit"> Enviar </button>
    </form>
@endsection