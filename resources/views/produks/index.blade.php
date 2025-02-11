@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>Daftar Produk</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $produk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produk->nama }}</td>
                        <td>{{ $produk->jumlah }}</td>
                        <td>
                            <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('produks.destroy', $produk->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
