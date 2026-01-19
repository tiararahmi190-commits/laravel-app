@extends('layouts.dashboard')

@section('content')

<style>
    /* Page Header - COMPACT */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.2rem;
        padding-bottom: 0.8rem;
        border-bottom: 2px solid #fbcfe8;
    }

    .page-header h2 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }

    /* Button Styling - COMPACT */
    .btn-primary {
        background: linear-gradient(135deg, #ec4899 0%, #db2777 100%) !important;
        border: none !important;
        border-radius: 6px;
        padding: 0.5rem 1.2rem;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.2s ease;
        box-shadow: 0 2px 8px rgba(236, 72, 153, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(236, 72, 153, 0.4);
    }

    .btn-sm {
        padding: 0.35rem 0.8rem;
        font-size: 0.8rem;
    }

    .btn-danger {
        background: linear-gradient(135deg, #f87171 0%, #dc2626 100%) !important;
        border: none !important;
        border-radius: 6px;
        transition: all 0.2s ease;
        box-shadow: 0 2px 8px rgba(248, 113, 113, 0.3);
    }

    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(248, 113, 113, 0.4);
    }

    /* Table Styling - PRETTY & COMPACT */
    .table {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        font-size: 0.95rem;
    }

    .table thead {
        background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);
        color: white;
    }

    .table thead th {
        border: none;
        padding: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }

    .table tbody tr {
        transition: all 0.2s ease;
        border-bottom: 1px solid #fce7f3;
    }

    .table tbody tr:nth-child(odd) {
        background-color: #fce7f3;
    }

    .table tbody tr:nth-child(even) {
        background-color: #fbcfe8;
    }

    .table tbody tr:hover {
        background: linear-gradient(90deg, #f9a8d4 0%, #ec4899 20%, #f9a8d4 100%);
        transform: scale(1.01);
        box-shadow: 0 2px 8px rgba(236, 72, 153, 0.3);
        color: white;
    }

    .table tbody td {
        padding: 1rem;
        vertical-align: middle;
        border: none;
        font-size: 0.95rem;
        color: #1f2937;
    }

    .text-center {
        color: #9ca3af;
        font-style: italic;
        padding: 2rem !important;
    }
</style>

<div class="page-header">
    <h2>Data Penimbangan</h2>
    <a href="{{ url('penimbangan/create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Data
    </a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Balita</th>
            <th>Tanggal Penimbangan</th>
            <th>Berat Badan (Kg)</th>
            <th>Tinggi Badan (Cm)</th>
            <th>Status Gizi</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($rows as $index => $row)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $row->balita->nama_balita ?? '-' }}</td>
            <td>{{ $row->tanggal }}</td>
            <td>{{ $row->berat }}</td>
            <td>{{ $row->tinggi }}</td>
            <td>{{ $row->status_gizi }}</td>
            <td>{{ $row->keterangan }}</td>
            <td>
                <a href="{{ url('penimbangan/' . $row->id . '/edit') }}"
                   class="btn btn-primary btn-sm">Edit</a>

                <form action="{{ url('penimbangan/' . $row->id) }}"
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" class="text-center">
                Tidak ada data penimbangan
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection