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
            $table->string('nombre_evento');
            $table->date('inicio_inscripcion');
            $table->date('fin_inscripcion');
            $table->date('fin_evento');
            $table->string('organizador');
            $table->string('imagen');
            $table->string('lugar');
            $table->string('email');
            $table->string('descripcion');
            $table->time('hora');
            $table->integer('telefono');
            $table->string('requisito');
            $table->string('premio');
            $table->string('reglas');
            $table->string('detalle');
            $table->string('afiche');
            $table->string('contenido');
            $table->string('invitado');
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
