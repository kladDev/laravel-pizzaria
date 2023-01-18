@extends('layouts.main')

<style>
  .card-group h6 {
        font-size: 18px;
        color: #aaa;
    }

    .card-group .card {
        background-color: #A3824B;
    }
</style>

@section('content')
<div style="
display: flex;
justify-content: space-around;
align-items: center;
padding: 20px 0;
">
  <h1 style="
  text-align:center;
  margin:0;
  ">Relatório de Clientes</h1>
  <a href="/" class="btn btn-primary">HOME</a>
</div>
<div class="card-group mt-4">
@foreach ($clientes as $cliente)
 <div class="col-sm-4 mb-4">  
   <div class="card" style="width: 20rem;height: 10rem;">
      <div class="card-body">
        <h2>Cliente: {{$cliente->nome}}</h2>
        <p>Quantidade: {{$cliente->quantidade}}</p>
        <p>Valor Total: R${{$cliente->valor}},00</p>
      </div>
    </div>
  </div>
@endforeach
</div>