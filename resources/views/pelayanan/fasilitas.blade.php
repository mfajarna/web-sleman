<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
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
                        <a class="nav-link active link-nav " aria-current="page" href="{{route('beranda')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link link-nav " href="{{route('peraturan')}}">PELAYANAN DAN ATURAN</a>
                        </li>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link link-nav " href="{{route('peminjaman')}}">PEMINJAMAN</a>
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
   <div class="container text-center">
        <h1>FASILITAS GEDUNG KESENIAN</h1>  
   </div>

    <div class="container">
        @foreach ($fasilitasKategory as $item)
           <h2>{{$item->category}}</h2>

           <div class="row mb-4">
                @foreach ($item->file_path as $key =>  $file )
                <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                                <img src="{{$file['photoPath']}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <p class="card-text">{{$file['description']}}</p>
                                </div>
                        </div>
                </div>
                @endforeach
           </div>
        @endforeach


    </div>
</body>

</html>