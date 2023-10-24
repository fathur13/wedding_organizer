@extends('layouts.app2')

@section('conten')
    <div class="container" style="margin-top: 4%">
        <h1>Daftar Header</h1>
        <a href="{{ url('template-header-create') }}" class="btn btn-primary">Tambah Header Baru</a>
@php
    $no = 1
@endphp
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Teks</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($headers as $header)
                    <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $header->judul }}</td>
                        <td>{{ $header->teks }}</td>
                        <td>
                            <img src="{{ asset('system/storage/app/public/' . $header->image_path) }}"
                                alt="{{ $header->judul }}" width="100">
                        </td>
                        <td>
                            <form action="{{ route('header.delete', $header->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
