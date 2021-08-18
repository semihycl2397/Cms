<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Admin's Page</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/matrix-style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/matrix-media.css')}}"/>
    <link rel="stylesheet"  href="{{asset('/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery.gritter.css')}}"/>
    @yield('css')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard"></a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
                                                      data-target="#profile-messages" class="dropdown-toggle"><i
                    class="icon icon-user"></i> <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="login"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
        </li>
        <li class=""><a href="{{route('siteconfig.index')}}"><i class="icon icon-pencil"></i>
                <span> Settings </span></a></li>
        <li class=""><a title="" href="login"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
        </li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-search-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-search-->
<!--sidebar-menu-->
<div id="sidebar"><a href="/admin" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="/admin"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i>Menus <span></span> </a>
            <ul>
                <li><a href="{{route('Menus.index')}}">Menu List</a></li>
                <li><a href="{{route('Menus.create')}}">Menu Add</a></li>
            </ul>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i>Documents <span></span> </a>
            <ul>
                <li><a href="{{route('Documents.index')}}">Document List</a></li>
                <li><a href="{{route('Documents.create')}}">Document Add</a></li>
            </ul>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i>Images <span></span> </a>
            <ul>
                <li><a href="{{route('Images.index')}}">Image List</a></li>
                <li><a href="{{route('Images.create')}}">Image Add</a></li>
            </ul>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i>Videos <span></span> </a>
            <ul>
                <li><a href="{{route('Videos.index')}}">Video List</a></li>
                <li><a href="{{route('Videos.create')}}">Video Add</a></li>
            </ul>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i>News <span></span> </a>
            <ul>
                <li><a href="{{route('News.index')}}">New List</a></li>
                <li><a href="{{route('News.create')}}">New Add</a></li>
            </ul>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i>Announcements <span></span> </a>
            <ul>
                <li><a href="{{route('Announcements.index')}}">Announcement List</a></li>
                <li><a href="{{route('Announcements.create')}}">Announcement Add</a></li>
            </ul>
        <li class="submenu"><a href=""><i class="icon icon-th-list"></i>Communications <span></span> </a>
            <ul>
                <li><a href="{{route('Communication.index')}}">Message List</a></li>
            </ul>
        <li><a href="{{route('siteconfig.index')}}"><i class="icon icon-pencil"></i> <span>Site Settings</span></a></li>
    </ul>
</div>



<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>

    </div>
    <!--End-breadcrumbs-->
@yield('content')

</div>

<script src="{{asset('js/excanvas.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('js/jquery.peity.min.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/matrix.js')}}"></script>
<script src="{{asset('js/matrix.dashboard.js')}}"></script>
<script src="{{asset('js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('js/matrix.interface.js')}}"></script>
<script src="{{asset('js/matrix.chat.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/matrix.form_validation.js')}}"></script>
<script src="{{asset('js/jquery.wizard.js')}}"></script>
<script src="{{asset('js/jquery.uniform.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/matrix.popover.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/matrix.tables.js')}}"></script>
@yield('js')
</body>
</html>
