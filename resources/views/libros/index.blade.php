@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Lista de Libros</h2>
    <a href="{{ route('libros.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Nuevo Libro
    </a>
</div>

<div class="bg-white rounded shadow overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Título</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ISBN</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Páginas</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Autor</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($libros as $libro)
            <tr>
                <td class="px-6 py-4">{{ $libro->id }}</td>
                <td class="px-6 py-4">{{ $libro->titulo }}</td>
                <td class="px-6 py-4">{{ $libro->isbn }}</td>
                <td class="px-6 py-4">{{ $libro->paginas }}</td>
                <td class="px-6 py-4">{{ $libro->autor->nombre }}</td>
                <td class="px-6 py-4 space-x-2">
                    <a href="{{ route('libros.show', $libro) }}" class="text-green-500 hover:text-green-700">Ver</a>
                    <a href="{{ route('libros.edit', $libro) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                    <form action="{{ route('libros.destroy', $libro) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('¿Estás seguro?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection