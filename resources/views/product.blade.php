@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $judul }}</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="h6 m-0 font-weight-bold text-primary">Daftar Produk</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Laptop Pro</td>
                            <td>Rp 12.500.000</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Mouse Wireless</td>
                            <td>Rp 350.000</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>Keyboard Mekanik</td>
                            <td>Rp 850.000</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection