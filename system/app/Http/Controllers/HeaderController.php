<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HeaderController extends Controller
{
    public function index()
    {
        $headers = Header::all();
        return view('admin.header.index', compact('headers'));
    }


    public function create()
    {
        return view('admin.header.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'judul' => 'required',
            'teks' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // atur validasi gambar sesuai kebutuhan
        ]);

        // Simpan gambar ke direktori yang sesuai
        $imagePath = $request->file('image')->store('header_images', 'public');

        // Simpan data ke database
        Header::create([
            'title' => $data['title'],
            'judul' => $data['judul'],
            'teks' => $data['teks'],
            'image_path' => $imagePath,
        ]);

        return redirect()->route('header.index'); // Redirect ke halaman header setelah berhasil menyimpan
    }
    public function destroy(Header $header)
    {
        // Hapus gambar jika perlu
        $imagePath = 'system/storage/app/public/header_images/' . $header->image_path;

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Hapus data header dari database
        $header->delete();

        return redirect('template-header')->with('success', 'Data header berhasil dihapus.');
    }
}
