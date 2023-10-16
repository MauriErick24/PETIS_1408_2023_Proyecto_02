<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_evento'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
