@extends('layouts.app')

@section('title', 'Edit SOP')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit SOP</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sop.update', $sop->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="aktivitas">Aktivitas</label>
                    <input type="text" name="aktivitas" id="aktivitas" class="form-control"
                        value="{{ $sop->aktivitas }}" required>
                </div>
                <div class="form-group">
                    <label for="target">Target</label>
                    <input type="text" name="target" id="target" class="form-control"
                        value="{{ $sop->target }}" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control"
                        value="{{ $sop->keterangan }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
