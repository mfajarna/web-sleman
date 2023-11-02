@extends('layouts.app')
@section('title', 'Edit Pelayanan')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Pelayanan</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pelayanan-edit-action', $pelayanan->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="file">File pelayanan</label>
                        <input type="file" name="file" id="file" class="form-control" required/>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
