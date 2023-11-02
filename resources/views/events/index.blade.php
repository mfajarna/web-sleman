@extends('layouts.app')
@section('title', 'Tambah Agenda')
@section('content')

<h1>Daftar Acara</h1>
<table class="table table-responsive">
    <thead>
        <tr>
            <th>Nama Acara</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->date }}</td>
                <td>
                    <a href="{{ route('events.edit', $event->id) }}">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('events.create') }}">Tambah Acara Baru</a>

@endsection
