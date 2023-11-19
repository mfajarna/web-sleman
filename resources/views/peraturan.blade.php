<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Font awesome --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-... tambahkan hash integritas yang valid ..." crossorigin="anonymous" />
     <link rel="stylesheet" href="style.css">
    <title>Layanan Sewa Gedung</title>
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
            <li class="nav-item">
            <a class="nav-link active link-nav" aria-current="page" href="{{route('beranda')}}">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link link-nav" href="{{route('peraturan')}}">PELAYANAN DAN ATURAN</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link link-nav" href="{{route('peminjaman')}}">PEMINJAMAN</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link link-nav" href="{{route('jadwal_user')}}">JADWAL</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link link-nav" href="{{route('fasilitas-user')}}">FASILITAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-nav" href="{{route('kontak')}}">KONTAK</a>
                </li>
        </ul>
        </div>

    </div>
    </nav>


    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    <div class="container-fluid bg-pelayanan">
    <div class="card shadow mb-4 mt-4 container">
    <h1 class="h3 mb-2 text-gray-800 text-center mt-2">Pelayanan</h1>
<div class="card-body">
<div class="container-pdf">
<div id="pdf-container">
        <!-- Tambahkan canvas untuk setiap halaman yang ingin Anda tampilkan -->
        <canvas id="pdf-render-1"></canvas>
        <canvas id="pdf-render-2"></canvas>
        <canvas id="pdf-render-3"></canvas>
    </div>
</div>

</div>
</div>
    </div>

<!-- Tabel Peraturan -->
<div class="card shadow mb-4 mt-4 container text-center">
  <h1 class="h3 mb-2 text-gray-800">Peraturan</h1>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTableAturan" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Uraian</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aturan as $index => $aturans)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $aturans->uraian }}</td>
                            <td>{{ $aturans->ket }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script>
        // Gantilah URL sesuai dengan URL file PDF yang akan ditampilkan
        const pdfUrl ='pdf/' + "{{$name}}";


        // Buat array untuk menyimpan objek halaman
        const pages = [1, 2, 3]; // Ganti dengan halaman-halaman yang ingin Anda tampilkan

        // Fungsi untuk merender halaman PDF
        function renderPage(pageNumber) {
            pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
                pdf.getPage(pageNumber).then(function(page) {
                    const canvas = document.getElementById(`pdf-render-${pageNumber}`);
                    const context = canvas.getContext('2d');

                    const viewport = page.getViewport({ scale: 1.5 });

                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    page.render({
                        canvasContext: context,
                        viewport: viewport
                    });
                });
            });
        }

        // Render halaman-halaman yang Anda inginkan
        pages.forEach(function(pageNumber) {
            renderPage(pageNumber);
        });
    </script>

  </body>
</html>
