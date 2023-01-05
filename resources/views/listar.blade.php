@extends('layouts.main')

@section('title', 'Todos os pedidos feitos')
<style>
    ion-icon {
        font-size: 20px;
        color: #ccc;
    }
    .card-group h6 {
        font-size: 18px;
        color: #aaa;
    }
    .card-group .card {
        background-color: #A3824B;
    }
</style>
@section('content')

<!-- @foreach($clientes as $cliente)

    <p>{{ $cliente->nome }} -- {{ $cliente->telefone }}</p>

    @foreach($enderecos as $endereco)
        @if($cliente->pk_cliente == $endereco->fk_cliente)
            <p>{{ $endereco->n_casa }} -- {{ $endereco->rua }} -- {{ $endereco->bairro }} -- {{ $endereco->cidade }}</p>
        @endif
    @endforeach

    @foreach($pedidos as $pedido)
        @if($cliente->pk_cliente == $pedido->fk_cliente)

        @foreach($pizzas as $pizza)
            @if($pizza->pk_pizza == $pedido->fk_pizza)
                <p>{{ $pizza->sabor }} -- {{$pizza->tamanho}} </p>
            @endif
        @endforeach
        <p>{{ $pedido->quantidade }}</p>
        @endif
    @endforeach

@endforeach -->

<div class="card-group mt-4">
    @foreach($clientes as $cliente)

    <div class="col-sm-4">
        <div class="card" style="width: 20rem;height: 25rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title">Pedido</h5>
                    <a href="#">
                        <ion-icon  style="color: #f00;" name="trash-outline"></ion-icon>
                    </a>
                </div>
                <div class="d-flex justify-content-between align-items-center ">
                    <h6 class="card-subtitle">Perfil</h6>
                    <a href="#">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                </div>
                <div class="text-center"><span>{{ $cliente->nome }}, </span><span>{{ $cliente->telefone }}</span></div>
                @foreach($enderecos as $endereco)
                @if($cliente->pk_cliente == $endereco->fk_cliente)
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-subtitle mt-2">Endereço</h6>
                    <a href="#">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                </div>
                <div class="text-center"><span>{{ $endereco->n_casa }}, </span><span>{{ $endereco->rua }}, </span> <span>{{ $endereco->bairro }}, </span> <span>{{ $endereco->cidade }}</span></div>
                @endif
                @endforeach
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-subtitle mt-2">Pizza</h6>
                    <a href="#">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                </div>
                <div class="text-center">
                    @foreach($pedidos as $pedido)
                    @if($cliente->pk_cliente == $pedido->fk_cliente)
                    @foreach($pizzas as $pizza)
                    @if($pizza->pk_pizza == $pedido->fk_pizza)
                    <span>{{ $pizza->sabor }}, </span> <span>{{ $pizza->tamanho }}, </span>
                    @endif
                    @endforeach
                    <span>{{ $pedido->quantidade }}</span> <br>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection