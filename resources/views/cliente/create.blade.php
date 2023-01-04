@extends('layouts.main')

@section('title', 'Registrar Cliente')
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
    <h1 class="text-center">Registrar Cliente</h1>
    <ion-icon name="person-outline"></ion-icon>
    <form method="post" action="/cliente" class="d-flex flex-column align-items-center">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="José Pedro" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="ex: (98) 99121-1231" required>
        </div>
        <div style="text-align: right;">
            <button type="submit" class="btn btn-primary">Proximo</button>
        </div>
    </form>
</main>
@endsection