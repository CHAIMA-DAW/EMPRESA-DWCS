<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Lista de Productos
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('products.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded">
                Crear nuevo producto
            </a>

            <div class="mt-6 bg-white shadow-sm rounded-lg p-6">
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="py-2 text-left">Nombre</th>
                            <th class="py-2 text-left">Precio</th>
                            <th class="py-2 text-left">Stock</th>
                            <th class="py-2 text-left">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr class="border-b">
                                <td class="py-2">{{ $product->nombre }}</td>
                                <td class="py-2">{{ $product->precio }} €</td>
                                <td class="py-2">{{ $product->stock }}</td>
                                <td class="py-2">
                                    <a href="{{ route('products.show', $product) }}"
                                       class="text-blue-600">Ver</a>

                                    <a href="{{ route('products.edit', $product) }}"
                                       class="ml-3 text-green-600">Editar</a>

                                    <form action="{{ route('products.destroy', $product) }}"
                                          method="POST"
                                          class="inline-block ml-3"
                                          onsubmit="return confirm('¿Seguro que deseas eliminar este producto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
