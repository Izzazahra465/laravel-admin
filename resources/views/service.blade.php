@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $judul }}</h1>

    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card shadow h-100 border-left-primary">
                <div class="card-body">
                    <div class="text-primary mb-3">
                        <i class="fas fa-laptop-code fa-2x"></i>
                    </div>
                    <h2 class="h5 font-weight-bold text-gray-800">Pengembangan Web</h2>
                    <p class="mb-0 text-gray-600">Pembuatan aplikasi web yang responsif dan sesuai kebutuhan bisnis Anda.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card shadow h-100 border-left-success">
                <div class="card-body">
                    <div class="text-success mb-3">
                        <i class="fas fa-tools fa-2x"></i>
                    </div>
                    <h2 class="h5 font-weight-bold text-gray-800">Pemeliharaan Sistem</h2>
                    <p class="mb-0 text-gray-600">Dukungan dan pemeliharaan rutin untuk menjaga aplikasi tetap optimal.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card shadow h-100 border-left-info">
                <div class="card-body">
                    <div class="text-info mb-3">
                        <i class="fas fa-headset fa-2x"></i>
                    </div>
                    <h2 class="h5 font-weight-bold text-gray-800">Konsultasi IT</h2>
                    <p class="mb-0 text-gray-600">Rekomendasi teknologi untuk membantu mengembangkan solusi digital Anda.</p>
                </div>
            </div>
        </div>
    </div>
@endsection