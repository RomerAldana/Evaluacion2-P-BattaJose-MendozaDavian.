@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Lista de Autores</h2>
    <a href="{{ route('autores.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Nuevo Autor
    </a>
</div>

<div class="bg-white rounded shadow overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nacionalidad</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Libros</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($autores as $autor)
            <tr>
                <td class="px-6 py-4">{{ $autor->id }}</td>
                <td class="px-6 py-4">{{ $autor->nombre }}</td>
                <td class="px-6 py-4">{{ $autor->nacionalidad ?? 'N/A' }}</td>
                <td class="px-6 py-4">{{ $autor->libros_count }}</td>
                <td class="px-6 py-4 space-x-2">
                    <a href="{{ route('autores.edit', $autor) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                    <form action="{{ route('autores.destroy', $autor) }}" method="POST" class="inline">
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