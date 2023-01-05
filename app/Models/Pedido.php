<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedido";
    public $timestamps = false;
    protected $primaryKey = 'pk_pedido';
    use HasFactory;
}
