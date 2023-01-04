@extends('layouts.main')

@section('title', 'Registrar Cliente')
<style>
    #main {
        width: 750px;
        margin: 0 auto;
    }
    .person {
        font-size: 200px;
        color: #FCAF6A;
        --ionicon-stroke-width: 8px;
    }
</style>
<!-- Testando pull request -->

@section('content')
<div id="main" class="d-flex flex-column align-items-center ">
    <h1 class="text-center">Registrar Cliente</h1>
    <ion-icon class="person" name="person-outline"></ion-icon>
    <form class="d-flex flex-column align-items-center">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="email" class="form-control" name="name" id="name" placeholder="José Pedro">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="tel" class="form-control" name="phone" id="telefone" placeholder="ex: (98) 99121-1231">
        </div>
        <button type="submit" class="btn btn-primary send">Enviar</button>
    </form>
</div>
@endsection