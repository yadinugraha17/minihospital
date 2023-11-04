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
        <!-- Alert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            @if(session('status'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title : 'Sukses!',
                    text : "{{session('status')}}",
                });
            </script>
            @endif
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Formulir Donor Darah</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Form Pengajuan-->
                            <form action="{{ route('store.donor') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="mb-3">
                                    <label for="id_darah">Pilih Jenis Darah</label>
                                    <select class="form-select" id="id_darah" name="id_darah" required>
                                        <option value="">Pilih jenis darah</option>
                                        @foreach($darahs as $darah)
                                            <option value="{{ $darah->id }}">{{ $darah->darah }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="penyakit">Riwayat Penyakit</label>
                                    <input type="text" class="form-control" id="penyakit" name="penyakit" placeholder="Masukkan Riwayat Penyakit" required>
                                    <p style="font-size: small;">* Jika tidak ada masukkan (-)</p>
                                </div>
                                <div class="mb-3">
                                    <label for="nohp">No Handphone</label>
                                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan No Handphone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="id_jadwal">Pilih Tempat</label>
                                    <select class="form-select" id="id_jadwal" name="id_jadwal" required>
                                        <option value="">Pilih Tempat</option>
                                        @foreach($jadwals as $jadwal)
                                            <option value="{{ $jadwal->id }}">{{ $jadwal->tempat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
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
