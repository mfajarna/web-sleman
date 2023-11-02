@extends('layouts.app')
@section('title', 'Tambah Pelayanan')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Pelayanan dan Peraturan</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('sop.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="aktivitas">Aktivitas</label>
                        <textarea name="aktivitas" id="aktivitas" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="target">Target</label>
                        <input type="text" name="target" id="target" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
