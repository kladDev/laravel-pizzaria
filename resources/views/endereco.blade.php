@extends('layouts.main')

@section('title', 'Registrar Endereço')

<style>
    ion-icon {
        font-size: 150px;
    }
    div h2 {
        font-size: 20px;
    }
</style>

@section('content')
<div class="d-flex flex-column align-items-center">
    <div class="text-center">
        <h1>
            Seja bem vindo(a), <span>User</span>.
        </h1>
        
        <h2>
            Precisamos saber mais sobre você, <br>
            agora adicione um endereço para entrega
        </h2>
    </div>
    
    <ion-icon name="calendar-outline"></ion-icon>
    
    <form class="d-flex flex-column align-items-center">
            <div class="form-group">
                <label for="number-house">N° da casa</label>
                <input type="text" class="form-control" name="number-house" id="number-house" placeholder="12">
            </div>
            <div class="form-group">
                <label for="street">Rua</label>
                <input type="text" class="form-control" name="street" id="street" placeholder="Rua São Pedro">
            </div>
            <div class="form-group">
                <label for="district">Bairro</label>
                <input type="text" class="form-control" name="district" id="district" placeholder="ex: Centro">
            </div>
            <div class="form-group">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Caxias">
            </div>
            <button type="submit" class="btn btn-primary send">Próximo</button>
        </form>
</div>

@endsection