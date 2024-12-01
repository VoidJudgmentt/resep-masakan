<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayam Geprek</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-400 to-indigo-500 text-white shadow-md">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl font-extrabold text-center">Ayam Geprek</h1>
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
            <img src="../image/geprek.jpg" alt="Nasi Goreng Seafood" class="w-full max-w-md rounded-md mb-4 shadow-md">
            <p class="text-gray-700 text-center mb-4 px-4">
                {{-- Nikmati cita rasa lezat dari seafood yang dipadukan dengan nasi goreng spesial ini. Cocok untuk makan siang atau makan malam. --}}
            </p>
        </div>

        <!-- Ingredients -->
        <div id="bahan-bahan" class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3 border-b-2 border-gray-200 pb-1">Bahan-bahan</h2>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>1 ekor ayam, potong sesuai selera</li>
                <li><strong>Bumbu Halus:</strong></li>
                <ul class="list-disc pl-8">
                    <li class="font-semibold">Ayam:</li>
                    <li>500 gram dada ayam, potong dadu atau paha ayam tanpa tulang</li>
                    <li class="font-semibold">Bumbu Marinasi:</li>
                    <ul class="list-disc pl-8 space-y-1">
                        <li>1 sdt garam</li>
                        <li>1/2 sdt merica bubuk</li>
                        <li>1 sdt kaldu bubuk</li>
                        <li>1 sdm perasan jeruk nipis</li>
                    </ul>
                    <li class="font-semibold">Tepung Baluran:</li>
                    <ul class="list-disc pl-8 space-y-1">
                        <li>100 gram tepung terigu serbaguna</li>
                        <li>50 gram tepung maizena</li>
                        <li>1/2 sdt baking powder</li>
                        <li>1/4 sdt kunyit bubuk (opsional)</li>
                    </ul>
                    <li class="font-semibold">Sambal:</li>
                    <ul class="list-disc pl-8 space-y-1">
                        <li>10-20 cabai rawit merah (sesuai selera)</li>
                        <li>5 siung bawang merah</li>
                        <li>3 siung bawang putih</li>
                        <li>1/2 sdt terasi bakar</li>
                        <li>Garam dan gula secukupnya</li>
                    </ul>
                </ul>
            </ul>
        </div>

        <!-- Instructions -->
        <div id="instruksi">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3 border-b-2 border-gray-200 pb-1">Instruksi</h2>
            <ol class="list-decimal pl-6 space-y-2 text-gray-700">
                <li>Lumuri ayam dengan perasan jeruk nipis dan bumbu marinasi, diamkan selama 15-30 menit.</li>
                <li>Balurkan ayam ke dalam campuran tepung kering hingga rata.</li>
                <li>Goreng ayam dalam minyak panas hingga berwarna kuning keemasan dan matang.</li>
                <li>Angkat dan tiriskan.</li>
                <li>Haluskan semua bahan sambal sesuai selera.</li>
                <li>Panaskan sedikit minyak, tumis sambal hingga harum dan matang.</li>
                <li>Geprek ayam yang sudah digoreng hingga pipih.</li>
                <li>Sajikan ayam dengan siraman sambal di atasnya.</li>
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
