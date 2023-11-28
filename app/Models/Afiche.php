<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiche extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'afiche_evento', 'afiche_id', 'evento_id');
    }
}
