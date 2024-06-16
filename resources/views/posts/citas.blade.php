<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</head>
<body>


   <h1>Agenda Tu Cita</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form id="appointmentForm" action="{{ route('citas.store') }}" method="POST">
        @csrf
        <label for="first_name">Nombre:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Apellido:</label>
        <input type="text" id="last_name" name="last_name" required>

       

        <label for="phone">Número de teléfono:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="service">Servicio requerido:</label>
        <select id="service" name="service" required>
            <option value="">Seleccione</option>
            <option value="Corte de cabello">Corte de cabello</option>
            <option value="Tinte">Tinte</option>
            <option value="Peluquería">Peluquería</option>
            <option value="Maquillaje">Maquillaje</option>
            <option value="Otro">Otro</option>
        </select>

        <label for="appointment_date">Fecha:</label>
        <input type="date" id="appointment_date" name="appointment_date" required>

        <label for="appointment_time">Hora:</label>
        <input type="time" id="appointment_time" name="appointment_time" required>

        <button type="submit">Agendar</button>
    </form>

     <!-- Modal -->
     <div id="successModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>El agendamiento ha sido exitoso.</p>
            <button class="btn-accept" id="acceptButton">Aceptar</button>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("successModal");

        // Get the button that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Get the accept button
        var acceptButton = document.getElementById("acceptButton");

        // When the user submits the form, open the modal
        document.getElementById("appointmentForm").onsubmit = function(event) {
            event.preventDefault(); // Prevent form submission
            modal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks on accept button, redirect to the index page
        acceptButton.onclick = function() {
            window.location.href = "/";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>





</body>
</html>
