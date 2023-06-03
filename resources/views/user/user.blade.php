@extends('layout.layout')
@section('content')
    <!-- Earnings (Monthly) Card Example -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tabel User</h1> --}}
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mb-2 font-weight-bold text-primary">DataTable User</h6>
            <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah data</a>
            <a href="{{ route('user.report') }}" class="btn btn-dark mx-2">Cetak hasil</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        -- <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>ID Role</th>
                            <th>Aksi</th>
                        </tr>
                        @forelse ($user as $item)
                            <tr>
                                <td>{{$item->nama_user }}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->password}}</td>
                                <td>{{ $item->id_role}}</td>
                                <td>
                                    <a href="{{ route('user.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('user.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </thead>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
