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
        Schema::create('observacao', function (Blueprint $table) {
            $table->integer('pk_observacao', true);
            $table->string('observacao', 45)->nullable();
            $table->integer('pk_pedido')->index('fk_observacao_pedido1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observacao');
    }
};
