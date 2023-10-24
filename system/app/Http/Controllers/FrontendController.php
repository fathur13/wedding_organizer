<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $headers = Header::all(); // Mengambil semua data header dari database
        return view('index', compact('headers'));
    }
}
