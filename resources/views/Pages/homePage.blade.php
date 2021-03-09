
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!--Stylesheet font-awesome and bootstrapCDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.jkmetronews.xyz/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://www.jkmetronews.xyz/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.4/xlsx.core.min.js"></script>
    <script src="https://www.jkmetronews.xyz/js/jhxlsx.js"></script>
    <script src="https://www.jkmetronews.xyz/js/FileSaver.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include("Pages.header")
    @include("Pages.sidebar")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DashBoard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">DashBoard</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <!-- Small Box (Stat card) -->
                <h5 class="mb-2 mt-4">Details</h5>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">


                                <p>Add Article</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <a href="" class="small-box-footer">
                                Add Now <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>


                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    @include("Pages.footer")
</div>
<!-- Bootstrap -->
<script src="https://www.jkmetronews.xyz/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="https://www.jkmetronews.xyz/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="https://www.jkmetronews.xyz/plugins/chart.js/Chart.min.js"></script>
<script src="https://www.jkmetronews.xyz/dist/js/demo.js"></script>

<script src="https://www.jkmetronews.xyz/dist/js/pages/homeadmin.js"></script>
</body>
</html>
