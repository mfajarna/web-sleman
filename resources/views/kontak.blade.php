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

     <style>
      /* Custom CSS to style the text overlay */
      .image-container {
      position: relative;
      }
      .text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.7); /* Background color for text */
        color: white; /* Text color */
        padding: 10px; /* Adjust padding as needed */
      }

      .overlay {
        background-image: url('gedungseni1.jpg'); /* Replace with your image URL */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        min-height: 100vh; /* Set the desired height */
        position: relative;
      }
      .overlay::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Change the last value (0.5) to adjust opacity */
      }

      .profile-links {
            list-style: none;
            padding: 0;
        }
        .profile-link {
            margin-bottom: 10px;
        }

        .profile-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

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
            <li class="nav-item ">
            <a class="nav-link link-nav " aria-current="page" href="{{route('beranda')}}">HOME</a>
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
              <a class="nav-link active link-nav " href="{{route('kontak')}}">KONTAK</a>
            </li>
              
    </div>
    </nav>
    <div class="container">
      <h5 class="text-center">List Kontak</h5>
      <div class="profile-container">
        <ul class="profile-links">
          @foreach($kontaks as $item)
            <li class="profile-link text-center">
                <a href="{{$item->link}}" class="btn btn-primary btn-block" target="_blank">{{$item->title}}</a>
            </li>
          @endforeach
          <!-- Add more links as needed -->
      </ul>
      </div>
    </div>
  
      <!-- Include Bootstrap JavaScript and jQuery if needed -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
