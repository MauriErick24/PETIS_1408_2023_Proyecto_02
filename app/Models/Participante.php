<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'ci',
        'nombre',
        'email',
        'pais'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'evento_participante', 'participante_id', 'evento_id');
    }
}
