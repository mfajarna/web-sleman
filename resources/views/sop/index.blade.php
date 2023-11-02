@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pelayanan dan Peraturan</h1>

    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <a href="{{ route('sop.create') }}" class="btn btn-primary mb-2">Tambah Peraturan Baru</a>
    <a href="{{ route('pelayanan-create') }}" class="btn btn-primary mb-2">Tambah Pelayanan Baru</a>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Aktivitas</th>
                                <th>Target</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sop as $item)
                            <tr>
                                <td>{{ $item->aktivitas }}</td>
                                <td>{{ $item->target }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <a href="{{ route('sop.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('sop.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('sop.destroy', $item->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>File Pelayanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelayanan as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('pelayanan-edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
