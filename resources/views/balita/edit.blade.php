@extends('layouts.dashboard')

@section('content')

    <h2>Edit Balita</h2>

    <form action="{{ url('balita/' . $row->balita_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_balita" class="form-label fw-bold">Nama Balita</label>
            <input type="text" class="form-control" name="nama_balita" id="nama_balita" value="{{ $row->nama_balita }}" required>
        </div>
        <div class="mb-3">
            <label for="keluarga_id" class="form-label fw-bold">Keluarga</label>
            <select class="form-control" name="keluarga_id" id="keluarga_id" required>
                <option value="">-- Pilih Keluarga --</option>
                @foreach($keluargas as $keluarga)
                    <option value="{{ $keluarga->keluarga_id }}" {{ $row->keluarga_id == $keluarga->keluarga_id ? 'selected' : '' }}>
                        {{ $keluarga->nama_kepala }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label fw-bold">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ $row->tgl_lahir }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L" {{ $row->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $row->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection