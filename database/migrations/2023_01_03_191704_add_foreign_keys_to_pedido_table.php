<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->foreign(['fk_cliente'], 'fk_pedido_cliente1')->references(['pk_cliente'])->on('cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['fk_pizza'], 'fk_pizzapedida_pizza1')->references(['pk_pizza'])->on('pizza')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->dropForeign('fk_pedido_cliente1');
            $table->dropForeign('fk_pizzapedida_pizza1');
        });
    }
};
