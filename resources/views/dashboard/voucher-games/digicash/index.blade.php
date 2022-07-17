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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

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
                    <img src="images/logoadmin.png" alt="logoadmin">
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
                <a class="nav-link" href="/slider">
                    <i class=""></i>
                    <span>Slider</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -10px" class="nav-item pl-5">
                <a class="nav-link" href="#">
                    <i class=""></i>
                    <span>Layanan</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -10px" class="nav-item pl-5">
                <a class="nav-link" href="#">
                    <i class=""></i>
                    <span>Tentang</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -10px" class="nav-item pl-5">
                <a class="nav-link" href="#">
                    <i class=""></i>
                    <span>Profil Aplikasi</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading pl-5 mb-2 mt-4">
                Product
            </div>

            <!-- Nav Item - Dashboard -->
            <li style="padding-left: 30px" class="nav-item">
                <a class="nav-link {{ ($title === "Digicash") ? 'active' : '' }}" href="/pulsa-retail-setting">
                    <i class=""><img src="images/pulsaretail.png" alt="pulsaretail"></i>
                    <span>Pulsa Retail</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -5x; padding-left: 30px" class="nav-item">
                <a class="nav-link" href="#">
                    <i class=""><img src="images/pulsah2h.png" alt="pulsah2h"></i>
                    <span>Pulsa House to House</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -5px; padding-left: 30px" class="nav-item">
                <a class="nav-link" href="#">
                    <i class=""><img src="images/pulsah2h.png" alt="formattransaksi"></i>
                    <span>Format Transaksi</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading pl-5 mb-2 mt-4">
                Service
            </div>

            <!-- Nav Item - Dashboard -->
            <li style="padding-left: 30px" class="nav-item">
                <a class="nav-link" href="#">
                    <i class=""><img src="images/komplain-icon.png" alt="komplainicon"></i>
                    <span>Komplain</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: -10px; padding-left: 30px" class="nav-item">
                <a class="nav-link" href="#">
                    <i class=""><img src="images/cs-admin.png" alt="csadmin"></i>
                    <span>Customer Service</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li style="margin-top: 20px; padding-left: 30px" class="nav-item">
                <a class="nav-link" href="#">
                    <i class=""><img src="images/setting.png" alt="setting"></i>
                    <span>Setting</span></a>
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
                                <img style="margin-top: -10px" class="img-profile rounded-circle" src="images/undraw_profile.svg">
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
                        <h1 style="color: black" class="h3 mb-4">Digicash</h1>
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
        
                    <a href="/voucher-games-setting">
                        <img src="/images/back.png" alt="back">
                    </a>

                    <a href="{{route('digicash-voucher-games.create')}}" class="text-decoration-none">
                    <button type="button" style="border-color: #A00043; color:#A00043; margin-top: 20px;" class="btn d-block">
                        <img src="/images/add.png" alt="add"> 
                            Add Product
                    </button>
                    </a>

                    <br>

                    <div class="container">
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('status')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>

                    <div class="row">
                        <!-- Card Example -->
                        <div class="card-body">
                            <table class="table text-center" id="dataTable" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Operator</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead >
                                <tbody>
                                    @foreach ($digicashes as $digicash)
                                     <tr>
                                        <td> {{$digicash->kode}} </td>
                                        <td> {{$digicash->operator}} </td>
                                        <td> {{$digicash->harga}} </td>
                                        <td>
                                            <a href="{{route('digicash-voucher-games.edit', $digicash->id )}}" class="text-decoration-none">
                                                <img src="/images/edit.png" alt="edit">
                                            </a>
                                        </td>
                                      </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>    

</body>

</html>