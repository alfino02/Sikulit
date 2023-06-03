@extends('layout.layout')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary mb-2">DataTable Role</h6>
            <a href="{{ route('role.create') }}" class="btn btn-primary">Tambah Data</a>
            <a href="{{ route('role.report') }}" class="btn btn-success">Cetak Role</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ ucfirst($item->role) }}</td>
                                <td>
                                    <a href="{{ route('role.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('role.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
