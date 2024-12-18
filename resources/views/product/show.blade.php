@extends('layout.app')

@section('content')
<div class="m-3">
    <h3>Detail Produk</h3>
    <div class="mt-3">
        <p><strong>Judul:</strong> {{ $product->judul }}</p>
        <p><strong>Deskripsi:</strong> {{ $product->deskripsi }}</p>
        <p><strong>Harga:</strong> Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
    </div>
    <a href="{{ route('product.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
