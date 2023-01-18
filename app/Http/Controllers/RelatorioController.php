<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Pedido;

class RelatorioController extends Controller
{
    //
    public function show(){
        // $response_cliente = Cliente::select('select cliente.nome, sum(pedido.quantidade) as quantidade,
        //     sum(pizza.preco * pedido.quantidade) as total
        //     from cliente, pedido, pizza where cliente.pk_cliente = pedido.fk_cliente 
        //     and pedido.fk_pizza = pizza.pk_pizza group by cliente.nome')->get();
            
        $response_cliente = DB::table('cliente')
        ->join('pedido', 'pedido.fk_cliente','=','cliente.pk_cliente')
        ->join('pizza', 'pizza.pk_pizza','=','pedido.fk_pizza')
        ->select('cliente.nome', DB::raw('SUM(pedido.quantidade) as quantidade'),DB::raw('SUM(pedido.quantidade * pizza.preco) as valor'))->groupBy('cliente.nome')->get();

        return view('relatorio', ['clientes' => $response_cliente]);
    }
}
