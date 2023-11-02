@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- SOP -->
<h1 class="h3 mb-2 text-gray-800">Sop</h1>

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('sop.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Pelayanan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTableSop" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Aktivitas</th>
                        <th>Target</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sop as $index => $sops)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $sops->aktivitas }}</td>
                            <td>{{ $sops->target }}</td>
                            <td>{{ $sops->keterangan }}</td>
                            <td class="text-center">
                                <a href="{{ route('sop.show', $sops->id) }}" class="btn btn-primary btn-sm m-1"><i class="fas fa-search"></i></a>
                                <a href="{{ route('sop.edit', $sops->id) }}" class="btn btn-warning btn-sm m-1"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('sop.destroy', $sops->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tabel Peraturan -->
<h1 class="h3 mb-2 text-gray-800">Peraturan</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('aturan.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Peraturan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTableAturan" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>uraian</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aturan as $index => $aturans)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $aturans->uraian }}</td>
                            <td>{{ $aturans->ket }}</td>
                            <td class="text-center">
                                <a href="{{ route('aturan.show', $aturans->id) }}" class="btn btn-primary btn-sm m-1"><i class="fas fa-search"></i></a>
                                <a href="{{ route('aturan.edit', $aturans->id) }}" class="btn btn-warning btn-sm m-1"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('aturan.destroy', $aturans->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
