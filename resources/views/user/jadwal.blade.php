<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MiniHospital</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/assets/assets/favicon.ico')}}" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/assets/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{route('dashboard')}}"><span class="fw-bolder text-primary">MINIHOSPITAL</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('create.donor')}}">Donor Darah</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('unit.permintaan')}}">Permintaan Darah</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('jadwal.user')}}">Jadwal Kegiatan</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Jadwal Kegiatan</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Form Pengajuan-->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Jam</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Tempat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jadwal as $key => $item)
                                    <tr>
                                        <th scope="row">{{$key + 1}}</th>
                                        <td>{{$item->jadwal}}</td>
                                        <td>{{$item->jam}}</td>
                                        <td>{{$item->hari}}</td>
                                        <td>{{$item->tanggal}}</td>
                                        <td>{{$item->tempat}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('assets/assets/js/scripts.js')}}"></script>
    </body>
</html>
