<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil produk beserta kategori terkait
        $products = Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function insert()
    {
        Product::create([
            'name' => 'Produk Baru',
            'category_id' => 1,
            'price' => 10000,
            'stock' => 10,
            'description' => 'Produk otomatis',
            'status' => 'tersedia'
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    //UPDATE
    public function update($id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => 'Produk Update',
            'price' => 20000,
            'stock' => 5,
            'description' => 'Produk yang diupdate',
            'status' => 'habis'
        ]);

        return redirect('/products')->with('success', 'Data berhasil diupdate');
    }

    //DELETE
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('success', 'Data berhasil dihapus');
    }
}
