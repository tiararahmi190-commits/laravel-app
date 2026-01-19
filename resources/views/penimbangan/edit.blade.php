@extends('layouts.dashboard')

@section('content')

    <h2>Edit Penimbangan</h2>

    <form action="{{ url('penimbangan/' . $row->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="balita_id" class="form-label fw-bold">Nama Balita</label>
            <select class="form-control" name="balita_id" id="balita_id" required>
                <option value="">-- Pilih Balita --</option>
                @foreach($balitas as $balita)
                    <option value="{{ $balita->balita_id }}"
                        {{ $row->balita_id == $balita->balita_id ? 'selected' : '' }}>
                        {{ $balita->nama_balita }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label fw-bold">Tanggal Penimbangan</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal"
                   value="{{ $row->tanggal }}" required>
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label fw-bold">Berat Badan (Kg)</label>
            <input type="number" step="0.1" class="form-control" name="berat" id="berat"
                   value="{{ $row->berat }}" required>
        </div>

        <div class="mb-3">
            <label for="tinggi" class="form-label fw-bold">Tinggi Badan (Cm)</label>
            <input type="number" step="0.1" class="form-control" name="tinggi" id="tinggi"
                   value="{{ $row->tinggi }}" required>
        </div>

        <div class="mb-3">
            <label for="status_gizi" class="form-label fw-bold">Status Gizi</label>
            <select class="form-control" name="status_gizi" id="status_gizi" required>
                <option value="">-- Pilih Status Gizi --</option>
                <option value="Gizi Baik" {{ $row->status_gizi == 'Gizi Baik' ? 'selected' : '' }}>
                    Gizi Baik
                </option>
                <option value="Gizi Kurang" {{ $row->status_gizi == 'Gizi Kurang' ? 'selected' : '' }}>
                    Gizi Kurang
                </option>
                <option value="Gizi Buruk" {{ $row->status_gizi == 'Gizi Buruk' ? 'selected' : '' }}>
                    Gizi Buruk
                </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label fw-bold">Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan">{{ $row->keterangan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

@endsection
