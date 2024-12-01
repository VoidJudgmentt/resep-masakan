<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Semua Resep</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        @vite('resources/css/app.css')
        <div class="container justify-center w-full flex flex-wrap item-center py-12">
            @foreach($products as $product)

            <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden mb-6 hover:scale-110 transition-all duration-150">
                <div class="p-4 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $product->nama_resep}}</h3>
                    <div class="relative">
                    </div>
                </div>
                <div class="p-4">
                    <!-- Image Inside Card Body -->
                    <img class="w-full h-48 object-cover mb-4" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama_resep }}">
                    <p class="text-gray-600">{{ $product->deskripsi }}</p>
                    <a href="{{ route('allresep.show', $product->id) }}" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Lihat Resep</a>
                </div>
            </div>
            @endforeach
        </div>
    </body>
    </html>
</x-app-layout>
