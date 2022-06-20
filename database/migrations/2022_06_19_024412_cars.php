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
            Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad');
            $table->string('total');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_ventas');
            $table->foreign('id_ventas')->references('id')->on('ventas');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('productos');
          
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
