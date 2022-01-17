<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('linea', 15);
            $table->string('catalogo', 10);
            $table->integer('modelo');
            $table->string('serie', 40);
            $table->string('color', 20);
            $table->string('ubicacion', 30);
            $table->integer('diasPiso');
            $table->decimal('costo', 10, 2);
            $table->string('estatus',10);
            $table->string('comentarios', 60);
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
        Schema::dropIfExists('carros');
    }
}
