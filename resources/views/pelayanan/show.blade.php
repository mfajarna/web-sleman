@extends('layouts.app')

@section('title', 'SOP dan Aturan')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Show SOP dan Peraturan</h6>
        </div>
        <div class="card-body">
            <p><strong>Aktivitas:</strong> {{ $sop->aktivitas }}</p>
            <p><strong>Target:</strong> {{ $sop->target }}</p>
            <p><strong>Keterangan:</strong> {{ $sop->keterangan }}</p>

            <div class="mt-3">
                <a href="{{ route('sop.edit', $sop->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('sop.destroy', $sop->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
@endsection