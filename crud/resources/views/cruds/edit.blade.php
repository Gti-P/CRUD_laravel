<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Inscripción</title>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    body {
        background: linear-gradient(135deg, #0f2027, #1c1c1c);
        color: #e4e6eb;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #1e1e2f;
        padding: 40px;
        border-radius: 14px;
        width: 420px;
        box-shadow: 0 0 30px rgba(0, 123, 255, 0.15);
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #007bff;
        font-weight: 600;
        letter-spacing: 1px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 15px;
        margin-bottom: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #b0b3b8;
    }

    input {
        padding: 11px;
        border-radius: 8px;
        border: 1px solid #2f2f45;
        background-color: #2a2a40;
        color: #ffffff;
        transition: all 0.3s ease;
    }

    input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
    }

    /* Campo readonly diferenciado */
    input[readonly] {
        background-color: #252536;
        color: #888;
        cursor: not-allowed;
        border: 1px solid #333;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        margin-top: 30px;
    }

    .form-button {
        padding: 10px 16px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
        transition: all 0.3s ease;
        flex: 1;
    }

    /* Botón actualizar */
    .save-button {
        background-color: #28a745;
        color: white;
    }

    .save-button:hover {
        background-color: #218838;
        box-shadow: 0 0 12px rgba(40, 167, 69, 0.6);
        transform: translateY(-2px);
    }

    /* Botón volver */
    .back-button {
        background-color: #007bff;
        color: white;
    }

    .back-button:hover {
        background-color: #0056b3;
        box-shadow: 0 0 12px rgba(0, 123, 255, 0.6);
        transform: translateY(-2px);
    }
</style>
</head>
<body>
<div class="container">
    <h1>Editar Inscripción</h1>

    <form method="POST" action="{{ route('usuarios.update', $usuario->codigo) }}">
    @csrf
    @method('PUT')

    <label for="codigo">Código:</label>
    <input type="text" id="codigo" name="codigo" value="{{ $usuario->codigo }}" readonly>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" value="{{ $usuario->correo }}" required>

    <div class="button-container">
        <a href="{{ route('usuarios.index') }}" class="form-button back-button">Volver al listado</a>
        <button type="submit" class="form-button save-button">Actualizar</button>
    </div>
</form>
</div>
</body>
</html>