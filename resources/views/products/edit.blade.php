@extends('layouts.main')

@section('content')

<h1>Edit Barang Inventaris</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text"
               name="name"
               class="form-control"
               value="{{ $product->name }}">
    </div>

    <div class="mb-3">
        <label>Kategori</label>

        <select name="category_id" class="form-select">

            @foreach($categories as $c)

            <option value="{{ $c->id }}"
                {{ $product->category_id == $c->id ? 'selected' : '' }}>

                {{ $c->name }}

            </option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number"
               name="price"
               class="form-control"
               value="{{ $product->price }}">
    </div>

    <div class="mb-3">
        <label>Stok</label>
        <input type="number"
               name="stock"
               class="form-control"
               value="{{ $product->stock }}">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>

        <textarea name="description"
                  class="form-control">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Status</label>

        <select name="status" class="form-select">

            <option value="Tersedia"
                {{ $product->status == 'Tersedia' ? 'selected' : '' }}>
                Tersedia
            </option>

            <option value="Tidak Tersedia"
                {{ $product->status == 'Tidak Tersedia' ? 'selected' : '' }}>
                Tidak Tersedia
            </option>

        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

</form>

@endsection