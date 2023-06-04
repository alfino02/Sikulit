@extends('layout.layout')
@section('content')
    <!-- Earnings (Monthly) Card Example -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Hasil Konsultasi</h6>
            <a href="{{ route('hasilpasien.report') }}" class="btn btn-success">Cetak Hasil Diagnosa</a>
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
                        @forelse ($hasilpasien as $item)
                        <tr>
                            <td>{{$item->user->nama_user }}</td>
                            <td>{{ $item->penyakit->nama_penyakit}}</td>
                        </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
