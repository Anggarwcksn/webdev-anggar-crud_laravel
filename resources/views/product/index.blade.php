@extends('layout.app')

@section('content')
<div>
    <a href="{{ route('product.create') }}" class="btn btn-success">Tambah Produk</a>
</div>

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->judul }}</td>
            <td>{{ $product->deskripsi }}</td>
            <td>{{ $product->harga }}</td>
            <td>
                <a href="{{ route('product.show', $product->id) }}" class="btn btn-info">Detail</a>
                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
