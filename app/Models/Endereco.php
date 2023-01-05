<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = "endereco";
    public $timestamps = false;
    protected $primaryKey = 'pk_endereco';

    use HasFactory;
}
