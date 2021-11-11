<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->decimal('valor',10,2);
            $table->dateTime('dt_item');

            $table->unsignedBigInteger('id_produtos');
            $table->unsignedBigInteger('id_pedidos');
            $table->timestamps();

            $table->foreign('id_produtos')
                ->references('id')->on('produtos')
                ->onDelete('cascade');

            $table->foreign('id_pedidos')
                ->references('id')->on('pedidos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_pedidos');
    }
}
