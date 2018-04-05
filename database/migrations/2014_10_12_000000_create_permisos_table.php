<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissao_sistema', function (Blueprint $table) {
            $table->increments('co_permissao');
            $table->integer('co_usuario');
            $table->integer('co_tipo_usuario');
            $table->integer('co_sistema');
            $table->char('in_activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissao_sistema');
    }
}
