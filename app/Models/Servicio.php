<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';

    protected $fillable = [
        'nombre_servicio', 'descripcion', 'precio' , 'imagen'
        // Agrega aquí otros campos que desees poder asignar masivamente
    ];



    // Relación con agendas
    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'servicios_id');
    }

     // Accesor para formatear el precio
     public function getPrecioAttribute($value)
     {
         return '$' . number_format($value, 0, ',', '.');
     }

}
