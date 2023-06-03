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
            <h6 class="m-0 font-weight-bold text-primary">DataTable Aturan</h6>
            <a href="{{ route("penyakit.create") }}" class="btn btn-primary">Tambah Data</a>
            <button type="button" class="btn btn-dark">Cetak Penyakit</button>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Penyakit</th>
                            <th>Despkripsi Penyakit</th>
                            <th>Foto Penyakit</th>
                            <th>id obat</th>
                        </tr>
                        @forelse ($penyakit as $item)
                            <tr>
                                <td>{{$item->nama_penyakit }}</td>
                                <td>{{ $item->deskripsi_penyakit}}</td>
                                <td><img src="/image/{{ $item->foto_penyakit }}" width="20%" alt=""></td>
                                <td>{{ $item->id_obat }}</td>
                                <td>
                                    <a href="{{ route('penyakit.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('penyakit.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </thead>
                    <tbody>
                        {{-- @foreach ($penyakit as $show )
                            
                        <tr>
                            <td>{{ $show->nama_penyakit }}</td>
                            <td>Menyebabkan meriang</td>
                            <td>Masukan Foto Penyakit</td>
                            <td>OB001</td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
