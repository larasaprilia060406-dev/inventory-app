@extends('layouts.main')

@section('content')

<h1>Tambah Barang Inventaris</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select class="form-select" name="category_id" required>
            <option value="">Pilih Kategori</option>

            @foreach($categories as $c)
                <option value="{{ $c->id }}">
                    {{ $c->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" class="form-control" name="price" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" class="form-control" name="stock" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select class="form-select" name="status" required>
            <option value="">Pilih Status</option>
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

</form>

@endsection