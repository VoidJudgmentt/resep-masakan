<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Nasi Goreng Seafood</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-400 to-indigo-500 text-white shadow-md">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl font-extrabold text-center">Resep Nasi Goreng Seafood</h1>
        </div>
    </header>

    <!-- Breadcrumb Navigation -->
    <nav class="bg-white shadow-lg mt-4 p-3 rounded-lg">
        <div class="container mx-auto">
            <ul class="flex text-gray-600 font-semibold space-x-2">
                <li><a href="/" class="hover:text-blue-500">Beranda</a></li>
                <li class="mx-1">/</li>
                <li><a href="#" class="hover:text-blue-500">Resep Masakan</a></li>
                <li class="mx-1">/</li>
                <li id="bahan-bahan"><a href="#" class="hover:text-blue-500">Bahan-bahan</a></li>
                <li class="mx-1">/</li>
                <li id="instruksi"><a href="#" class="hover:text-blue-500">Instruksi</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">

        <!-- Image and Description -->
        <div class="flex flex-col items-center mb-4">
            <img src="../image/nasigoreng.jpg" alt="Nasi Goreng Seafood" class="w-full max-w-md rounded-md mb-4 shadow-md">
            <p class="text-gray-700 text-center mb-4 px-4">
                {{-- Nikmati cita rasa lezat dari seafood yang dipadukan dengan nasi goreng spesial ini. Cocok untuk makan siang atau makan malam. --}}
            </p>
        </div>

        <!-- Ingredients -->
        <div id="bahan-bahan" class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3 border-b-2 border-gray-200 pb-1">Bahan-bahan</h2>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>2 piring nasi putih dingin</li>
                <li>100 gram udang, kupas</li>
                <li>100 gram cumi, iris cincin</li>
                <li>2 butir telur, kocok lepas</li>
                <li>2 siung bawang putih, cincang</li>
                <li>2 sdm kecap manis</li>
                <li>1 sdm saus tiram</li>
                <li>1 sdt garam</li>
                <li>1/2 sdt merica bubuk</li>
                <li>2 batang daun bawang, iris halus</li>
                <li>Minyak untuk menumis</li>
            </ul>
        </div>

        <!-- Instructions -->
        <div id="instruksi">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3 border-b-2 border-gray-200 pb-1">Instruksi</h2>
            <ol class="list-decimal pl-6 space-y-2 text-gray-700">
                <li>Panaskan minyak dalam wajan, tumis bawang putih hingga harum.</li>
                <li>Masukkan udang dan cumi, masak hingga setengah matang.</li>
                <li>Geser ke sisi wajan, tambahkan telur kocok, lalu orak-arik.</li>
                <li>Masukkan nasi putih, aduk rata dengan bahan lainnya.</li>
                <li>Tambahkan kecap manis, saus tiram, garam, dan merica. Aduk hingga merata.</li>
                <li>Masukkan daun bawang, aduk sebentar hingga matang.</li>
                <li>Angkat dan sajikan hangat dengan pelengkap seperti kerupuk atau acar.</li>
            </ol>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 mt-10 py-4">
        <div class="container mx-auto text-center text-gray-600">
            &copy; 2024 Resep Masakan. All Rights Reserved.
        </div>
    </footer>

</body>
</html>
