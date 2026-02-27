<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de inscritos</title>
<style>
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
        padding: 40px;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    h1 {
        color: #007bff;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .button-new {
        background-color: #28a745;
        color: white;
        padding: 10px 18px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s ease;
    }

    .button-new:hover {
        background-color: #218838;
        box-shadow: 0 0 10px rgba(40, 167, 69, 0.6);
        transform: translateY(-2px);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #1e1e2f;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 0 25px rgba(0, 123, 255, 0.1);
    }

    thead {
        background-color: #007bff;
    }

    thead th {
        padding: 14px;
        text-align: left;
        color: white;
        font-weight: 600;
    }

    tbody tr {
        border-bottom: 1px solid #2f2f45;
        transition: 0.3s ease;
    }

    tbody tr:hover {
        background-color: #2a2a40;
    }

    td {
        padding: 14px;
        color: #d1d1d1;
    }

    .actions {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .button-edit {
        background-color: #007bff;
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s ease;
    }

    .button-edit:hover {
        background-color: #0056b3;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
    }

    .button-delete {
        background-color: #dc3545;
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s ease;
    }

    .button-delete:hover {
        background-color: #c82333;
        box-shadow: 0 0 8px rgba(220, 53, 69, 0.6);
    }

    .form-delete {
        display: inline;
    }
    
</style>

</style>
</head>

<body>
    <header>
        <h1>Lista de Inscritos</h1>
        <a href="{{ route('usuarios.create') }}" class="button-new">Nueva inscripcion</a>
    </header>
    <table>
        <thead>
            <tr>

            <th>Código</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
            <td>{{ $usuario->codigo }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->correo }}</td>
            <td class="actions">
            <a href="{{ route('usuarios.edit', $usuario) }}" class="button-edit">Editar</a>

            <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="form-delete">
                @csrf 
                @method('DELETE')
                <button type="submit" class="button-delete">Eliminar</button>
            </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>