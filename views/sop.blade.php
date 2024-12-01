<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayur Sop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-400 to-indigo-500 text-white shadow-md">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl font-extrabold text-center">Sayur Sop</h1>
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
            <img src="../image/sayursop.jpg" alt="Nasi Goreng Seafood" class="w-full max-w-md rounded-md mb-4 shadow-md">
            <p class="text-gray-700 text-center mb-4 px-4">
                {{-- Nikmati cita rasa lezat dari seafood yang dipadukan dengan nasi goreng spesial ini. Cocok untuk makan siang atau makan malam. --}}
            </p>
        </div>

        <!-- Ingredients -->
        <div id="bahan-bahan" class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3 border-b-2 border-gray-200 pb-1">Bahan-bahan</h2>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>1/2 kg daging sapi, potong dadu</li>
                <li>2 buah wortel, potong dadu</li>
                <li>1 buah kentang, potong dadu</li>
                <li>1 buah kol, iris-iris</li>
                <li>1 batang daun bawang, iris</li>
                <li>2 batang seledri, iris</li>
                <li>2 liter air</li>
                <li>2 lembar daun salam</li>
                <li>1 batang serai, memarkan</li>
                <li>Garam secukupnya</li>
                <li>Merica bubuk secukupnya</li>
                <li>Kaldu bubuk secukupnya</li>
            </ul>
        </div>

        <!-- Instructions -->
        <div id="instruksi">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3 border-b-2 border-gray-200 pb-1">Instruksi</h2>
            <ol class="list-decimal pl-6 space-y-2 text-gray-700">
                <li>Panaskan panci, tumis bawang merah dan bawang putih hingga harum.</li>
                <li>Masukkan daging, masak hingga berubah warna.</li>
                <li>Tambahkan air, daun salam, dan serai. Masak hingga mendidih.</li>
                <li>Masukkan wortel dan kentang, masak hingga setengah matang.</li>
                <li>Tambahkan kol, daun bawang, dan seledri. Masak hingga semua sayuran matang.</li>
                <li>Bumbui dengan garam, merica, dan kaldu bubuk sesuai selera.</li>
                <li>Angkat dan sajikan selagi hangat.</li>
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
