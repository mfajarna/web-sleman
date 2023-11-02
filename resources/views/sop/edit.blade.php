@extends('layouts.app')

@section('title', 'Edit Peraturan')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Peraturan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('sop.update', $sop->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="aktivitas">Aktivitas:</label>
                    <input type="text" name="aktivitas" class="form-control" value="{{ $sop->aktivitas }}" required>
                </div>
                <div class="form-group">
                    <label for="target">Target:</label>
                    <input type="text" name="target" class="form-control" value="{{ $sop->target }}" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <textarea name="keterangan" class="form-control" rows="4" required>{{ $sop->keterangan }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('sop.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
