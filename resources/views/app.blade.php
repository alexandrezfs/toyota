<!doctype html>
<!--[if IE 7 ]>
<html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    @yield('seo')

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}'"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800"
          media="screen"/>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('css/jquery.bxslider.css')}}" type="text/css" media="screen"/>
    <link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.selectbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/mobile.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}" media="screen"/>
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/ts.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key&amp;sensor=false"></script>

    <!-- Twitter Feed Scripts
         Uncomment to activate

    <script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/twitter/twitter_feed.js"></script> -->

    <style>
        body {
            margin-top: 0px;
        }
    </style>

</head>

<body>
<!--Header Start-->
<header data-spy="affix" data-offset-top="1" class="clearfix">
    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left_bar">
                    <ul class="left-none">
                        <!--<li><a href="#"><i class="fa fa-user"></i> Se connecter</a></li>
                        <li><a href="#"><i class="fa fa-globe"></i> S'inscrire</a></li>-->
                        <li><i class="fa fa-search"></i>
                            <input type="search" placeholder="Rechercher..." class="search_box" id="search_box">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <ul class="right-none pull-right company_info">
                        <li><a href="tel:0478316165"><i class="fa fa-phone"></i> 04 78 31 61 65</a></li>
                        <li class="address"><a href="{{url('/contact')}}"><i class="fa fa-map-marker"></i> 16 Rue Paul
                                Cezanne,
                                69330 Meyzieu</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toolbar_shadow"></div>
    </section>
    <div class="bottom-header">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1"><span
                                    class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <a class="navbar-brand" href="{{url('/')}}">
                            <span class="logo">
                                <span class="primary_text">STAMCAR</span>
                                <span class="secondary_text">TOYOTA LYON EST</span>
                            </span>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class="active"><a href="{{url('/')}}" title="Page d'accueil">Accueil</a></li>
                            <li class="dropdown"><a href="#" title="Nos véhicules" class="dropdown-toggle"
                                                    data-toggle="dropdown">Véhicules <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="{{url('/gamme-toyota')}}" title="Gamme Toyota">
                                            Gamme Toyota
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{url('/vehicules-occasion')}}" title="Véhicules Occasion">
                                            Véhicules Occasion
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{url('/sans-permis')}}" title="Gamme sans permis">
                                            Gamme sans permis
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/actu')  }}" title="Actualité">L'actu</a></li>
                            <li><a href="{{ url('/forfaits')  }}" title="Forfaits">Forfaits</a></li>
                            <li><a href="{{ url('/magasin')  }}" title="Le magasin">Magasin</a></li>
                            <li><a href="{{ url('/infos-pratiques')  }}" title="infos-pratiques">Nous rejoindre</a></li>
                            <li><a href="{{ url('/contact')  }}" title="Contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <div class="header_shadow"></div>
    </div>
</header>
<!--Header End-->

<div class="clearfix"></div>

@yield('content')

<!--Footer Start-->
<footer class="design_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-left-none md-padding-left-none sm-padding-left-15 xs-padding-left-15">
                <h4>Newsletter</h4>

                <p>En vous inscrivant à notre newsletter, soyez au courant des dernières offres de Stamcar.</p>

                <form method="POST" action="{{url('/newsletter/signup')}}" class="form_contact">
                    <input type="email" value="" name="email" placeholder="Email Address" style="margin-right: 3px; margin-top: 2px; width: 150px;" required>
                    <input type="submit" value="S'inscrire" class="md-button">
                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4>L'actualité</h4>

                <div class="latest-tweet">
                    @foreach($news as $new)
                        <div>
                            <i class="fa fa-rss"></i>
                            <p><a href="{{url('/article/' . $new['slug'])}}" style="text-decoration: none; color: #ffffff;">{{ $new['titre'] }}</a></p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-right-none md-padding-right-none sm-padding-right-15 xs-padding-right-15">
                <h4>Nous contacter</h4>

                <div class="footer-contact">
                    <ul>
                        <li><i class="fa fa-map-marker"></i> <strong>Addresse: 16 Rue Paul Cezanne, 69330 Meyzieu
                                derrière le centre Leclerc.</strong>
                        </li>
                        <li><i class="fa fa-phone"></i> <strong>Téléphone:</strong><a href="tel:0478316165">04 78 31 61 65</a></li>
                        <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong><a href="mailto:stamcar.toyota@neuf.fr">stamcar.toyota@neuf.fr</a></li>
                    </ul>

                    <i class="fa fa-location-arrow back_icon"></i>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="clearfix"></div>
<section class="copyright-wrap padding-bottom-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="logo-footer margin-bottom-20 md-margin-bottom-20 sm-margin-bottom-10 xs-margin-bottom-20"><a
                            href="#">
                        <h1>Stamcar</h1></a>
                </div>
                <p>Copyright &copy; 2015 STAMCAR.</p>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <!--
                <ul class="social margin-bottom-25 md-margin-bottom-25 sm-margin-bottom-20 xs-margin-bottom-20 xs-padding-top-10 clearfix">
                    <li><a class="sc-1" href="#"></a></li>
                    <li><a class="sc-2" href="#"></a></li>
                    <li><a class="sc-3" href="#"></a></li>
                    <li><a class="sc-4" href="#"></a></li>
                    <li><a class="sc-5" href="#"></a></li>
                    <li><a class="sc-6" href="#"></a></li>
                    <li><a class="sc-7" href="#"></a></li>
                    <li><a class="sc-8" href="#"></a></li>
                    <li><a class="sc-9" href="#"></a></li>
                    <li><a class="sc-10" href="#"></a></li>-->
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="back_to_top"><img src="{{asset('images/arrow-up.png')}}" alt="scroll up"/></div>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/retina.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.inview.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/modernizr.custom.js')}}"></script>
<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/jquery.bxslider.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.selectbox-0.2.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/jquery.mousewheel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.js')}}"></script>
<script src="{{asset('js/jquery.mixitup.min.js')}}" type="text/javascript"></script>

<script>
    $("#search_box").keypress(function(e) {
        if(e.which == 13) {
            document.location.href = "/search/" + $("#search_box").val();
        }
    });
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-33101201-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>
</html>
