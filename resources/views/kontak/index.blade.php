@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Kontak</h1>


@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


<a href="{{ route('kontak-admin.create') }}" class="btn btn-primary mb-2">Tambah Kontak Baru</a>

<div class="container-fluid">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kontaks as $item)
                    <tr>
                        <td>{{$item->title }}</td>
                        <td>{{$item->link }}</td>
                        <td>{{$item->status }}</td>
                        <td>
                            <a href="{{ route('kontak-admin.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('kontak-admin.destroy', $item->id) }}" method="POST" style="display:inline">
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



@endsection