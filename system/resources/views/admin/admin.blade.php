@extends('layouts/app2')
@section('conten')
    <div class="contents">
        <div class="crm mb-25">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xxl-12 col-lg-6 mb-25">
                        <div class="card p-0" style="margin-top: 2%">
                            <div class="card-header color-dark fw-500">
                                Data User 
                            </div>
                            <div class="card-body p-0" style="height: : 10 rem">
                                <div class="table4 p-25 mb-30">
                                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th>
                                                        <span class="userDatatable-title">No</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Lokasi</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Email</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Aksi</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>
                                                            <div class="userDatatable-content">
                                                                {{ $user->name }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content">
                                                                {{ $user->email }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
