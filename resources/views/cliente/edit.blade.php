@extends('layouts.main')

@section('title', 'Atualizar dados do cliente')
<style>
    #main {
        width: 750px;
        margin: 0 auto;
    }

    ion-icon {
        font-size: 200px;
        color: #FCAF6A;
        --ionicon-stroke-width: 8px;
    }
</style>

@section('content')
<header>

</header>
<main id="main" class="d-flex flex-column align-items-center mt-5">
    <h1 class="text-center">Atualização do cliente</h1>
    <ion-icon name="person-outline"></ion-icon>
    <form method="post" action="/cliente/update/{{$id}}" class="d-flex flex-column align-items-center">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="{{$cliente->nome}}" name="nome" id="nome" placeholder="José Pedro" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" value="{{$cliente->telefone}}" name="telefone" id="telefone" placeholder="ex: (98) 99121-1231" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</main>
@endsection