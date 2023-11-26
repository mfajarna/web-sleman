<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css' rel='stylesheet' />
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <style>
        /* CSS untuk tampilan yang lebih menarik */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        #calendar {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
        }

        /* CSS untuk modal Bootstrap */
        #eventModal .modal-dialog {
            max-width: 400px;
        }

        #eventModal .modal-header {
            background-color: #007bff;
            color: white;
        }

        #eventModal .modal-title {
            color: white;
        }

        #eventModal .modal-body {
            padding: 20px;
        }
    </style>
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
                <a class="nav-link link-nav" aria-current="page" href="{{route('beranda')}}">HOME</a>
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
                <a class="nav-link active link-nav" href="{{route('jadwal_user')}}">JADWAL</a>
                </li>
                </li>
                <li class="nav-item">
                <a class="nav-link link-nav" href="{{route('fasilitas-user')}}">FASILITAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav " href="{{route('kontak')}}">KONTAK</a>
                  </li>
            </ul>
            </div>

        </div>
        </nav>


    <div id='calendar' style="width: 500px" class="mt-4"></div>

    <!-- Modal Bootstrap untuk menampilkan keterangan jadwal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Detail Acara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Nama Acara: <span id="eventTitle"></span></p>
                    <p>Tanggal Acara: <span id="eventDate"></span></p>
                    <!-- Tambahkan detail acara lainnya sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var events = @json($events);

            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: false,
                events: events,
                eventClick: function(calEvent, jsEvent, view) {
                    // Menampilkan modal ketika acara diklik
                    $('#eventTitle').text(calEvent.title);
                    $('#eventDate').text(moment(calEvent.start).format('YYYY-MM-DD'));
                    $('#eventModal').modal('show');
                },
                // Pengalihan bahasa
                locale: 'id', // Lokalisasi ke bahasa Indonesia
                buttonText: {
                    today: 'Hari Ini',
                    month: 'Bulan',
                    week: 'Minggu',
                    day: 'Hari'
                },
                monthNames: [
                    'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                ],
                monthNamesShort: [
                    'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'
                ]
            });
        });
    </script>


</body>
</html>
