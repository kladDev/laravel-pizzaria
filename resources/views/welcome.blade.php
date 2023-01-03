@extends('layouts.main')

@section('title', 'Teste')

@section('content')

@foreach($pizzas as $pizza)
    <p>{{ $pizza->sabor }} -- {{ $pizza->tamanho }} -- {{ $pizza->preco }}</p>
@endforeach

@endsection