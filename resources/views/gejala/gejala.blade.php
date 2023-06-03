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
            <h6 class="m-0 font-weight-bold text-primary">DataTable Gejala</h6>
            <a href="{{ route('gejala.create') }}" class="btn btn-primary">Tambah Data</a>
            <a href="{{ route('gejala.report') }}" class="btn btn-success">Cetak Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Gejala</th>
                            <th>Nama Gejala</th>
                        </tr>
                        @forelse ($gejala as $item)
                            <tr>
                                <td>{{$item->kode_gejala }}</td>
                                <td>{{ $item->gejala}}</td>
                                <td>
                                    <a href="{{ route('gejala.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('gejala.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
