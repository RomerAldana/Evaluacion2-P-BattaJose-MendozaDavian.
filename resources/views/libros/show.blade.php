@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Detalles del Libro</h2>
        <a href="{{ route('libros.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
            Volver
        </a>
    </div>

    <div class="bg-white rounded shadow overflow-hidden">
        <div class="px-6 py-4 border-b">
            <h3 class="text-xl font-semibold">{{ $libro->titulo }}</h3>
        </div>
        
        <div class="p-6">
            <dl class="grid grid-cols-2 gap-4">
                <div>
                    <dt class="text-gray-500 text-sm">ISBN</dt>
                    <dd class="font-medium">{{ $libro->isbn }}</dd>
                </div>
                <div>
                    <dt class="text-gray-500 text-sm">Páginas</dt>
                    <dd class="font-medium">{{ $libro->paginas }}</dd>
                </div>
                <div>
                    <dt class="text-gray-500 text-sm">Autor</dt>
                    <dd class="font-medium">{{ $libro->autor->nombre }}</dd>
                </div>
                <div>
                    <dt class="text-gray-500 text-sm">Fecha de registro</dt>
                    <dd class="font-medium">{{ $libro->created_at->format('d/m/Y') }}</dd>
                </div>
            </dl>
        </div>
        
        <div class="px-6 py-4 bg-gray-50 flex justify-end space-x-2">
            <a href="{{ route('libros.edit', $libro) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Editar
            </a>
            <form action="{{ route('libros.destroy', $libro) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" 
                        onclick="return confirm('¿Estás seguro de eliminar este libro?')">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection