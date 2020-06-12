<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link href="{{url('/sb-admin/dist/css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{url('/')}}">Sistem Pakar</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="{{url('/')}}"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <div class="sb-sidenav-menu-heading">Pilih saja tabelnya!!!</div>
                            <a class="nav-link" href="{{url('/tbdiagnosa')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabel Diagnosa</a>
                            <a class="nav-link" href="{{url('/tbgejala')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabel Gejala</a>
                            <a class="nav-link" href="{{url('/tbkategori')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabel Kategori</a>
                            <a class="nav-link" href="{{url('/tbkerusakan')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabel Kakerusakan</a>
                            <a class="nav-link" href="{{url('/tbsolusi')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabel Solusi</a>
                            <a class="nav-link" href="{{url('/tbvideo')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabel Video</a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('/sb-admin/dist/js/scripts.js')}}"></script>
        
        <script src="{{url('/sb-admin/dist/js/highcharts.js')}}"></script>
        @yield('chart')

    </body>
</html>
