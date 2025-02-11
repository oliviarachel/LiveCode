@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h4>Edit Produk</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('produks.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" value="{{ $produk->jumlah }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
