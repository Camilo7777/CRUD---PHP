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
        Schema::create('students', function (Blueprint $table) {
        
            $table->id();
            $table->string('Documento');
            $table->string('Nombre');
            $table->string('Tipo_Sangre');
            $table->string('Direccion');
            $table->string('Tipo_Licencia');
            $table->string('Descripcion');
            $table->string('Precio');
            
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
        Schema::dropIfExists('students');
    }
};
