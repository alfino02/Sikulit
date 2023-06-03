@extends('layout.layoutpas')
@section('content')
    <!-- Earnings (Monthly) Card Example -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Hasil Konsultasi</h6>
            <a href="{{ route('role.create') }}" class="btn btn-primary">Tambah Data</a>
            <button type="button" class="btn btn-dark">Cetak hasil Diagnosa</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id user</th>
                            <th>Id penyakit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Daboi</td>
                            <td>Tifus</td>
                        </tr>
                        <tr>
                            <td>Surur</td>
                            <td>HIV</td>
                        </tr>
                        <tr>
                            <td>Yondu</td>
                            <td>AIDS</td>
                        </tr>
                        <tr>
                            <td>Firman</td>
                            <td>Tumor</td>
                        </tr>
                        <tr>
                            <td>Indra</td>
                            <td>Cantengan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
