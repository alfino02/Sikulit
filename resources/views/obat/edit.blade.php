@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mb-2 font-weight-bold text-primary">Edit Data obat</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('obat.update', ['id' => $obat->id]) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="obat" class="form-label">Nama obat</label>
                            <input type="text" class="form-control" id="namaobat" name="namaobat" placeholder="isikan nama obat disini" value="{{ $obat->nama_obat }}">
                            <label for="obat" class="form-label">deskripsi Obat</label>
                            <input type="text" class="form-control" id="deskripsiobat" name="deskripsiobat" placeholder="isikan deskripsi obat disini" value="{{ $obat->deskripsi_obat }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
