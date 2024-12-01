@vite('resources/css/app.css')

<div class="text-center mt-8">
    <a href="{{ route('welcome') }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold text-lg rounded-full hover:bg-blue-700 transition duration-300">
        ← Kembali Ke Beranda
    </a>
</div>

<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg mt-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Profil User</h1>

    <!-- Form Update Profile -->
    <form action="{{ route('user-profile.update') }}" method="POST" class="space-y-4">
        @csrf
        @method('PATCH')

        <!-- Nama -->
        <div>
            <label for="name" class="block text-gray-700 font-semibold">Nama:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nama Anda">
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-gray-700 font-semibold">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Email Anda">
        </div>

        <!-- Tombol Simpan -->
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                Simpan
            </button>
        </div>
    </form>

    <!-- Form Update Password -->
    <h2 class="text-lg font-semibold mt-8 mb-4">Ubah Password</h2>
    <form action="{{ route('user-profile.update-password') }}" method="POST" class="space-y-4">
        @csrf
        @method('PATCH')

        <div>
            <label for="current_password" class="block text-gray-700 font-semibold">Password Saat Ini:</label>
            <input type="password" id="current_password" name="current_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
        </div>

        <div>
            <label for="new_password" class="block text-gray-700 font-semibold">Password Baru:</label>
            <input type="password" id="new_password" name="new_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
        </div>

        <div>
            <label for="new_password_confirmation" class="block text-gray-700 font-semibold">Konfirmasi Password Baru:</label>
            <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                Update Password
            </button>
        </div>
    </form>

    <!-- Form Delete Account -->
    <h2 class="text-lg font-semibold mt-8 mb-4 text-red-600">Hapus Akun</h2>
    <form action="{{ route('user-profile.delete-account') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun ini?')" class="flex justify-end">
        @csrf
        @method('DELETE')

        <button type="submit" class="px-6 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50">
            Hapus Akun
        </button>
    </form>
</div>
