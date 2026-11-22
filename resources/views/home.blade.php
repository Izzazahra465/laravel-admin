@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $judul }}</h1>

    <div class="card shadow mb-4 border-left-primary">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="mr-3">
                    <i class="fas fa-hand-sparkles fa-2x text-primary"></i>
                </div>
                <div>
                    <h2 class="h5 font-weight-bold text-gray-800 mb-1">Selamat datang di Laravel Admin</h2>
                    <p class="mb-0 text-gray-600">Kelola informasi produk dan layanan Anda dengan mudah melalui aplikasi ini.</p>
                </div>
            </div>
        </div>
    </div>
@endsection