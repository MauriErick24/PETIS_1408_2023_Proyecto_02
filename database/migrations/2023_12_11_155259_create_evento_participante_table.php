<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoParticipanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_participante', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')
                ->constrained('eventos')
                ->cascadeOnUpdate()
                ->onDelete('cascade');
            $table->foreignId('participante_id')
                ->constrained('participantes')
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
        Schema::dropIfExists('evento_participante');
    }
}
