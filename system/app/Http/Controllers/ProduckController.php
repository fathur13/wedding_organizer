<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduckController extends Controller
{
    public function index()
    {
        // $users = \App\Models\User::all();
        return view('admin.produk');
    }
    // public function destroy(User $user)
    // {
    //     $user->delete();
    //     return redirect('account-admin')->with('success', 'User deleted successfully');
    // }
}
