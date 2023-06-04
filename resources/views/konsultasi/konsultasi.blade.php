@extends('layout.layout')
@section('content')
    <!-- Earnings (Monthly) Card Example -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Konsultasi</h6>
        </div>
        <div class="card-body">
            <div class="form-check">
                <form action="{{ route('konsultasi.store') }}" method="POST">
                    @csrf
                    @foreach ($gejala as $show)
                        <ul>
                            <li>
                                <input class="form-check-input" type="checkbox" name="gejala[]" value="{{ $show->id }}"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $show->gejala }}
                                </label>
                            </li>
                        </ul>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Cek Diagnosis</button>
                </form>
            </div>
        </div>
    </div>
@endsection
