<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
    protected $table = 'calendario';

    protected $fillable = [
        'agenda_id', 'titulo', 'descripcion', 'fecha'
        // Agrega aquí otros campos que desees poder asignar masivamente
    ];

    // Relación con agenda
    public function agenda()
    {
        return $this->belongsTo(Agenda::class, 'agenda_id');
    }
}
