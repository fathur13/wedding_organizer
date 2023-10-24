<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProduckController extends Controller
{
    public function index()
    {
        // $users = \App\Models\User::all();
        return view('admin.product.index');
    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh formulir
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Simpan produk ke dalam basis data
        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    // public function destroy(User $user)
    // {
    //     $user->delete();
    //     return redirect('account-admin')->with('success', 'User deleted successfully');
    // }
}
