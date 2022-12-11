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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            // add tables
            $table->string("firstName");
            $table->string("lastName");
            $table->string("age");
            $table->string("sex");
            // para evitar los valores duplicados en la tabla
            $table->string("dni", 8)->unique();
            $table->string("blood_type");
            $table->string("telephone", 9);
            $table->string("email");
            $table->string("direction");

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
        Schema::dropIfExists('pacientes');
    }
};
