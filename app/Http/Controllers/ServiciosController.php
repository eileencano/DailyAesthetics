<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all(); // Obtener todos los servicios desde el modelo Servicio
        dd($servicios); 
        return view('index', compact('servicios')); // Asegúrate de que la vista 'index' esté en la carpeta correcta
    }
}
