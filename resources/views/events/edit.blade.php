@extends('layouts.app')
@section('title', 'Tambah Agenda')
@section('content')

<h1>Edit Acara</h1>
    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Nama Acara:</label>
        <input type="text" name="title" value="{{ $event->title }}" required><br>
        <label for="date">Tanggal Acara:</label>
        <input type="date" name="date" value="{{ $event->date }}" required><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="{{ route('events.index') }}">Kembali ke Daftar Acara</a>

@endsection
