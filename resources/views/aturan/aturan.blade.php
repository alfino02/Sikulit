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
            <a href="{{ route('role.create') }}" class="btn btn-primary">Tambah Data</a>
            <button type="button" class="btn btn-dark">Cetak Aturan</button>
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
                        <tr>
                            <td>Tifus</td>
                            <td>Badan meriang</td>
                        </tr>
                        <tr>
                            <td>HIV</td>
                            <td>Menyerang Antibodi tubuh</td>
                        </tr>
                        <tr>
                            <td>AIDS</td>
                            <td>Menyerang kekebalan tubuh</td>
                        </tr>
                        <tr>
                            <td>Tumor</td>
                            <td>Pertumbuhan dging Yang tidak wajar</td>
                        </tr>
                        <tr>
                            <td>Flu</td>
                            <td>Tenggorokan Kering Dan Sakit/td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
