<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $resepDetail->nama_resep }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">

    <header class="bg-gradient-to-r from-green-400 to-blue-500 shadow-lg">
        <div class="container mx-auto p-6 text-center">
            <h1 class="text-4xl font-extrabold text-white">{{ $resepDetail->nama_resep }}</h1>
        </div>
    </header>

    <main class="container mx-auto mt-10 p-6 max-w-3xl bg-white rounded-xl shadow-md">
        <div class="flex flex-col items-center">
            <img src="{{ asset('storage/' . $resepDetail->image) }}" alt="Image of {{ $resepDetail->nama_resep }}" class="w-full h-64 object-cover rounded-lg mb-6 shadow-lg">

            <div class="text-center text-gray-800">
                <p class="text-lg font-light mb-6 px-4">{{ $resepDetail->deskripsi }}</p>
            </div>
        </div>

        <div id="bahan-bahan" class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4 border-b-2 border-gray-200 pb-2">Bahan-bahan</h2>
            <ul class="list-disc pl-8 space-y-2 text-gray-700">
                @foreach (explode("\n", $resepDetail->bahan) as $bahan)
                <li>{{ $bahan }}</li>
                @endforeach
            </ul>
        </div>

        <div id="instruksi" class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4 border-b-2 border-gray-200 pb-2">Instruksi</h2>
            <ol class="list-decimal pl-8 space-y-2 text-gray-700">
                @foreach (explode("\n", $resepDetail->instruksi) as $step)
                <li>{{ $step }}</li>
                @endforeach
            </ol>
        </div>

        <!-- Tambahan Kembali Ke Beranda -->
        <div class="text-center mt-8">
            <a href="{{ url('/') }}" class="inline-block bg-gradient-to-r from-blue-400 to-green-400 text-white font-semibold px-6 py-2 rounded-lg shadow-lg hover:from-green-500 hover:to-blue-500 transition-all duration-300">
                Kembali Ke Beranda
            </a>
        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} MamahKita | All Rights Reserved</p>
    </footer>

</body>
</html>
