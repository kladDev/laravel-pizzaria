@extends('layouts.main')

@section('title', 'Registrar Endereço')

<style>
    ion-icon {
        font-size: 150px;
    }

    div h2 {
        font-size: 20px;
    }

    span {
        color: #FA8B28;
    }
</style>

@section('content')
@php
use Illuminate\Support\Facades\DB;
$user = DB::table('cliente')->where('pk_cliente', $id)->first();
@endphp

<div class="d-flex flex-column align-items-center mt-3">
    <div class="text-center">
        <h1>
            Seja bem vindo(a), <span>{{ $user->nome }}</span>.
        </h1>

        <h2>
            Precisamos saber mais sobre você, <br>
            agora adicione um endereço para entrega
        </h2>
    </div>

    <ion-icon name="calendar-outline"></ion-icon>

    <form action="/endereco" method="post" class="d-flex flex-column align-items-center">
        @csrf
        <div class="form-group">
            <label for="n_casa">N° da casa</label>
            <input type="text" class="form-control" name="n_casa" id="n_casa" placeholder="12">
        </div>
        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua São Pedro">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="ex: Centro">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Caxias">
        </div>
        <input type="hidden" value="{{ $id }}" name="fk_cliente">
        <div style="text-align: right;">
            <button type="submit" class="btn btn-primary send">Próximo</button>
        </div>
    </form>
</div>

@endsection