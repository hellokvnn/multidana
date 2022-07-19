<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Multidana</title>

    {{-- Bootstap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- End Bootsrap --}}

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
                <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading pl-5 mb-2 mt-3">
                Halaman Utama
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item pl-5">
                <a class="nav-link product {{ ($title === "Slider") ? 'active' : '' }}" href="/slider">
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
                <a class="nav-link {{ ($title === "Voucher Games Setting") ? 'active' : '' }}" href="/pulsa-retail-setting">
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
                <a class="nav-link {{ ($title === "Format Setting") ? 'active' : '' }}" href="/format-setting">
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
                    <h1 style="color: black" class="h3 mb-4">Voucher Games</h1>

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

                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="/megaxus-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/megaxus.png" class="card-img-top rounded mx-auto d-block" alt="megaxus" >
                            <div class="card-body">
                            <h4>Megaxus</h4>
                            </div>
                        </div>
                        </a>    
                    </div>

                    <div class="col-2">
                        <a href="/ml-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/ml.png" class="card-img-top rounded mx-auto d-block" alt="ml" >
                            <div class="card-body">
                            <h4>Mobile Legend <br> Bang-Bang</h4>
                            </div>
                        </div>
                         </a>
                    </div>

                    <div class="col-2">
                        <a href="/steam-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/steam.png" class="card-img-top rounded mx-auto d-block" alt="steam" >
                            <div class="card-body">
                            <h4>Voucher <br> Steam Sea</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/garena-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/garena.png" class="card-img-top rounded mx-auto d-block" alt="garena" >
                            <div class="card-body">
                            <h4>Garena</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="/lyto-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/lyto.png" class="card-img-top rounded mx-auto d-block" alt="lyto" >
                            <div class="card-body">
                            <h4>Lyto</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/zynga-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/zynga.png" class="card-img-top rounded mx-auto d-block" alt="zynga" >
                            <div class="card-body">
                            <h4>Zynga</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/digicash-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/digicash.png" class="card-img-top rounded mx-auto d-block" alt="digicash" >
                            <div class="card-body">
                            <h4>Digicash</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/mogplay-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/mogplay.png" class="card-img-top rounded mx-auto d-block" alt="mogplay" >
                            <div class="card-body">
                            <h4>Mogplay</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="/itunes-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/itunes.png" class="card-img-top rounded mx-auto d-block" alt="itunes" >
                            <div class="card-body">
                            <h4>Itunes Gift Card</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/cherry-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/cherry.png" class="card-img-top rounded mx-auto d-block" alt="cherry" >
                            <div class="card-body">
                            <h4>Cherry Credits</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/pts-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/pts.png" class="card-img-top rounded mx-auto d-block" alt="pts" >
                            <div class="card-body">
                            <h4>PTS My Card</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/iah-voucher-games" class="text-decoration-none">
                            <div class="card-3" style="width: 217px; height: 170px">
                                <img src="images/iah.png" class="card-img-top rounded mx-auto d-block" alt="iah" >
                                <div class="card-body">
                                <h4>iCredit IAH <br> Indonesia</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="/playstation-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/playstation.png" class="card-img-top rounded mx-auto d-block" alt="playstation" >
                            <div class="card-body">
                            <h4>Playstation</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/geon-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/geon.png" class="card-img-top rounded mx-auto d-block" alt="geon" >
                            <div class="card-body">
                            <h4>Geon</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/vcoin-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/vcoin.png" class="card-img-top rounded mx-auto d-block" alt="vcoin" >
                            <div class="card-body">
                            <h4>V-Coin VTC</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="/mol-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/mol.png" class="card-img-top rounded mx-auto d-block" alt="mol" >
                            <div class="card-body">
                            <h4>MOL Point</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="/gemscool-voucher-games" class="text-decoration-none">
                        <div class="card-3" style="width: 217px; height: 170px">
                            <img src="images/gemscool.png" class="card-img-top rounded mx-auto d-block" alt="gemscool" >
                            <div class="card-body">
                            <h4>Gemscool</h4>
                            </div>
                        </div>
                        </a>
                    </div>

                </div>
                <br>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>