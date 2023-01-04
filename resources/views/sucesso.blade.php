@extends('layouts.main')

@section('title', 'Pedido Coletado')

<style>
    ion-icon {
        font-size: 250px;
        color: #0f0;
    }
    span {
        color: #FA8B28;
    }
</style>

@php
use Illuminate\Support\Facades\DB;
$user = DB::table('cliente')->where('pk_cliente', $id)->first();
@endphp

@section('content')
<div class="d-flex flex-column align-items-center mt-5">
    <h2 class="text-center">Seu pedido foi coletado <br>
    com sucesso, <span>{{ $user->nome }}</span></h2>
    <ion-icon name="checkmark-circle-outline"></ion-icon>
    <div class="d-flex flex-column">
      <a href="#" class="btn btn-primary mt-3 mb-3">Listar Todos os pedidos</a>
      <a href="/cliente/create" class="btn btn-primary">Cadastrar Novo Pedido</a>
    </div>
</div>
@endsection