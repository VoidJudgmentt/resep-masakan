{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
@csrf
<!-- Email Address -->
<div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>


<!-- Remember Me -->
<div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
    </label>
</div>

<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
        {{ __('Lupa password?') }}
    </a>
    @endif
    @if (Route::has('register'))
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-5" href="{{ route('register') }}">
        {{ __('Belum Punya Akun?') }}
    </a>
    @endif

    <x-primary-button class="ms-3">
        {{ __('Log in') }}
    </x-primary-button>
</div>

</form>
</x-guest-layout> --}}

<x-guest-layout>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Heading -->
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold ">Selamat Datang Kembali!</h1>
        <p class="text-gray-600 mt-2">Silakan masukkan detail login Anda untuk melanjutkan</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />
            <x-text-input id="email" class="block mt-1 w-full border-indigo-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
            <x-text-input id="password" class="block mt-1 w-full border-indigo-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-700 hover:text-indigo-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-6">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Lupa password?') }}
            </a>
            @endif
            @if (Route::has('register'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-5" href="{{ route('register') }}">
                {{ __('Belum Punya Akun?') }}
            </a>
            @endif

            <x-primary-button class="ms-3 bg-gray-600 hover:bg-gray-700 text-white font-semibold px-4 py-2 rounded-md shadow">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
