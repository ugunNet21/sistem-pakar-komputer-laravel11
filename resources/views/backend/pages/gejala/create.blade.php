<!-- resources/views/backend/pages/gejala/create.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Tambah Gejala')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Tambah Gejala</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Form Tambah Gejala</div>

                        <div class="card-body">
                            <form action="{{ route('gejala.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="kode_gejala" class="form-label">Kode Gejala</label>
                                    <input type="text" class="form-control" id="kode_gejala" name="kode_gejala"
                                        value="{{ old('kode_gejala') }}" required>
                                    @error('kode_gejala')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_gejala" class="form-label">Nama Gejala</label>
                                    <input type="text" class="form-control" id="nama_gejala" name="nama_gejala"
                                        value="{{ old('nama_gejala') }}" required>
                                    @error('nama_gejala')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('gejala.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
