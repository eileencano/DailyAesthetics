<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\Citas;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('posts.citas');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'service' => 'required|string|max:255',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
        ]);

        // Crear una nueva cita
        $appointment = new Appointment();
        $appointment->first_name = $request->first_name;
        $appointment->last_name = $request->last_name;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->service = $request->service;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->appointment_time = $request->appointment_time;
        $appointment->save();

        // Enviar notificación de WhatsApp
        $this->sendWhatsAppNotification($request->phone, $appointment);

        return redirect()->back()->with('success', 'El agendamiento ha sido exitoso.');
    }

    protected function sendWhatsAppNotification($phone, $appointment)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio = new Client($sid, $token);

        $message = "Hola {$appointment->first_name}, tu cita para {$appointment->service} está agendada para el {$appointment->appointment_date} a las {$appointment->appointment_time}.";

        $twilio->messages->create("whatsapp:{$phone}", [
            "from" => env('TWILIO_WHATSAPP_FROM'),
            "body" => $message
        ]);
    }
}
