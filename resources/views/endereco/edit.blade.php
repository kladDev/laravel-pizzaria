@extends('layouts.main')

@section('title', 'Atualizar Endereço')

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
            Oi <span>{{ $user->nome }}</span>!
        </h1>

        <h2>
            Atualize seu endereço
        </h2>
    </div>

    <ion-icon name="calendar-outline"></ion-icon>

    <form action="/endereco/update/{{ $id }}" method="post" class="d-flex flex-column align-items-center">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="n_casa">N° da casa</label>
            <input type="text" class="form-control" name="n_casa" id="n_casa" value="{{$endereco->n_casa}}" placeholder="12">
        </div>
        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua" value="{{$endereco->rua}}" placeholder="Rua São Pedro">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="{{$endereco->bairro}}" placeholder="ex: Centro">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" value="{{$endereco->cidade}}" placeholder="Caxias">
        </div>
        <div style="text-align: right;">
            <button type="submit" class="btn btn-primary send">Atualizar</button>
        </div>
    </form>
</div>

@endsection