@extends('layouts.main')

@section('title', 'Pedido')

@section('content')
<div class="card-group">
    <div class="card">
        <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">
        <div class="card-body">
            <div>
                <div>
                    <span>Sabor: </span> <span>Calabresa</span>
                </div>
                <div>
                    <span>Preço: </span> <span>R$ 182,00</span>
                </div>
                <div>
                    <span>Tamanho: </span> <span>P</span>
                </div>
                <div>
                    <span>Quantidade: </span> <input type="number" name="quantidade" id="quantidade" min="0" max="15">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection