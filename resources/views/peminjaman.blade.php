<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Peminjaman</title>

            <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Font awesome --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-... tambahkan hash integritas yang valid ..." crossorigin="anonymous" />
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <img src="ic_logo.jpeg" width="50px" height="50px" />
                        <li class="nav-item ">
                        <a class="nav-link link-nav " aria-current="page" href="{{route('beranda')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link link-nav " href="{{route('peraturan')}}">PELAYANAN DAN ATURAN</a>
                        </li>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active link-nav " href="{{route('peminjaman')}}">PEMINJAMAN</a>
                        </li>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link link-nav " href="{{route('jadwal_user')}}">JADWAL</a>
                        </li>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link link-nav " href="{{route('fasilitas-user')}}">FASILITAS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-nav " href="{{route('kontak')}}">KONTAK</a>
                        </li>
                </div>
                </nav>
       <div class="container">
        <h3 class="mt-2">Pengisian Formulir</h3>   
                
        @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>
        @endif

        <div class="mt-3">
          <form action="{{route('peminjaman-admin.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                        <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" aria-describedby="nama_peminjam" required>
                </div>

                <div class="mb-3">
                        <label for="instansi" class="form-label">Instansi / Asal Peminjam</label>
                        <input type="text" class="form-control" id="instansi" name="instansi" aria-describedby="instansi" required>
                </div>

                <div class="mb-3">
                        <label for="noWa" class="form-label">Nomor Telepon/WA</label>
                        <input type="number" class="form-control" id="noWa" name="noWa" aria-describedby="noWa" required>
                </div>

                <div class="mb-3">
                        <label for="acara" class="form-label">Acara</label>
                        <input type="text" class="form-control" id="acara" name="acara" aria-describedby="acara" required>
                </div>

                <div class="mb-3">
                        <label for="surat_permohonan" class="form-label">Surat Permohonan (Bila Ada)</label>
                        <input type="text" class="form-control" id="surat_permohonan" name="surat_permohonan" aria-describedby="surat_permohonan">
                </div>

                
                <div class="mb-3">
                        <label for="ktp" class="form-label">KTP</label>
                        <input type="file" class="form-control" id="ktp" name="ktp" aria-describedby="ktp" required>
                </div>

                <div class="mb-3">
                        <label for="dari" class="form-label">Dari</label>
                        <input type="date" class="form-control" id="dari" name="dari" aria-describedby="dari" required>
                </div>

                <div class="mb-3">
                        <label for="sampai" class="form-label">Sampai</label>
                        <input type="date" class="form-control" id="sampai" name="sampai" aria-describedby="dari" required>
                </div>

                <div class="mb-3">
                        <label for="waktu_peminjaman" class="form-label">Waktu Peminjaman</label>
                        <select class="form-select" aria-label="Waktu Peminjaman" name="waktu_peminjaman" id="waktu_peminjaman">
                                <option value="06.00 - 18.00">06.00 - 18.00</option>
                                <option value="18.00 - 06.00">18.00 - 06.00</option>
                                <option value="24 Jam">24 jam</option>     
                        </select>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                
          </form>
        </div>
       </div> 
</body>
</html>