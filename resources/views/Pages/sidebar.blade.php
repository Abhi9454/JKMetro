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
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{Session::get("profile_image")}}"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Session::get("name")}}</a>
            </div>
        </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('HOME.SUPERUSER')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('STUDENT.LIST')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                All Students List
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('STUDENT.DETAIL.LIST')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Students Detail
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('TEACHER.LIST')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                            All Teacher List
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('MANAGER.LIST')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                            All Manager List
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('REGISTER')}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Add Teacher/Manager
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('COURSE.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                            All Courses
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('SEARCH.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-search"></i>
                            <p>
                               Advanced Search
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('NOTIFICATION.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                               Notification
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('COURSE.ADD')}}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Add Course
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('DOUBT.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                View Doubts
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('UPLOADHANDOUT.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Handouts
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="{{route('UPLOADFREEVIDEO.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                               Add Free Video
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('UPLOADINTROVIDEO.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                               Add Intro Video
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('UPLOADCOURSEVIDEO.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                               Add Course Video
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('UPLOAD.VIEW')}}" class="nav-link">
                            <i class="nav-icon fa fa-upload"></i>
                            <p>
                               Upload Video
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('EDITVIDEOCOURSE.VIEW')}}" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>
                               Edit Videos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('MYUPLOAD.VIEW')}}" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>
                               View Uploads
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('DOUBT.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                               Other Uploads
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Articles</li>
                    <li class="nav-item">
                        <a href="{{route('ARTICLECATEGORYLIST.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Add Category
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('UPLOADARTICLE.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Add Article
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('ARTICLELIST.VIEW')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                List Article
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
