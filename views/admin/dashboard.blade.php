<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Halaman Admin</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    </head>
    <body>
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold">Dashboard Alip Ganteng Bingitsss</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-full p-3">
                            <!-- Icon pengguna -->
                            <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.878-1H17v-2a6 6 0 00-12 0v2h5.878A3 3 0 005 18v2h5v-2H5v-2a8 8 0 0116 0v2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-700">Total Pengguna</h3>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalPengguna }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-full p-3">
                            <!-- Icon buku -->
                            <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-10v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6m16 0H6m2 0v-4a2 2 0 012-2h4a2 2 0 012 2v4" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-700">Total Resep</h3>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalResep }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-full p-3">
                            <!-- Icon pengguna -->
                            <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8-4H8m8 8H8m4-4v1m0 2v1m0 2v1m4-6a4 4 0 10-8 0v2h8v-2a4 4 0 014-4h0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-700">Pengguna Aktif Hari Ini</h3>
                            <p class="text-2xl font-bold text-gray-900">{{ $penggunaAktifHariIni }}</p>
                            @if($loginTerakhir)
                            <p class="text-sm text-gray-500">Login terakhir: {{ $loginTerakhir->last_login_at->format('H:i') }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded px-4 py-2">
                    <canvas id="myChart"></canvas>
                </div>

                <script>
                    // Ambil data dari PHP ke JavaScript
                    const dataResep = @json($dataResep);

                    const ctx = document.getElementById('myChart').getContext('2d');
                    const myChart = new Chart(ctx, {
                        type: 'line' //line, bar, pie, doughnut, radar, polar, buble, scatter, 
                        , data: {
                            labels: Object.keys(dataResep), // Label bulan dari data
                            datasets: [{
                                label: 'Data Resep'
                                , data: Object.values(dataResep), // Nilai total resep per bulan
                                backgroundColor: 'rgba(255, 99, 132, 0.2)'
                                , borderColor: 'rgba(255, 99, 132, 1)'
                                , borderWidth: 1
                            }]
                        }
                        , options: {
                            // Opsi tambahan untuk kustomisasi grafik
                        }
                    });

                </script>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-gray-700 text-xl font-semibold mb-4">Daftar Pengguna</h2>
            <table class="min-w-full bg-white">
                <thead class="bg-gray-200 text-gray-600">
                    <tr>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Peran</th>
                        <th class="py-3 px-6 text-left">Status</th>
                        <th class="py-3 px-6 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->count())
                    @foreach($users as $user)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $user->name }}</td>
                        <td class="py-3 px-6">{{ $user->email }}</td>

                        <!-- Dropdown Peran -->
                        <td class="py-3 px-6">
                            <form action="{{ route('admin.users.updateRole', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <select name="usertype" onchange="this.form.submit()" class="border border-gray-300 rounded p-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="user" {{ $user->usertype === 'user' ? 'selected' : '' }}>User</option>
                                    <option value="admin" {{ $user->usertype === 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </form>
                        </td>

                        <!-- Status Aktif/Nonaktif -->
                        <td class="py-3 px-6 text-center">
                            <span class="px-2 py-1 text-sm font-semibold rounded {{ $user->is_active ? 'bg-green-200 text-green-700' : 'bg-red-200 text-red-700' }}">
                                {{ $user->is_active ? 'Aktif' : 'Nonaktif' }}
                            </span>
                        </td>

                        <!-- Tombol Aksi (Nonaktifkan/Aktifkan dan Hapus) -->
                        <td class="py-3 px-6">
                            <div class="flex items-center space-x-2">
                                <!-- Tombol Nonaktifkan/Aktifkan -->
                                <form action="{{ route('admin.toggleStatus', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="px-4 py-1 text-white font-bold rounded {{ $user->is_active ? 'bg-red-500 hover:bg-red-700' : 'bg-green-500 hover:bg-green-700' }}">
                                        {{ $user->is_active ? 'Nonaktifkan' : 'Aktifkan' }}
                                    </button>
                                </form>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5" class="py-3 px-6 text-center">Tidak ada pengguna yang ditemukan.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="mt-5 shadow-md rounded px-4 py-2">
            <div class="flex items-center">
                <div class="text-gray-700 font-semibold">
                    <i class="fas fa-user-plus"></i> Pengguna Baru Hari Ini
                </div>
            </div>
            <div class="text-2xl font-bold">
                {{ $penggunaHariIni }}
            </div>
        </div>

        <div class="bg-white shadow-md rounded px-4 py-2 mt-4">
            <div class="flex items-center">
                <div class="text-gray-700 font-semibold">
                    <i class="fas fa-user-plus"></i> Pengguna Baru Minggu Ini
                </div>
            </div>
            <div class="text-2xl font-bold">
                {{ $penggunaMingguIni }}
            </div>
        </div>

        <div class="mt-5 shadow-md rounded px-4 py-2">
            <div class="flex items-center">
                <div class="text-gray-700 font-semibold">
                    <i class="fas fa-book"></i> Resep Baru Hari Ini
                </div>
            </div>
            <div class="text-2xl font-bold">
                {{ $resepHariIni }}
            </div>
        </div>

        <div class="bg-white shadow-md rounded px-4 py-2 mt-4">
            <div class="flex items-center">
                <div class="text-gray-700 font-semibold">
                    <i class="fas fa-book"></i> Resep Baru Minggu Ini
                </div>
            </div>
            <div class="text-2xl font-bold">
                {{ $resepMingguIni }}
            </div>
        </div>
        <div class="bg-white shadow-md rounded px-4 py-2 mt-4">
            <div class="flex items-center">
                <div class="text-gray-700 font-semibold">
                    <i class="fas fa-book"></i> Resep Baru Bulan Ini
                </div>
            </div>
            <div class="text-2xl font-bold">
                {{ $resepBulanIni }}
            </div>
        </div>

        <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                // ... konfigurasi chart
            });

        </script>
    </body>
    </html>

</x-app-layout>
