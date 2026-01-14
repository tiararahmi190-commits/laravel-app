@extends('layouts.app')

@section('content')

    <h2>Edit Keluarga</h2>

    <form action="{{ url('keluarga/' . $row->keluarga_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_kepala" class="form-label fw-bold">Nama Kepala</label>
            <input type="text" class="form-control" name="nama_kepala" id="nama_kepala" value="{{ $row->nama_kepala }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label fw-bold">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat"  value="{{ $row->alamat}}" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label fw-bold">No hp</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp"  value="{{ $row->no_hp }}"required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection