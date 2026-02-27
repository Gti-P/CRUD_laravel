<! DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nueva Inscripcion</title>

<style>
    /* Reset básico */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: #121212;
        color: #e0e0e0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    h1 {
        margin-bottom: 20px;
        color: #007bff;
    }

    form {
        background-color: #1e1e1e;
        padding: 30px;
        border-radius: 10px;
        width: 350px;
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.2);
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 15px;
        margin-bottom: 5px;
        font-weight: bold;
        font-size: 14px;
    }

    input {
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #333;
        background-color: #2a2a2a;
        color: #ffffff;
        transition: 0.3s ease;
    }

    input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px #007bff;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 25px;
    }

    .form-button {
        padding: 10px 15px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: 0.3s ease;
    }

    /* Botón Guardar (Verde) */
    .save-button {
        background-color: #28a745;
        color: white;
    }

    .save-button:hover {
        background-color: #218838;
        box-shadow: 0 0 8px #28a745;
    }

    /* Botón Atrás (Azul) */
    .back-button {
        background-color: #007bff;
        color: white;
    }

    .back-button:hover {
        background-color: #0056b3;
        box-shadow: 0 0 8px #007bff;
    }

    /* Opcional: estado peligro (Rojo si lo necesitas en otro botón) */
    .danger-button {
        background-color: #dc3545;
        color: white;
    }

    .danger-button:hover {
        background-color: #c82333;
        box-shadow: 0 0 8px #dc3545;
    }
    
</style>
</style>

</head>

<body>

<h1>Nueva Inscripcion</h1>
<form method="POST" action="{{ route('usuarios.store') }}">
@csrf
<label for="codigo">Codigo :</label>
<input type="text" id="codigo" name="codigo" placeholder="Codigo" required>

<label for="nombre">Nombre :</label>
<input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

<label for="correo">Correo :</label>
<input type="email" id="correo" name="correo" placeholder="Correo" required>

<div class="button-container">
<a href="{{ route('usuarios.index' ) }}" class="form-button back-button">Atras</a>
<button type="submit" class="form-button save-button">Guardar</button>
</div>
</form>
</body>
</html>