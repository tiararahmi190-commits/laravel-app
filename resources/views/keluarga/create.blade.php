@extends('layouts.dashboard')

@section('content')

    <h2>Tambah Keluarga</h2>

    <form action="{{ url('keluarga') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kepala" class="form-label fw-bold">Nama Kepala</label>
            <input type="text" class="form-control" name="nama_kepala" id="nama_kepala" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label fw-bold">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label fw-bold">No hp</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection