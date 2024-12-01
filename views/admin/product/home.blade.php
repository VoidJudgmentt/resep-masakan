<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Resep') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Daftar Produk -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="mb-0">List Resep</h1>
                        <a href="{{ route('admin/products/create') }}" class="btn btn-dark">Tambahkan Resep</a>
                    </div>
                    <hr />
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Resep</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $product->nama_resep }}</td>
                                <td class="align-middle">{{ $product->kategori }}</td>
                                <td class="align-middle">{{ $product->deskripsi }}</td>
                                <td class="align-middle">
                                    @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Resep" class="img-thumbnail" width="100">
                                    @else
                                    <span>Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin/products/edit', ['id' => $product->id]) }}" class="btn btn-secondary">Edit</a>

                                        <!-- Form Delete -->
                                        <form action="{{ route('admin/products/delete', ['id' => $product->id]) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus resep ini?')">Delete</button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="6">Tidak Ada Resep</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
