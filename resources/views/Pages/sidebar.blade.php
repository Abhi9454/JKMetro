<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.jkmetro.com" class="brand-link">
            <h3 class="brand-text font-weight-light text-center">Welcome</h3>
        </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{Session::get("profile_image")}}"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Session::get("name")}}</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->

        @if(strcmp(Session::get("value"),"admin")==0)
        <div class="user-panel mt-3 text-center pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{Session::get("email")}}</a>
            </div>
        </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('HOME.USERDASHBOARD')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

@endif
<!-- /.control-sidebar -->

<script>
$(document).ready(function(){
    var _url = document.URL;
    $("a[href='" + _url + "']").addClass('highlighted');
});
</script>
