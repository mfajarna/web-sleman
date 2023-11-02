@extends('layouts.app')
@section('title', 'Tambah Pelayanan')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Pelayanan</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pelayanan-upload') }}" enctype="multipart/form-data">
                    @csrf

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
