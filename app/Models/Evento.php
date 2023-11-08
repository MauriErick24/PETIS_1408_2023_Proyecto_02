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

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function tipoEvento()
    {
        return $this->belongsTo(TipoEvento::class, 'tipoEvento_id');
    }

    public function auspiciadores()
    {
        return $this->belongsToMany(Auspiciador::class);
    }

    public function organizadores()
    {
        return $this->belongsToMany(Organizador::class);
    }

    public function premios()
    {
        return $this->belongsToMany(Premio::class);
    }

    public function requisitos()
    {
        return $this->belongsToMany(Requisito::class);
    }
}
