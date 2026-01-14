@extends('layouts.app')

@section('content')

    <h2>Data Keluarga</h2>
    
    <a href="{{ url ('keluarga/create') }}"class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pengenal</th>
                <th>Nama Kepala Keluarga</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
            <tr>
                <td>{{ $row->keluarga_id }}</td>
                <td>{{ $row->nama_kepala }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>
                    <a href="{{ url('keluarga/'. $row->keluarga_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                    
                    <form action="{{ url ('keluarga/' . $row->keluarga_id ) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm ('yakin ingin mneghapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection