@extends('layouts.app')

@section('title', 'Fasilitas Admin')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Fasilitas</h1>

<div class="container">
    <form method="POST" action="{{ route('fasilitas-admin.store') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="category">Kategori Fasilitas</label>
      <input type="text" name="category" id="category" class="form-control" value={{$model->category}} required>
      <small id="emailHelp" class="form-text text-muted">Contoh: Ruang Panggung, Ruang Tunggu dll.</small>
    </div>


   @foreach ( $model->file_path as $file )
    <table class="table table-bordered" id="dynamicAddRemove">
            <tr>
                <th>Photo</th>
                <th>Deskripsi Photo</th>
                <th>Old Photo</th>
            </tr>
            <tr>
                <td><input type="file" name="addMoreInputFields[0][photos]" required placeholder="Enter subject" class="form-control" />
                </td>
                <td><textarea name="addMoreInputFields[0][desc]" placeholder="Isi deskripsi photo" class="form-control" required>{{$file['description']}}</textarea>
                </td>
                <td>
                    <img src="{{url($file['photoPath'])}}" class="card-img-top" alt="..." width="100px" height="100px"/>
                </td>
            </tr>
        </table>
   @endforeach
   <button type="submit"  class="btn btn-success mt-4">Update</button>
    </form>
</div>


@endsection