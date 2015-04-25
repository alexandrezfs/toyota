<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin STAMCAR</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons -->
    <link href="//code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{asset('css/adminLTE.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{asset('css/skins/skin-blue.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/Admin.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/jquery.datetimepicker.css')}}" type="text/css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.1.3 -->
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/Admin.js')}}" type="text/javascript"></script>

    <script src="{{asset('bower_components/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience -->

    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.datetimepicker.js')}}"></script>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|---------------------------------------------------------|

-->
<body class="skin-blue">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('/admin/home')  }}" class="logo"><b>Admin</b>STAMCAR</a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Menu</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="{{ url("/")  }}">
                            <i class="fa fa-desktop"></i> Voir le site
                        </a>
                    </li>
                    @if(Session::has('username'))
                        <li class="dropdown messages-menu">
                            <a href="{{ url("/admin/logout") }}">
                                <i class="fa fa-sign-out"></i> Déconnexion
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left info">
                    <p>Panneau d'administration STAMCAR</p>
                </div>
            </div>

            <!-- search form (Optional)
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            /.search form -->

            <!-- Sidebar Menu -->
            @if(Session::has('username'))
                <ul class="sidebar-menu">
                    <li class="header">Véhicules</li>
                    <li class="treeview">
                    <li><a href="/admin/veh/add"><i class="fa fa-car"></i> Ajouter un véhicule</a></li>
                    <li><a href="/admin/veh/list"><i class="fa fa-eye"></i> Voir les véhicules</a></li>
                    </li>
                    <li class="header">Magasin</li>
                    <li class="treeview">
                    <li><a href="/admin/produits/add"><i class="fa fa-dropbox"></i> Ajouter un produit</a></li>
                    <li><a href="/admin/produits/list"><i class="fa fa-eye"></i> Voir les produits</a></li>
                    </li>
                    <li class="header">News</li>
                    <li class="treeview">
                    <li><a href="/admin/news/add"><i class="fa fa-newspaper-o"></i> Ajouter une news</a></li>
                    <li><a href="/admin/news/list"><i class="fa fa-eye"></i> Voir les news</a></li>
                    </li>
                    <li class="header">Forfaits</li>
                    <li class="treeview">
                    <li><a href="/admin/forfaits/add"><i class="fa fa-credit-card"></i> Ajouter un forfait</a></li>
                    <li><a href="/admin/forfaits/list"><i class="fa fa-eye"></i> Voir les forfaits</a></li>
                    </li>
                    <li class="header">Catégories de forfaits</li>
                    <li class="treeview">
                    <li><a href="/admin/forfaits/categories/add"><i class="fa fa-list-ol"></i> Ajouter une catégorie</a>
                    </li>
                    <li><a href="/admin/forfaits/categories/list"><i class="fa fa-eye"></i> Voir les catégories</a></li>
                    </li>
                    <li class="header">Analytics</li>
                    <li class="treeview">
                    <li><a href="/admin/analytics"><i class="fa fa-area-chart"></i> Analytics</a></li>
                    </li>
                </ul>
                @endif
                <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bienvenue
                <small>Panneau d'administration STAMCAR</small>
            </h1>
            <!--
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
             -->
        </section>

        <!-- Main content -->
        <section class="content">

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">STAMCAR</a>.</strong> All rights reserved.
    </footer>

</div>

</body>
</html>