
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Article's Category</title>
    <!--     <link rel="icon" href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type="image/icon type">-->

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

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include("Pages.header")
    @include("Pages.sidebar")
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Category List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Category List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <table id="Resulttable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($categorylist != null)
                                            @for($x=0; $x<sizeof($categorylist); $x++)
                                                <tr>
                                                    <td>{{$x+1}}</td>
                                                    <td>{{json_decode($categorylist)[$x]->article_category_name}}</td>
                                                </tr>
                                            @endfor
                                        @endif
                                        </tbody>
                                    </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <!-- Right column -->
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Article Category( Required <sup><i
                                            class="fa fa-asterisk text-danger" style="font-size: 0.5rem"></i></sup>)
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="" method="post">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Idnamebox">Enter Category Name<sup><i
                                                            class="fa fa-asterisk text-danger"
                                                            style="font-size: 0.5rem"></i></sup></label>
                                                <input type="text" class="form-control" name="article_category_name"
                                                       id="Idbox" placeholder="Enter Category Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div>

                </div>
            </div>
        </section>
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

<!-- DataTables -->
<script src="https://www.jkmetronews.xyz/plugins/datatables/jquery.dataTables.js"></script>
<script src="https://www.jkmetronews.xyz/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
    $(function () {
        $('#Resulttable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
</body>
</html>
