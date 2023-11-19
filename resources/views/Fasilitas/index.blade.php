@extends('layouts.app')

@section('title', 'Fasilitas Admin')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Fasilitas</h1>

<a href="{{ route('fasilitas-admin.create') }}" class="btn btn-primary mb-2">Tambah Fasilitas</a>

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTableAturan" width="100%" cellspacing="0">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($model as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->category }}</td>
                        <td class="text-center">
                            <a href="{{ route('aturan.edit', $item->id) }}" class="btn btn-warning btn-sm m-1"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('aturan.destroy', $item->id) }}" method="POST" style="display: inline">
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


@endsection