<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    // API

    public function index()
    {
        $usuarios = Crud::all();
        return response()->json($usuarios);
    }

    public function store(Request $request)
    {
        $usuario = Crud::create($request->all());
        return response()->json($usuario, 201);
    }

    public function show($codigo)
    {
        $usuario = Crud::findOrFail($codigo);
        return response()->json($usuario);
    }

    public function update(Request $request, $codigo)
    {
        $usuario = Crud::findOrFail($codigo);
        $usuario->update($request->all());
        return response()->json($usuario);
    }

    public function destroy($codigo)
    {
        $usuario = Crud::findOrFail($codigo);
        $usuario->delete();
        return response()->json(null, 204);
    }

    // VISTAS WEB

    public function vistaIndex()
    {
        $usuarios = Crud::all();
        return view('cruds.index', compact('usuarios'));
    }

    public function create()
    {
        return view('cruds.create');
    }

    public function storeWeb(Request $request)
    {
        Crud::create($request->all());
        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario creado correctamente');
    }

    public function edit($codigo)
    {
        $usuario = Crud::findOrFail($codigo);
        return view('cruds.edit', compact('usuario'));
    }

    public function updateWeb(Request $request, $codigo)
    {
        $usuario = Crud::findOrFail($codigo);
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario actualizado correctamente');
    }

    public function destroyWeb($codigo)
    {
        $usuario = Crud::findOrFail($codigo);
        $usuario->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario eliminado correctamente');
    }
}