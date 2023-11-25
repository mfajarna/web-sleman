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

    <table class="table table-bordered" id="dynamicAddRemove">
      <tr>
          <th>Photo</th>
          <th>Action</th>
      </tr>
      <tr>
          <td><input type="file" name="addMoreInputFields[0][photos]" placeholder="Enter subject" class="form-control" required />
          </td>
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
            '][photos]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>


@endsection