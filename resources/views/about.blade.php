@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $judul }}</h1>

    <div class="card shadow mb-4 border-left-info">
        <div class="card-header py-3">
            <h2 class="h6 m-0 font-weight-bold text-info">Tentang Aplikasi</h2>
        </div>
        <div class="card-body">
            <p class="mb-0 text-gray-700">
                Laravel Admin adalah aplikasi sederhana untuk menampilkan informasi produk dan layanan,
                serta menyediakan halaman kontak dalam satu antarmuka yang mudah digunakan.
            </p>
        </div>
    </div>
@endsection