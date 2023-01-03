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
        Schema::create('endereco', function (Blueprint $table) {
            $table->integer('pk_endereco', true);
            $table->string('n_casa', 10)->nullable();
            $table->string('rua', 45);
            $table->string('bairro', 45);
            $table->string('cidade', 45);
            $table->integer('fk_cliente')->index('fk_endereco_cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
};
