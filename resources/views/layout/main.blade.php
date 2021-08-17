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

        <!-- Include file bootstrap.min.css -->
        <link href="{{url('/sb-admin/dist/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Include library Font Awesome -->
        <link href="{{url('/sb-admin/dist/libraries/fontawesome/css/all.min.css')}}" rel="stylesheet">

        <!-- Include library Datepicker Gijgo -->
        <link href="{{url('/sb-admin/dist/libraries/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

        
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{url('/')}}">Rizal Resi</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="{{url('/')}}"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <div class="sb-sidenav-menu-heading"></div>
                            <!-- <a class="nav-link" href="{{url('/tbdiagnosa')}}">
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
                                Tabel Video</a> -->
                            <a class="nav-link" href="{{url('/pelanggan')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Pelanggan</a>
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

    <!-- Include file jquery.min.js -->
    <script src="{{url('/sb-admin/dist/js/jquery.min.js')}}"></script>

    <!-- Include file boootstrap.min.js -->
    <script src="{{url('/sb-admin/dist/js/bootstrap.min.js')}}"></script>

    <!-- Include library Moment JS -->
    <script src="{{url('/sb-admin/dist/libraries/moment/moment.min.js')}}"></script>

    <!-- Include library Datepicker Gijgo -->
    <script src="{{url('/sb-admin/dist/libraries/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Include file custom.js -->
    <script src="{{url('/sb-admin/dist/js/custom.js')}}"></script>

    <script>
    $(document).ready(function(){
        setDatePicker("#datepicker")
        setDateRangePicker("#startdate", "#enddate")
        setMonthPicker("#monthpicker")
        setYearPicker("#yearpicker")
        setYearRangePicker("#startyear", "#endyear")
    })
    </script>
        
        @yield('chart')

    </body>
</html>
