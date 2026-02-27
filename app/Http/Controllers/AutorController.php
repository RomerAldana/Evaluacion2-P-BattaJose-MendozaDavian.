<?php
namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::withCount('libros')->get();
        return view('autores.index', compact('autores'));
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'nacionalidad' => 'nullable|string|max:50',
            'fecha_nacimiento' => 'nullable|date|before:today'
        ]);

        Autor::create($request->all());
        return redirect()->route('autores.index')
            ->with('success', 'Autor creado exitosamente.');
    }

    // Cambiamos el tipo hint de Autor $autor a $id y buscamos manualmente
    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::findOrFail($id);
        
        $request->validate([
            'nombre' => 'required|string|max:100',
            'nacionalidad' => 'nullable|string|max:50',
            'fecha_nacimiento' => 'nullable|date|before:today'
        ]);

        $autor->update($request->all());
        return redirect()->route('autores.index')
            ->with('success', 'Autor actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();
        return redirect()->route('autores.index')
            ->with('success', 'Autor eliminado exitosamente.');
    }
}