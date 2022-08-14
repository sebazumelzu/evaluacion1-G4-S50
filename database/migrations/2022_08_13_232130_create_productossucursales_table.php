<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productossucursales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prod_id')->constrained('productos');
            $table->foreignId('suc_id')->constrained('sucursales');
            $table->integer('precioProd');
            $table->integer('stockProd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productossucursales');
    }
}