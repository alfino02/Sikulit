@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mb-2 font-weight-bold text-primary">Tambah Data Gejala</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('gejala.store') }}">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="obat" class="form-label">Kode Gejala</label>
                            <input type="text" class="form-control" id="kodegejala" name="kodegejala" placeholder="isikan Kode Gejala disini">
                            <label for="obat" class="form-label">Nama Gejala</label>
                            <input type="text" class="form-control" id="namagejala" name="namagejala" placeholder="isikan Nama Gejala disini">
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
