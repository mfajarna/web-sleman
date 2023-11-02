@extends('layouts.app')

@section('title', 'Peraturan')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Show Peraturan</h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $sop->aktivitas }}</h5>
            <p class="card-text"><strong>Target:</strong> {{ $sop->target }}</p>
            <p class="card-text"><strong>Keterangan:</strong> {{ $sop->keterangan }}</p>

            <a href="{{ route('sop.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
@endsection
