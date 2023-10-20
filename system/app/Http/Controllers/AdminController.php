<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::all();
        return view('admin.admin', compact('users'));
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('account-admin')->with('success', 'User deleted successfully');
    }
}
