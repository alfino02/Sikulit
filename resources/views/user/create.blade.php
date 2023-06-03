@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mb-2 font-weight-bold text-primary">Tambah Data User</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('user.store') }}">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama User</label>
                            <input type="text" class="form-control" id="namauser" name="namauser" placeholder="isikan nama User disini">
                            <label for="email" class="form-label">Email User</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="isikan Email disini">
                            <label for="password" class="form-label">Password User</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="isikan Password disini">
                            <select class="form-select" name="role" aria-label="Default select example">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($role as $item)
                                <option value="{{ $item->id }}">{{ $item->role }}</option>
                                @endforeach
                              </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
