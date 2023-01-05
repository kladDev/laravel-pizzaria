@extends('layouts.main')

@section('title', 'Pedido')

@section('content')
@php
$i = 0;
$j =0;
@endphp
<h1 class="text-center mt-3">Estamos quase lá</h1>
<div class="card-group mt-4 mb-4">
    @foreach($pizzas as $pizza)
    @if($i % 3 == 0)
        @php
        $j++;
        @endphp
    @endif
    <div class="col-sm-4">
        <form method="post" action="/pedido" class="form-group">
            @csrf
            <div style="background-color: #eee;" class="card mt-3">
                <img style="height: 20rem; object-fit: cover;" class="card-img-top" src="/img/post-{{$j}}.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <div>
                        <div>
                            <span>Sabor: </span> <span>{{ $pizza-> sabor }}</span>
                        </div>
                        <div>
                            <span>Preço: </span> <span>R$ {{ $pizza->preco }}</span>
                        </div>
                        <div>
                            <span>Tamanho: </span> <span>{{ $pizza->tamanho }}</span>
                        </div>
                        <div>
                            <span>Quantidade: </span> <input type="number" name="quantidade[]" id="quantidade" min="0" max="15">
                        </div>
                        <input type="hidden" value="{{ $pizza->pk_pizza }}" name="fk_pizza[]">
                        <input type="hidden" value="{{ $id }}" name="fk_cliente">
                    </div>
                </div>
            </div>
    </div>
    @php
    $i++;
    @endphp
    @endforeach
</div>
<div class="mb-4" style="text-align: center;">
    <button type="submit" id="btn" class="btn btn-primary">Fazer Pedido</button>
</div>
</form>
@endsection