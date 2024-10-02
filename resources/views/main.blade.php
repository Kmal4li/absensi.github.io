<!doctype html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>@yield('title')- Aplikasi Penjualan</title>
<meta name="description" content="Aplikasi Sistem informasi Penjualan barang">
<meta content="" name="keywords">
<!-- Favicons -->
<link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
<!-- Google Fonts -->

<link href="https://fonts.gstatic.com" rel="preconnect">
<link
href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito
:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
rel="stylesheet">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-
select@1.13.9/dist/css/bootstrap-select.min.css">

<!-- Vendor CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.snow.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.bubble.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/simple-datatables/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
{{-- untuk select search --}}

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-
awesome/4.7.0/css/font-awesome.min.css"> --}}

{{-- <link rel="stylesheet" href="../css/bootstrap-select.css"> --}}
{{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.css') }}"> --}}
<!-- Template Main CSS File -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
<div class="d-flex align-items-center justify-content-between">
<a href="index.html" class="logo d-flex align-items-center">
<img src="assets/img/logox.png" alt="">
<span class="d-none d-lg-block">Control Panel</span>
</a>
<i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
<ul class="d-flex align-items-center">
<li class="nav-item dropdown pe-3">

<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-
toggle="dropdown">

<img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
<span class="d-none d-md-block ps-2">M Akmal Ali</span>
</a><!-- End Profile Iamge Icon -->
<li>
<a class="dropdown-item d-flex align-items-center" href="./control/mlogin.php?op=out">
<i class="bi bi-box-arrow-right"></i>
<span>Sign Out</span>
</a>
</li>
</li><!-- End Profile Nav -->
</ul>
</nav><!-- End Icons Navigation -->
</header><!-- End Header -->

<!-- ======= Menu Kiri ======= -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <!-- Dashboard Link -->
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('absensi') }}">
                <i class="bi bi-menu-button-wide"></i><span>Absensi Pegawai</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pegawai') }}">
                <i class="bi bi-menu-button-wide"></i><span>Data Pegawai</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pegawai') }}">
                <i class="bi bi-menu-button-wide"></i><span>Laporan Kehadiran</span>
            </a>
        </li><!-- End Pegawai Nav -->

    </ul>
</aside><!-- End Sidebar -->

</li><!-- End Charts Nav -->
</aside><!-- End Sidebar-->
@yield('breadcrumbs')
<!-- ======= Footer ======= -->

<footer id="footer" class="footer">
<div class="copyright">
&copy; Copyright <strong><span>2024</span></strong>. All Rights Reserved
</div>
<div class="credits"> Designed by <a href="">M Akmal Ali</a>
</div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-
arrow-up-short"></i></a>

<!-- Vendor JS Files -->
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
crossorigin="anonymous"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-
select.min.js"></script> --}}

<script>
$('#alert').removeClass('d-none');
setTimeout(() => {
$('.alert').alert('close');
}, 5000);
</script>

<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>