<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Multidana</title>

    <!-- Custom fonts for this template-->
    <link href="../../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 

    <!-- Custom styles for this template-->
    <link href="../../../../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-color: #A00043" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <br>
            <div style="margin-left: -30px" class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <img src="/images/logoadmin.png" alt="logoadmin">
                </div>
            </div>

            <!-- Nav Item - Dashboard -->
            <li style="padding-left: 30px" class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading pl-5 mb-2 mt-3">
                Halaman Utama
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item pl-5">
                <a class="nav-link" href="/slider-setting">
                    <i class=""></i>
                    <span>Slider</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -10px" class="nav-item pl-5">
                <a class="nav-link" href="/layanan-setting">
                    <i class=""></i>
                    <span>Layanan</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -10px" class="nav-item pl-5">
                <a class="nav-link" href="/tentang-setting">
                    <i class=""></i>
                    <span>Tentang</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -10px" class="nav-item pl-5">
                <a class="nav-link" href="/profil-aplikasi-setting">
                    <i class=""></i>
                    <span>Profil Aplikasi</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading pl-5 mb-2 mt-4">
                Product
            </div>

            <!-- Nav Item - Dashboard -->
            <li style="padding-left: 30px" class="nav-item">
                <a class="nav-link {{ ($title === "Geon Edit") ? 'active' : '' }}" href="/pulsa-retail-setting">
                    <i class=""><img src="/images/pulsaretail.png" alt="pulsaretail"></i>
                    <span>Pulsa Retail</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -5x; padding-left: 30px" class="nav-item">
                <a class="nav-link" href="/pulsa-h2h-setting">
                    <i class=""><img src="/images/pulsah2h.png" alt="pulsah2h"></i>
                    <span>Pulsa House to House</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -5px; padding-left: 30px" class="nav-item">
                <a class="nav-link" href="/format-setting">
                    <i class=""><img src="/images/pulsah2h.png" alt="formattransaksi"></i>
                    <span>Format Transaksi</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading pl-5 mb-2 mt-4">
                Service
            </div>

            <!-- Nav Item - Dashboard -->
            <li style="padding-left: 30px" class="nav-item">
                <a class="nav-link" href="/komplain">
                    <i class=""><img src="/images/komplain-icon.png" alt="komplainicon"></i>
                    <span>Komplain</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -10px; padding-left: 30px" class="nav-item">
                <a class="nav-link" href="/customer-service-setting">
                    <i class=""><img src="/images/cs-admin.png" alt="csadmin"></i>
                    <span>Customer Service</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: 20px; padding-left: 30px" class="nav-item">
                <a class="nav-link" href="/footer-setting">
                    <i class=""><img src="/images/setting.png" alt="setting"></i>
                    <span>Footer</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img style="margin-top: -10px" class="img-profile rounded-circle" src="/images/undraw_profile.svg">
                                <span style="margin-top: -25px" class="ml-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <p style="margin-top: 30px; margin-left: -39px;">
                                    <span class="d-none d-lg-inline text-black-600 small">Administrator</span>
                                </p>
                            </a>
                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div>
                        <h1 style="color: black" class="h3 mb-4">Edit Geon</h1>
                        <p style="text-align: right; margin-top: -55px; margin-right: 20px"><span id="tanggalwaktu"></span></p>
                        <script>
                        var tw = new Date();
                        if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                        else (a=tw.getTime());
                        tw.setTime(a);
                        var tahun= tw.getFullYear ();
                        var bulan= tw.getMonth ();
                        var tanggal= tw.getDate ();
                        var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                        document.getElementById("tanggalwaktu").innerHTML =" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
                        </script>
                    </div>

                    <a href="/geon-voucher-games">
                        <img src="/images/back.png" alt="back">
                    </a>

                    <div class="row">
                        <!-- Card Example -->
                        <form method="POST" action="{{route('geon-voucher-games.update', $geon->id )}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div style="margin-top: 20px" class="card-body ml-5">
                                <div style="column-width: 650px" class="form-group mb-4">
                                    <label for="kode">Kode</label>
                                    <input type="text" class="form-control" name="kode" value="{{$geon->kode}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="operator">Operator</label>
                                    <input type="text" class="form-control" name="operator" value="{{$geon->operator}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" name="harga" value="{{$geon->harga}}">
                                </div>
                                <button style="margin-left: 550px" type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../../js/sb-admin-2.min.js"></script>    

</body>

</html>