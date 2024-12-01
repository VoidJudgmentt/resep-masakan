@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <!-- Tombol Kembali ke Beranda -->
    <a href="{{ url('/') }}" class="inline-block text-blue-500 mb-4 hover:underline">&larr; Kembali Ke Beranda</a>

    <!-- Card Detail Resep -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Gambar Resep -->
        <img src="{{ asset('image/' . $product->image) }}" alt="{{ $product->nama_resep }}" class="w-full h-64 object-cover">

        <div class="p-6">
            <!-- Nama Resep -->
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $product->nama_resep }}</h1>

            <!-- Bahan-Bahan -->
            <h2 class="text-lg font-semibold text-gray-700">Bahan-Bahan:</h2>
            <ul class="list-disc list-inside text-gray-600 mb-4">
                @foreach(explode("\n", $product->bahan) as $bahan)
                    <li>{{ $bahan }}</li>
                @endforeach
            </ul>

            <!-- Instruksi -->
            <h2 class="text-lg font-semibold text-gray-700">Instruksi:</h2>
            <p class="text-gray-600 mb-4 whitespace-pre-line">{{ $product->instruksi }}</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 By U - Resep Masakan. All rights reserved.</p>
    </div>
</footer>
@endsection
