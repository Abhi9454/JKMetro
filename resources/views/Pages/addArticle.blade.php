<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Article</title>
    <!--     <link rel="icon" href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type="image/icon type">-->

    <!--Stylesheet font-awesome and bootstrapCDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.jkmetronews.xyz/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
          crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://www.jkmetronews.xyz/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script src="https://www.jkmetronews.xyz/ckeditor/ckeditor.js"></script>
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
                        <h1>Add Article</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Add Article</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Enter Details ( Required <sup><i
                                            class="fa fa-asterisk text-danger" style="font-size: 0.5rem"></i></sup>)
                                </h3>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif


                        @if($Success !=null)
                                <div class="alert alert-success m-3">
                                    <p>Record Added Successfully.</p>
                                </div>
                        @endif
                        <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form"  method="POST"  action="{{route('HOME.SUBMITADDARTICLE')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fathernamebox">Select Category<sup><i
                                                                class="fa fa-asterisk text-danger"
                                                                style="font-size: 0.5rem"></i></sup></label>
                                                    <select class="form-control" name="article_category_id">
                                                    @if($categorylist != null)
                                                    @for($x=0; $x<sizeof($categorylist); $x++)
                                                            <option value="{{json_decode($categorylist)[$x]->category_id}}">{{json_decode($categorylist)[$x]->category_name}}</option>
                                                        @endfor
                                                    @endif
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fathernamebox">Article Heading<sup><i
                                                            class="fa fa-asterisk text-danger"
                                                            style="font-size: 0.5rem"></i></sup></label>
                                                <input type="text" class="form-control" name="article_heading"
                                                        placeholder="Enter Article heading" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="exampleInputFile">Upload Article Image<sup><i class="fa fa-asterisk text-danger"
                                                                           style="font-size: 0.5rem"></i></sup></label>
                                                    <div class="custom-file">
                                                        <input type="file" name="article_image" class="custom-file-input"  id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Article Image</label>
                                                    </div>
                                             </div>
                                        </div>
                                        <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="fathernamebox">Enter Article<sup><i
                                                                class="fa fa-asterisk text-danger"
                                                                style="font-size: 0.5rem"></i></sup></label>
                                                                <textarea name="articleString"></textarea>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include("Pages.footer")
</div>
</div>
<script>
    CKEDITOR.replace( 'articleString' );
</script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script src="https://www.jkmetronews.xyz/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://www.jkmetronews.xyz/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="https://www.jkmetronews.xyz/dist/js/adminlte.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

</body>
</html>
