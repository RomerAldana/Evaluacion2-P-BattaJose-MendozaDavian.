<?php
namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::with('autor')->get();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        $autores = Autor::all();
        return view('libros.create', compact('autores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|min:5|max:255',
            'isbn' => 'required|string|max:20|unique:libros',
            'paginas' => 'required|numeric|min:1',
            'autor_id' => 'required|exists:autors,id'
        ]);

        Libro::create($request->all());
        return redirect()->route('libros.index')
            ->with('success', 'Libro creado exitosamente.');
    }

    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    public function edit(Libro $libro)
    {
        $autores = Autor::all();
        return view('libros.edit', compact('libro', 'autores'));
    }

    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required|string|min:5|max:255',
            'isbn' => 'required|string|max:20|unique:libros,isbn,' . $libro->id,
            'paginas' => 'required|numeric|min:1',
            'autor_id' => 'required|exists:autors,id'
        ]);

        $libro->update($request->all());
        return redirect()->route('libros.index')
            ->with('success', 'Libro actualizado exitosamente.');
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')
            ->with('success', 'Libro eliminado exitosamente.');
    }
}