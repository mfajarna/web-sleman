@extends('layouts.app')

@section('content')
    <h1>Daftar Peminjaman</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Peminjam</th>
                        <th>Nama Instansi</th>
                        <th>No Telepon / WA</th>
                        <th>Surat Permohonan</th>
                        <th>KTP</th>
                        <th>Dari Tanggal</th>
                        <th>Sampai Tanggal</th>
                        <th>Waktu Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($model as $item)
                        <tr>
                            <td>{{$item->nama }}</td>
                            <td>{{$item->instansi }}</td>
                            <td>{{$item->no_telp }}</td>
                            <td>{{$item->surat_permohonan === null ? 'Tidak Ada': $item->surat_permohonan }}</td>
                            <td>
                                <img src="ktp/{{$item->ktp}}" width="300" height="150">
                            </td>
                            <td>
                                {{$item->dari_tanggal}}
                            </td>
                            <td>
                                {{$item->sampe_tanggal}}
                            </td>
                            <td>
                                {{$item->waktu_peminjaman}}
                            </td>
                            <td>
                                <div class="dropdown mb-4">
                                    <input type="hidden" name="id" id="id" value="{{$item->id}}">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$item->status}}
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" style="">
                                        <a class="dropdown-item" id="btn_verifikasi" href="{{route('peminjaman-admin.update', $item->id)}}">Diverifikasi</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        $(document).ready(function(){
            $('#btn_verifikasi').on('click', function(){
                const id = $('#id').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                var data = {
                    _token: csrfToken, // Include the CSRF token in the data
                };

                console.log(id);

                $.ajax({
                    type: 'POST',
                    url: '{{url("/peminjaman-update/' + id '")}}',
                    data:data,
                    success: function(data){
                        console.log('succ', data);
                    },
                    error: function(err){
                        console.log('err', err.responseJSON)
                    }
                });
            })
        })
    </script> --}}

@endsection