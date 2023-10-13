<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_evento',
        'inicio_inscripcion',
        'fin_inscripcion',
        'fin_evento',
        'organizador',
        'imagen',
        'lugar',
        'email',
        'descripcion',
        'hora',
        'telefono',
        'requisito',
        'premio',
        'reglas',
        'detalle',
        'afiche',
        'contenido',
        'invitado',
        'tipoEvento_id'
    ];

    public function tipo_evento()
    {
        return $this->belongsTo(TipoEvento::class);
    }
}
