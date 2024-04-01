<!-- resources/views/backend/pages/gejala/show.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Detail Gejala')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Gejala</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Detail Gejala</div>

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="kode_gejala" class="form-label">Kode Gejala</label>
                                <p>{{ $gejala->kode_gejala }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="nama_gejala" class="form-label">Nama Gejala</label>
                                <p>{{ $gejala->nama_gejala }}</p>
                            </div>
                            <a href="{{ route('gejala.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
