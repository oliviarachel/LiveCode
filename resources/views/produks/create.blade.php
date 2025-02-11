@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h4>Tambah Produk</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('produks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
