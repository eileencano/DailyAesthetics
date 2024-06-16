<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre', 'correo', 'telefono'
        // Agrega aquí otros campos que desees poder asignar masivamente
    ];

    // Relación con agendas
    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'cliente_id');
    }
}
