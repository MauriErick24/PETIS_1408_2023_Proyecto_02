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
        //'afiche',
        'contenido',
        'invitado',
        'estado_evento',
        'tipoEvento_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot'
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
        return $this->belongsToMany(Organizador::class, 'evento_organizador', 'evento_id', 'organizador_id');
    }

    public function premios()
    {
        return $this->belongsToMany(Premio::class);
    }

    public function requisitos()
    {
        return $this->belongsToMany(Requisito::class);
    }

    public function afiches()
    {
        return $this->belongsToMany(Afiche::class, 'afiche_evento', 'evento_id', 'afiche_id');
    }
    public function actividades()
    {
        return $this->belongsToMany(Actividad::class, 'actividad_evento', 'evento_id', 'actividad_id');
    }
    public function comunicados()
    {
        return $this->hasMany(Comunicado::class);
    }
}
