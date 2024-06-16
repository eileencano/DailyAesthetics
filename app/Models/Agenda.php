<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    protected $fillable = [
        'nombre', 'correo_electronico', 'numero_de_telefono', 'cliente_id', 'servicio_id', 'fecha', 'hora'
        // Agrega aquí otros campos que desees poder asignar masivamente
    ];

    /**
     * Define la relación con el modelo Cliente.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clientes_id');
    }

    /**
     * Define la relación con el modelo Servicio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'servicios_id');
    }



}
