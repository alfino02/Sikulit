@extends('layout.layoutpas')
@section('content')
    <!-- Earnings (Monthly) Card Example -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Konsultasi</h6>
            <a href="{{ route('role.create') }}" class="btn btn-primary">Tambah Data</a>
            <button type="button" class="btn btn-dark">Cetak Konsultasi</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Id user</th>
                            <th>Id penyakit</th>
                            <th>Id Obat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>27 Maret 2023</td>
                            <td>Daboi</td>
                            <td>Tifus</td>
                            <td>Decadryl</td>
                        </tr>
                        <tr>
                            <td>8 April 2023</td>
                            <td>Surur</td>
                            <td>HIV</td>
                            <td>Amoxcilin</td>
                        </tr>
                        <tr>
                            <td>9 Mei 2023</td>
                            <td>Yondu</td>
                            <td>AIDS</td>
                            <td>Heroine</td>
                        </tr>
                        <tr>
                            <td>1 Januari 2023</td>
                            <td>Firman</td>
                            <td>Tumor</td>
                            <td>Ampicilin</td>
                        </tr>
                        <tr>
                            <td>3 Maret 2023</td>
                            <td>Indra</td>
                            <td>Cantengan</td>
                            <td>Mefenamic Acid</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
