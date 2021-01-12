@extends('admin.layouts.app')

@section('title',"Editar produto ")
@section('content')
    <h1>Editar Produto {{ $product->name }} </h1>
    <form action="{{ route('products.update', $product->id)}}" method="post"enctype="multipart/form-data" >
        @method('PUT')
        @include('admin.pages.products.partials.form')
    </form>
@endsection