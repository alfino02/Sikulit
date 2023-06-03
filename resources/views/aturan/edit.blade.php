@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mb-2 font-weight-bold text-primary">Edit Data obat</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('aturan.update', ['id' => $aturan->id]) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="idpenyakit" class="form-label">Id Penyakit</label>
                            <input type="text" class="form-control" id="idpenyakit" name="namapenyakit" placeholder="isikan Id Penyakit disini" value="{{ $aturan->nama_penyakit }}">
                            <label for="idgejala" class="form-label">Id Gejala</label>
                            {{-- <input type="text" class="form-control" id="idgejala" name="idgejala" placeholder="isikan Id Gejala disini" value="{{ $aturan->id_gejala }}"> --}}
                            <select class="form-select" id="gejala" name="idpilih[]" data-placeholder="Choose anything" multiple>
                                @foreach ($gejala as $item)
                                <option value="{{ $item->id }}">{{ $item->gejala }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $( '#gejala' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );
    </script>
@endsection
