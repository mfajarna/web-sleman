@extends('layouts.app')
@section('title', 'Tambah Agenda')
@section('content')

<h1>Tambah Acara Baru</h1>
<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <label for="title">Nama Acara:</label>
    <input type="text" name="title" required><br>
    <label for="date">Tanggal Acara:</label>
    <input type="date" name="date" required><br>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('events.index') }}">Kembali ke Daftar Acara</a>a

@endsection
