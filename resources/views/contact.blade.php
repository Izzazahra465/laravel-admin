@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $judul }}</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="h6 m-0 font-weight-bold text-primary">Kirim Pesan</h2>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="contact-name">Nama</label>
                    <input type="text" class="form-control" id="contact-name" placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                    <label for="contact-email">Email</label>
                    <input type="email" class="form-control" id="contact-email" placeholder="nama@contoh.com">
                </div>
                <div class="form-group">
                    <label for="contact-message">Pesan</label>
                    <textarea class="form-control" id="contact-message" rows="4" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-paper-plane mr-2"></i>Kirim
                </button>
            </form>
        </div>
    </div>
@endsection