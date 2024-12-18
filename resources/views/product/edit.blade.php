@extends("layout.app")

@section('content')
<div class="m-3">
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-sm-8 mt-2">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukan Judul" value="{{ $product->judul }}" required>
        </div>
        <div class="col-sm-8 mt-2">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi" value="{{ $product->deskripsi }}" required>
        </div>
        <div class="col-sm-8 mt-2">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Masukan Harga" value="{{ $product->harga }}" required>
        </div>
        <div class="col-sm-8 mt-3">
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection
