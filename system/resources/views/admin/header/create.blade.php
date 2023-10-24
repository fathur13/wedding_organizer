@extends('layouts.app2')

@section('conten')
    <div class="container" style="margin-top: 4%">
        <form method="POST" action="{{ route('header.store') }}" enctype="multipart/form-data">
            @csrf
            <label for="title">Judul:</label>
            <input type="text" name="title" required>
            <br>
        
            <label for="judul">Judul Header:</label>
            <input type="text" name="judul" required>
            <br>
        
            <label for="teks">Teks Header:</label>
            <textarea name="teks" required></textarea>
            <br>
        
            <label for="image">Gambar Header:</label>
            <input type="file" name="image" accept="image/*" required>
            <br>
        
            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection
