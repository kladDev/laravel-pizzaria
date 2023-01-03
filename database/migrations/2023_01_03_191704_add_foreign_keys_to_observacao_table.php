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
        Schema::table('observacao', function (Blueprint $table) {
            $table->foreign(['pk_pedido'], 'fk_observacao_pedido1')->references(['pk_pedido'])->on('pedido')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('observacao', function (Blueprint $table) {
            $table->dropForeign('fk_observacao_pedido1');
        });
    }
};
