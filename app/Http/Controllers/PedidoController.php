<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Endereco;
use Illuminate\Support\Facades\DB;


class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::all();
        $pedidos = Pedido::all();
        $clientes = Cliente::all();
        $enderecos = Endereco::all();

        return view('listar', ['pizzas' => $pizzas, 'pedidos' => $pedidos, 'clientes' => $clientes, 'enderecos' => $enderecos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $pizzas = Pizza::all();

        return view("pedido.create", ['id' => $id, 'pizzas' => $pizzas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        for ($i = 0; $i < 24; $i++) {
            if ($request->quantidade[$i] != 0) {
                $pedido = new Pedido;
                $pedido->quantidade = $request->quantidade[$i];
                $pedido->fk_pizza = $request->fk_pizza[$i];
                $pedido->fk_cliente = $request->fk_cliente;
                echo $pedido;
                $pedido->save();
            }
        }

        return redirect("/sucesso/{$pedido->fk_cliente}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizzas = Pizza::all();
        $pedidos = DB::table('pedido')->where('fk_cliente', $id)->get();
        return view("pedido.edit", ['id' => $id, 'pedidos' => $pedidos, 'pizzas' => $pizzas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $i = 0;
        $pedidos = DB::table('pedido')->where('fk_cliente', $id)->get();

        foreach ($pedidos as $pedido) {
            $pedido = Pedido::find($pedido->pk_pedido);
            if ($request->quantidade[$i] == 0) {
                $pedido->delete();
            } else {
                $pedido->quantidade = $request->quantidade[$i];
                $pedido->save();
            }
            $i++;
        }
        return redirect('/listar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $pedidos = DB::table('pedido')->where('fk_cliente', $id)->get();
        $endereco = DB::table('endereco')->where('fk_cliente', $id)->first();

        $endereco = Endereco::find($endereco->pk_endereco);

        foreach($pedidos as $pedido) {
            $pedido = Pedido::find($pedido->pk_pedido);
            $pedido->delete();
        }

        $endereco->delete();
        $cliente->delete();

        return redirect('/listar');

    }
}
