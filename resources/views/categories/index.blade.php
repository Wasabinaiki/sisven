<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorías') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('categories.create') }}"
                       class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">Agregar</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>

                                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                              method='POST' style="display: inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <input class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2"
                                                   type="submit" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
