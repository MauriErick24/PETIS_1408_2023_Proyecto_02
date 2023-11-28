<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'actividad_evento', 'actividad_id', 'evento_id');
    }
}
