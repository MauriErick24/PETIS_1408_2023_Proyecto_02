<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_evento')->nullable();
            $table->date('inicio_inscripcion')->nullable();
            $table->date('fin_inscripcion')->nullable();
            $table->date('fin_evento')->nullable();
            $table->string('organizador')->nullable();
            $table->string('imagen')->nullable();
            $table->string('lugar')->nullable();
            $table->string('email')->nullable();
            $table->string('descripcion')->nullable();
            $table->time('hora')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('requisito')->nullable();
            $table->string('premio')->nullable();
            $table->string('reglas')->nullable();
            $table->string('detalle')->nullable();
            $table->string('afiche')->nullable();
            $table->string('contenido')->nullable();
            $table->string('invitado')->nullable();
            $table->foreignId('tipoEvento_id')
                ->constrained('tipo_eventos')
                ->cascadeOnUpdate()
                ->onDelete('cascade');
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
        Schema::dropIfExists('eventos');
    }
}
