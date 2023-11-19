@extends('layouts.app')

@section('title', 'Edit Kontak')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kontak</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('kontak-admin.update', $kontak->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control"
                        value="{{ $kontak->title }}" required>
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" class="form-control"
                        value="{{ $kontak->link }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
