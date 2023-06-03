@extends('layout.layoutdok')
@section('content')
    <!-- Earnings (Monthly) Card Example -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tabel User</h1> --}}
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTable Aturan</h6>
            <a href="{{ route('aturan.create') }}" class="btn btn-primary">Tambah Data</a>
            <a href="{{ route('aturan.report') }}" class="btn btn-success">Cetak Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Penyakit</th>
                            <th>Id Gejala</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @forelse ($penyakit as $item)
                            <tr>
                                <td>{{$item->nama_penyakit }}</td>
                                <td>@foreach ($item->gejalas as $show)
                                    {{ $show->kode_gejala }}
                                @endforeach</td>
                                <td>
                                    <a href="{{ route('aturan.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('aturan.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
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
