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
        Schema::create('asociados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table -> string ('codigo_Empleado');
            $table -> string ('DPI');
            $table -> string ('nit');
            $table -> string ('pasaporte');
            $table -> string ('fe_edad');
            $table -> string ('PrimerNombre');
            $table -> string ('SegundoNombre');
            $table -> string ('PrimerApellido');
            $table -> string ('SegundoApellido');
            $table -> string ('fechaNacimiento');
            $table -> string ('fechaInicio');
            $table -> string ('Profesion');
            $table -> string ('Telefono');
            $table -> string ('estadoCivil');
            $table -> string ('referenciaLa1');
            $table -> string ('telefonoReferencia1');
            $table -> string ('referenciaLa2');
            $table -> string ('telefonoReferencia2');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asociados');
    }
};
