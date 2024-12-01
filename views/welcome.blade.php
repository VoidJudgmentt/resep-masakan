<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MamihKitaa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">

</head>
<body>
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div data-aos="fade-down">
        <nav class="bg-orange-400">
            <!-- Navbar -->
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <a href="/">
                            <div class="flex flex-shrink-0 items-center">
                                <img class="h-8 w-auto" src="../image/mamahrmv.png" alt="Your Company">
                            </div>
                        </a>
                        <div class="hidden sm:ml-6 sm:block">
                            <a href="#" class="rounded-md bg-gray-100 px-3 py-2 text-sm font-medium text-black" aria-current="page">MamahKita</a>
                        </div>
                    </div>

                    <!-- Dropdown -->
                    <div class="relative hover:scale-110 transition-all duration-150">
                        <button id="menu-btn" class="flex items-center justify-center h-10 w-10">
                            <div class="space-y-2">
                                <div class="w-6 h-0.5 bg-gray-600"></div>
                                <div class="w-6 h-0.5 bg-gray-600"></div>
                                <div class="w-6 h-0.5 bg-gray-600"></div>
                            </div>
                        </button>
                        <div id="menu" class="hidden absolute right-0 mt-2 py-2 w-48 bg-white rounded-lg shadow-xl border border-gray-200">
                            @guest
                            <a href="/login" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Login</a>
                            <a href="/register" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Register</a>
                            @endguest
                            @auth
                            <a href="{{ route('user-profile.show') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil Saya</a>
                            @if(Auth::user()->role === 'admin')
                            <a href="{{ route('admin/dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dashboard</a>
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                            </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Form Pencarian -->
    <div class="mt-6 px-4 flex flex-col items-center">
        <form action="{{ route('search.resep') }}" method="GET" class="flex items-center w-full max-w-xl space-x-2">
            <input type="text" name="query" placeholder="Cari resep..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:outline-none" value="{{ request('query') }}" required>
            <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition">
                Cari
            </button>
        </form>
    </div>

    <!-- Alert -->
    @if(isset($message))
    <div class="mt-4 mx-auto w-full max-w-xl bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
        <p class="text-center font-semibold">{{ $message }}</p>
    </div>
    @endif

    <!-- End Navbar -->

    <!-- Start Hero -->
    <div data-aos="fade-up">
        <header class="my-20">
            <div class="w-full bg-center bg-cover" style="background-image: url(../image/image_cook.jpg);">
                <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50 py-12">
                    <div class="text-center">
                        <div class="container px-4 mx-auto">
                            <div class="max-w-4xl mx-auto text-center">
                                <span class="text-gray-200 font-semibold uppercase tracking-widest">Mamah Kita</span>
                                <h2 class="mt-8 mb-6 text-4xl lg:text-5xl font-bold text-gray-100">Masak makin menyenangkan
                                    Temukan dan bagikan resep untuk masakan harianmu</h2>
                                <p class="max-w-3xl mx-auto mb-10 text-lg text-gray-300">
                                    Temukan resep MASAKAN untuk keluarga anda
                                </p>
                                <a class="hover:scale-110 transition-all duration-150 inline-block w-full md:w-auto mb-4 md:mr-6 py-5 px-8 text-sm font-bold uppercase border-2 border-transparent bg-gray-200 rounded hover:bg-gray-100 text-gray-800" href="/">Selamat Datang di Dunia Resep Masakan Kami!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- End Hero -->

    <!-- Start Text -->
    <div data-aos="zoom-in">
        <div class="text-3xl text-center font-bold text-slate-900">
            Ciptakan Hidangan Spesial Setiap Hari
            <p class="text-lg font-normal mb-10">
                Jangan lewatkan kreasi terbaru kami hidangan yang akan menggugah selera Anda dan membuat setiap momen makan
                menjadi istimewa.
            </p>
        </div>
    </div>
    <!-- End Text -->

    <!-- Card Section -->
    <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <!-- Konten -->
        <div class="container flex flex-wrap justify-center item-center ">
            {{-- Card 1 --}}
            <div class="Carddd m-10 flex w-[270px] hover:scale-110 transition-all duration-150 flex-col  rounded-lg border border-gray-100 bg-white shadow-md ">
                <a class=" mx-3 mt-3 flex h-60  rounded-xl" href="#">
                    <img class="object-cover" src="../image/ayam_baks.jpg" alt="product image">
                </a>
                <div class="mt-4 px-5 pb-5">
                    <a href="ayambuakar.html">
                        <h5 class="text-xl tracking-tight text-slate-900">Ayam Buakar</h5>
                    </a>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">By</span>
                            <span class="text-sm text-slate-900">Lipsurys</span>
                        </p>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                        </div>
                    </div>
                    <a href="ayambuakar" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Lihat Resep</a>
                </div>
            </div>
            {{-- End Card 1 --}}

            {{-- Card 2 --}}
            <div class="Carddd m-10 flex w-[270px] hover:scale-110 transition-all duration-150 flex-col  rounded-lg border border-gray-100 bg-white shadow-md">
                <a class=" mx-3 mt-3 flex h-60  rounded-xl" href="">
                    <img class="object-cover" src="../image/sayursop.jpg" alt="product image" />
                </a>
                <div class="mt-4 px-5 pb-5">
                    <a href="ayambuakar.html">
                        <h5 class="text-xl tracking-tight text-slate-900">Sayur Sop</h5>
                    </a>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">By</span>
                            <span class="text-sm text-slate-900">CayAtmj</span>
                        </p>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                        </div>
                    </div>
                    <a href="sop" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Lihat Resep</a>
                </div>
            </div>
            {{-- End Card 2 --}}

            {{-- Card 3 --}}
            <div class="Carddd m-10 flex w-[270px] hover:scale-110 transition-all duration-150 flex-col  rounded-lg border border-gray-100 bg-white shadow-md">
                <a class=" mx-3 mt-3 flex h-60  rounded-xl" href="/">
                    <img class="object-cover" src="../image/geprek.jpg" alt="product image" />
                </a>
                <div class="mt-4 px-5 pb-5">
                    <a href="ayamgeprek">
                        <h5 class="text-xl tracking-tight text-slate-900">Ayam Geprek</h5>
                    </a>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">By</span>
                            <span class="text-sm text-slate-900">NikAidina</span>
                        </p>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>

                            <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                        </div>
                    </div>
                    <a href="ayamgeprek" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Lihat Resep</a>
                </div>
            </div>
            {{-- End Card 3 --}}

            {{-- Card 4 --}}
            <div class="Carddd m-10 flex w-[270px] hover:scale-110 transition-all duration-150 flex-col  rounded-lg border border-gray-100 bg-white shadow-md">
                <a class=" mx-3 mt-3 flex h-60  rounded-xl" href="#">
                    <img class="object-cover" src="../image/nasigoreng.jpg" alt="product image" />
                </a>
                <div class="mt-4 px-5 pb-5">
                    <a href="nasigoreng">
                        <h5 class="text-xl tracking-tight text-slate-900">Nasi Goreng</h5>
                    </a>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">By</span>
                            <span class="text-sm text-slate-900">Lipsurys</span>
                        </p>
                        <div class="flex items-center">

                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                        </div>
                    </div>
                    <a href="nasigoreng" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Lihat Resep</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- End Card Section --> --}}

    {{-- All Resep --}}
    <div class=" hover:scale-110 transition-all duration-150 text-3xl text-center font-bold text-slate-900 mb-10">
        <a href="{{ route('allresep') }}" class=" inline-block w-full md:w-auto py-5 px-8 text-sm font-bold uppercase border-2 border-transparent bg-gray-200 rounded hover:bg-gray-100 text-gray-800 transition duration-200 " href="allresep2">Lihat Semua Resep Masakan</a>
    </div>

    {{-- Hero Image 2 --}}

    <div data-aos="fade-left">
        <section class="bg-orange-50">
            <div class="max-w-7xl mx-auto p-6 flex flex-col md:flex-row items-center justify-between">
                <!-- Bagian Teks -->
                <div class="text-center md:text-left md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-3xl md:text-4xl font-semibold text-gray-800">
                        Temukan resep dari Website kami
                    </h1>
                    <p class="mt-4 text-gray-600">
                        Register sekarang untuk dapat menemukan resep atau nama hidangan, memastikan kamu selalu mendapat inspirasi masak setiap harinya!
                    </p>
                    <p class="mt-2 text-gray-600">
                        Pengalaman ini bahkan lebih baik lagi dengan menggunakan website Mamahkita secara gratis!
                    </p>
                    <a href="/allresep2" class="hover:scale-110 transition-all duration-500 mt-4 inline-block text-blue-600 font-semibold">Register Sekarang! &rarr;</a>
                </div>

                <!-- Bagian Gambar -->
                <div class="md:w-1/2 flex justify-center">
                    <img src="../image/phone2.jpg" alt="Cookpad App" class="w-64 md:w-64">
                </div>
            </div>

        </section>
    </div>

    <div data-aos="fade-right">
        <section class="">
            <div class="max-w-7xl mx-auto p-6 flex flex-col md:flex-row items-center justify-between">
                <!-- Bagian Gambar -->
                <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
                    <img src="../image/phone.jpg" alt="Cookpad App" class="w-64 md:w-64">
                </div>

                <!-- Bagian Teks -->
                <div class="text-center md:text-left md:w-1/2">
                    <h1 class="text-3xl md:text-4xl font-semibold text-gray-800">
                        Cari dan temukan resep dari komunitas Mamahkita
                    </h1>
                    <p class="mt-4 text-gray-600">
                        Melalui fitur pencarian, kamu dapat menemukan resep berdasarkan bahan atau nama hidangan, memastikan kamu selalu mendapat inspirasi masak setiap harinya.
                    </p>
                    <p class="mt-2 text-gray-600">
                        Pengalaman ini bahkan lebih baik lagi dengan menggunakan website Mamahkita secara gratis!
                    </p>
                    {{-- <a href="/allresep" class="hover:scale-110 transition-all duration-500 mt-4 inline-block text-blue-600 font-semibold">Lihat Semua Resep &rarr;</a> --}}
                </div>
            </div>
        </section>
    </div>

    <div data-aos="fade-left">
        <section class="bg-orange-50">
            <div class="max-w-7xl mx-auto p-6 flex flex-col md:flex-row items-center justify-between">
                <!-- Bagian Teks -->
                <div class="text-center md:text-left md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-3xl md:text-4xl font-semibold text-gray-800">
                        Bagikan resepmu
                    </h1>
                    <p class="mt-4 text-gray-600">
                        Kamu dapat mengabadikan dan membagikan pengalaman memasakmu maupun resep keluargamu dengan menuliskannya di Mamahkita.
                    </p>
                    <p class="mt-2 text-gray-600">
                        Bagikan resepmu dengan aplikasi MamahKita! Gratis!
                    </p>
                </div>
                <!-- Bagian Gambar -->
                <div class="md:w-1/2 flex justify-center">
                    <img src="../image/phone3.jpg" alt="Cookpad App" class="w-64 md:w-64">
                </div>
            </div>
        </section>
    </div>

    {{-- <!-- Footer --> --}}
    <div data-aos="fade-up">

        <footer class="bg-white py-10">
            <div class="max-w-7xl mx-auto px-6 md:px-8">
                <!-- Bagian Tentang Kami -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Tentang Kami</h3>
                    <p class="text-gray-700 mb-2">
                        Misi kami di MamihKitaa adalah untuk membuat masak sehari-hari makin menyenangkan, karena kami percaya bahwa memasak adalah kunci menuju kehidupan yang lebih bahagia dan lebih sehat bagi manusia, komunitas, dan planet ini. Kami mendukung koki rumahan di seluruh dunia untuk <span class="font-semibold">membantu satu sama lain</span> dengan berbagi resep dan tips memasak.
                    </p>
                    <a href="/register" class="text-blue-600 font-semibold ">Register Sekarang</a> untuk melihat semua Resep Masakan.
                </div>

                <!-- Bagian Komunitas Cookpad -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Komunitas MamahKita</h3>
                    <div class="flex flex-wrap space-x-2 text-sm text-gray-500">
                        <a href="#" class="hover:text-gray-900">GB United Kingdom</a>
                        <a href="#" class="hover:text-gray-900">ES España</a>
                        <a href="#" class="hover:text-gray-900">AR Argentina</a>
                        <a href="#" class="hover:text-gray-900">UY Uruguay</a>
                        <a href="#" class="hover:text-gray-900">MX México</a>
                        <a href="#" class="hover:text-gray-900">CL Chile</a>
                        <a href="#" class="hover:text-gray-900">VN Việt Nam</a>
                        <a href="#" class="hover:text-gray-900">TH ไทย</a>
                        <a href="#" class="hover:text-gray-900">ID Indonesia</a>
                        <a href="#" class="hover:text-gray-900">FR France</a>
                        <a href="#" class="hover:text-gray-900">SA السعودية</a>
                        <a href="#" class="hover:text-gray-900">TW 臺灣</a>
                        <a href="#" class="hover:text-gray-900">IT Italia</a>
                        <a href="#" class="hover:text-gray-900">IR ایران</a>
                        <a href="#" class="hover:text-gray-900">Lihat Semua</a>
                    </div>
                </div>

                <!-- Bagian Link Tambahan -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Selengkapnya</h3>
                    <div class="flex flex-wrap space-x-4 text-sm text-gray-500">
                        <a href="#" class="hover:text-gray-900">Karir</a>
                        <a href="#" class="hover:text-gray-900">Kirim Saran</a>
                        <a href="#" class="hover:text-gray-900">Blog</a>
                        <a href="#" class="hover:text-gray-900">Ketentuan Pemakaian</a>
                        <a href="#" class="hover:text-gray-900">Panduan Komunitas Mamahkita</a>
                        <a href="#" class="hover:text-gray-900">Kebijakan Privasi</a>
                        <a href="#" class="hover:text-gray-900">Pertanyaan Seputar Mamahkita (FAQ)</a>
                    </div>
                </div>

                <!-- Bagian Ikuti Kami dan Unduh Aplikasi -->
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Sosial Media Kami</h3>
                <div class="flex flex-col md:flex-row md:justify-between items-center md:items-start mb-8">
                    <div class="flex space-x-4 mb-4 md:mb-0">
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/profile.php?id=100047618745306" class="hover:text-gray-900">
                                <button type="button" data-twe-ripple-init data-twe-ripple-color="light" class="mb-2 inline-block rounded bg-[#1877f2] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" href="/https://www.facebook.com/profile.php?id=100047618745306">
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                                            <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                        </svg>
                                    </span>
                            </a>
                            </button>
                            {{-- <a href="https://www.instagram.com/mamahkita_official/" class="hover:text-gray-900"> --}}
                            <button type="button" data-twe-ripple-init data-twe-ripple-color="light" class="mb-2 inline-block rounded bg-[#c13584] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                <span class="[&>svg]:h-4 [&>svg]:w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </span>
                            </button>
                            <button type="button" data-twe-ripple-init data-twe-ripple-color="light" class="mb-2 inline-block rounded bg-black px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                <span class="[&>svg]:h-4 [&>svg]:w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                    </svg>
                                </span>
                            </button>
                            <button type="button" data-twe-ripple-init data-twe-ripple-color="light" class="mb-2 inline-block rounded bg-[#0088cc] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                <span class="[&>svg]:h-4 [&>svg]:w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 496 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z" />
                                    </svg>
                                </span>
                            </button>
                            <button type="button" data-twe-ripple-init data-twe-ripple-color="light" class="mb-2 inline-block rounded bg-[#ff0000] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                <span class="[&>svg]:h-4 [&>svg]:w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bagian Copyright -->
        <div class="border-t border-gray-300 pt-4">
            <p class="text-center text-gray-500 text-sm">&copy; 2024 Wisesa Inc. All rights reserved.</p>
        </div>
        <div class="">
            <img src="../image/footer.png" alt="Deskripsi Gambar" class=" h-auto mx-auto">
        </div>
    </div>
    <!-- End Footer -->
    <!-- End Bagian Copyright -->


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>
</html>
