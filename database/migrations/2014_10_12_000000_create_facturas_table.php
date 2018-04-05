<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_factura', function (Blueprint $table) {
            $table->increments('co_fatura');
            $table->integer('co_cliente');
            $table->integer('co_sistema');
            $table->integer('co_os');
            $table->double('total');
            $table->double('valor');
            $table->date('data_emissao');
            $table->double('comissao_cn');
            $table->double('total_imp_inc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_factura');
    }
}
