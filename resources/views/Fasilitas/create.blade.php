@extends('layouts.app')

@section('title', 'Fasilitas Admin')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Tambah Fasilitas</h1>

<div class="container">
  <form method="POST" action="{{ route('fasilitas-admin.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="category">Kategori Fasilitas</label>
      <input type="text" name="category" id="category" class="form-control" required>
      <small id="emailHelp" class="form-text text-muted">Contoh: Ruang Panggung, Ruang Tunggu dll.</small>
    </div>

{{-- 
    <div class="border px-4 py-2">
        <div id="fileInputsContainer">
          <div class="file-input-group">
            <div class="form-group mb-2">
              <label for="files">Gambar Fasilitas</label>
              <input type="file" name="files[]" class="form-control file-input" required>
            </div>

            <div class="form-group">
              <label for="desc">Deskripsi Fasilitas</label>
              <textarea name="descriptions[]" class="form-control" required></textarea>
            </div>
          </div>

        </div>

        <button type="button" id="addFileInput" class="btn btn-success mt-4">Tambah Gambar</button>
    </div> --}}

    <table class="table table-bordered" id="dynamicAddRemove">
      <tr>
          <th>Photo</th>
          <th>Deskripsi Photo</th>
          <th>Action</th>
      </tr>
      <tr>
          <td><input type="file" name="addMoreInputFields[0][photos]" placeholder="Enter subject" class="form-control" />
          </td>
          <td><textarea name="addMoreInputFields[0][desc]" placeholder="Isi deskripsi photo" class="form-control"></textarea>
          </td>
          <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah Item</button></td>
      </tr>
  </table>

      <button type="submit"  class="btn btn-primary mt-4">Submit</button>

  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="file" name="addMoreInputFields[' + i +
            '][photos]" placeholder="Enter subject" class="form-control" /></td><td><textarea name="addMoreInputFields['+i+'][desc]" placeholder="Isi deskripsi photo" class="form-control"></textarea></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>


@endsection