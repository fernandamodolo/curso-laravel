@extends('admin.layouts.app')
@section('content')

<h1>Exibindo os produtos</h1>

<a href="{{ route('products.create') }}">Cadastrar</a>

<hr> 
 @component('admin.components.card')
    @slot('title')
        <h1>Titulo Card</h1>
    @endslot
    
    Um card de exemplo
 @endcomponent

<hr>
@include('admin.includes.alerts',['content'=>'Alerta de preços dos produtos'])

<hr>
@if(@isset($products))
    @foreach($products as $product)
        <p class="@if($loop->last)last @endif">{!! $product !!}</p>
    @endforeach

@endif

<hr>
@forelse($products as $product)

<p class="@if($loop->first)last @endif">{!! $product !!}</p>

@empty

    <p>Nao existem produtos cadastrados !</p>

@endforelse

<hr>

@if($teste === '123')
    é igual

@elseif($teste == 123)
    é igual a 123

@else 
    é diferente

@endif
@unless($teste === '123') 
    byfhbfujvnh
@endunless

@isset($teste2)
  <p> {!!$teste2!!}</p>
@endisset

@empty($teste3)
    <p>Vazio...</p>
@endempty

@auth
    <p>Autenticado</p>
    @else   
        <p>Nao autenticado</p>
@endauth

@guest
    <p>Nao autenticado</p>
@endguest

@switch($teste)
    @case(1)
        <p>é igual a 1</p>
        @break
        
     @case(2)
        <p>é igual a 2</p>
        @break
     @case(123)
        <p>é igual a 123</p>
         @break
    @default
    <p>Default</p>
@endswitch

@endsection()


@push('styles')
    <style>
        .last {background: #127};
    </style>    
@endpush

@push('scripts')
    <script>
        document.body.style.background='#1274'
    </script>
@endpush