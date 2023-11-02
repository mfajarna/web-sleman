@extends('layouts.app')
@section('title', 'Tambah Aturan')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Peraturan</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('sop.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="aktivitas">Aktivitas:</label>
                        <input type="text" name="aktivitas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="target">Target:</label>
                        <input type="text" name="target" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <textarea name="keterangan" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('sop.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
