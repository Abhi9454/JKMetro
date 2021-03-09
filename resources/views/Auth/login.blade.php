<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JK Metro Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!--Stylesheet font-awesome and bootstrapCDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
<div class="container-fluid bg-dark p-2">
    <h3 class="display-5 text-center text-white">Welcome to JK Metro</h3>
</div>
<div class="container col-sm-5">
    <div class="card  card-login mx-auto mt-5">
        <div class="card-header">Login to continue</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter username</label>
                    <input class="form-control " name="Email" ng-model="username" type="text" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" name="Password" ng-model="password" type="password" required>
                </div>
                <button type="submit" class="btn btn-danger btn-block text-light mt-4">Login</button>
            </form>
        </div>
    </div>
</div>
<div class="container text-center mt-5">
    <div class="card bg-light border-dark mx-auto">
        <div class="card-body">
            <h4 class="text-center">Download Our Official App</h4>
            <a href="#" class="text-dark"><i class="fab fa-android fa-3x"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-apple fa-3x"></i></a>
        </div>
    </div>
</div>
</div>

</body>
