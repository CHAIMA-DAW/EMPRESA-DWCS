<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Bienvenida -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-2">Hola, {{ Auth::user()->name }} 👋</h3>
                    <p class="text-gray-700">Bienvenid@ a tu panel de gestión de productos.</p>
                </div>
            </div>

            <!-- CONTENEDOR GRID PRINCIPAL (3 columnas en pantallas grandes) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                <!-- COLUMNA IZQUIERDA: Tarjetas (Ocupa 2 de las 3 columnas) -->
                <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Stock bajo -->
                    <div class="bg-white p-6 shadow-md rounded-lg border-t-4 border-yellow-400">
                        <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Stock bajo</h4>
                        <p class="text-3xl font-bold text-gray-800 mt-2">
                            {{ \App\Models\Product::where('stock', '<=', 8)->where('stock', '>', 0)->count() }}
                        </p>
                    </div>

                    <!-- Sin stock -->
                    <div class="bg-white p-6 shadow-md rounded-lg border-t-4 border-red-500">
                        <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Sin stock</h4>
                        <p class="text-3xl font-bold text-gray-800 mt-2">
                            {{ \App\Models\Product::where('stock', '=', 0)->count() }}
                        </p>
                    </div>

                    <!-- Total productos -->
                    <div class="bg-white p-6 shadow-md rounded-lg border-t-4 border-indigo-500">
                        <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Productos totales</h4>
                        <p class="text-3xl font-bold text-gray-800 mt-2">
                            {{ \App\Models\Product::count() }}
                        </p>
                    </div>

                    <!-- Último producto -->
                    <div class="bg-white p-6 shadow-md rounded-lg border-t-4 border-green-500">
                        <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Último creado</h4>
                        <p class="text-lg font-semibold text-gray-700 mt-2 truncate">
                            {{ \App\Models\Product::latest()->first()->nombre ?? 'Sin productos' }}
                        </p>
                    </div>
                </div>

                <!-- COLUMNA DERECHA: Gráfica -->
                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <h4 class="text-sm font-medium text-gray-500 uppercase mb-4">Distribución de stock</h4>
                    <div class="w-full" style="height: 250px;">
                        <canvas id="stockChart"></canvas>
                    </div>
                </div>

            </div> <!-- Fin del Grid principal -->

            <!-- ACCESO RÁPIDO -->
            <div class="mt-12 bg-white p-6 shadow-md rounded-lg border-l-8 border-indigo-600">
                <h4 class="text-lg font-bold text-gray-800 mb-2">Acceso rápido</h4>
                <a href="{{ route('products.index') }}" class="inline-flex items-center text-indigo-600 font-bold hover:text-indigo-800 transition-colors">
                    Ir al listado de productos 
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
            </div>

        </div>
    </div>

    <!-- Script Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('stockChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Stock bajo', 'Sin stock', 'Suficiente'],
                datasets: [{
                    data: [
                        {{ \App\Models\Product::where('stock', '<=', 8)->where('stock', '>', 0)->count() }},
                        {{ \App\Models\Product::where('stock', '=', 0)->count() }},
                        {{ \App\Models\Product::where('stock', '>', 8)->count() }}
                    ],
                    backgroundColor: ['#fbbf24', '#ef4444', '#3b82f6'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });
    </script>
</x-app-layout>
