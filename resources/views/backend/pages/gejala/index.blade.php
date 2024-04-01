<!-- resources/views/gejala/index.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Gejala')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Gejala</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Daftar Gejala</div>

                        <div class="card-body">
                            <a href="{{ route('gejala.create') }}" class="btn btn-primary mb-3">Tambah Gejala</a>

                            @if ($gejalas->isEmpty())
                                <p>Tidak ada data Gejala.</p>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="col">Kode</th>
                                                <th scope="col">Nama Gejala</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($gejalas as $gejala)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $gejala->kode_gejala }}</td>
                                                    <td>{{ $gejala->nama_gejala }}</td>
                                                    <td>
                                                        <a href="{{ route('gejala.show', $gejala) }}"
                                                            class="btn btn-info btn-sm">Detail</a>
                                                        <a href="{{ route('gejala.edit', $gejala) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <form action="{{ route('gejala.destroy', $gejala) }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus mata gejala ini?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
