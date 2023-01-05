@extends('layouts.main')

@section('title', 'Pedido')

@section('content')

<div class="card-group mt-4 mb-4">
    @foreach($pedidos as $pedido)
    @foreach($pizzas as $pizza)
    @if($pedido->fk_pizza == $pizza->pk_pizza)
    <div class="col-sm-4">
        <form method="post" action="/pedido/update/{{ $id }}" class="form-group">
            @csrf
            @method('PUT')
            <div class="card mt-3">
                <img class="card-img-top" src="/img/post-1.jpg" alt="Imagem de capa do card">
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
                            <span>Quantidade: </span> <input type="number" value="{{ $pedido->quantidade }}" name="quantidade[]" id="quantidade" min="0" max="15">
                        </div>
                        <input type="hidden" value="{{ $pizza->pk_pizza }}" name="fk_pizza[]">
                    </div>
                </div>
            </div>
    </div> 
    @endif
    @endforeach
    @endforeach

</div>
<div class="mb-4" style="text-align: center;">
    <button type="submit" id="btn" class="btn btn-primary">Fazer Pedido</button>
</div>
</form>

@endsection