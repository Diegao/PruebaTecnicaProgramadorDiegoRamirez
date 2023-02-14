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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table -> string ('codigo_Empleado');
            $table -> string ('DPI');
            $table -> string ('nit');
            $table -> string ('puesto');
            $table -> string ('PrimerNombre');
            $table -> string ('SegundoNombre');
            $table -> string ('PrimerApellido');
            $table -> string ('SegundoApellido');
            $table -> string ('fechaNacimiento');
            $table -> string ('fechaInicioLabores');
            $table -> string ('Profesion');
            $table -> string ('Telefono');
            $table -> string ('estadoCivil');
            $table -> string ('Direccion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
