@extends('app')

@section('seo')
    <title>STAMCAR TOYOTA LYON EST - Garage auto sur Lyon</title>
    <meta name="description" content="Véhicules neufs et d'occasion, réparateur véhicules agréé Toyota et JDM à LYON. Réparations et entretiens toutes marques.">
    <link rel="canonical" href="http://stamcar.fr" />
    <meta name="keywords" content="toyota lyon, toyota meyzieu, atelier toyota lyon, lyon"/>
@endsection

@section('content')
    <section class="banner-wrap">
        <div class="banner">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('/images/slides/slide1.jpg')}}"
                                 alt="slide toyota lyon" data-bgfit="cover" data-bgposition="center center"
                                 data-bgrepeat="no-repeat">

                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center domainate customin customout start"
                                 data-x="0"
                                 data-hoffset="0"
                                 data-y="214"

                                 data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">ROULEZ
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption internet fade"
                                 data-x="0"
                                 data-y="282"
                                 data-speed="500"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6; letter-spacing: -3px;">SANS SOUCIS
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption attract sfl"
                                 data-x="0"
                                 data-y="369"
                                 data-speed="500"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6; top: 371px; ">Garanties, forfaits entretien
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption more skewfromright "
                                 data-x="100"
                                 data-y="425"
                                 data-speed="800"
                                 data-start="1900"
                                 data-easing="Elastic.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6; left:186px;">près
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption qualified skewfromright"
                                 data-x="0"
                                 data-y="476"
                                 data-speed="800"
                                 data-start="2600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6">de Lyon et de ses environs
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('/images/slides/slide2.jpg')}}"
                                 alt="slide toyota lyon" data-bgfit="cover" data-bgposition="center center"
                                 data-bgrepeat="no-repeat">

                            <!-- LAYERS -->
                            <div class="tp-caption customin customout start green"
                                 data-x="40"
                                 data-hoffset="0"
                                 data-y="510"

                                 data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">Faire entretenir son auto
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption big_white fade"
                                 data-x="40"
                                 data-y="560"
                                 data-speed="500"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6;">ZEN.
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('/images/slides/slide3.jpg')}}"
                                 alt="slide toyota lyon" data-bgfit="cover" data-bgposition="center center"
                                 data-bgrepeat="no-repeat">

                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center invest start"
                                 data-x="500"
                                 data-hoffset="0"
                                 data-y="160"

                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInQuart"
                                 data-endspeed="300">Toute la gamme Toyota chez Stamcar
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption move mediumlarge_light_white_center fade"
                                 data-x="215"
                                 data-y="230"
                                 data-speed="500"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6; letter-spacing: -3px;">FAITES
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption light_brown mediumlarge_light_white_center sfl"
                                 data-x="365"
                                 data-y="230"
                                 data-speed="500"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6; top: 371px; ">DISPARAITRE
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption dark_brown mediumlarge_light_white_center skewfromright "
                                 data-x="620"
                                 data-y="230"
                                 data-speed="800"
                                 data-start="1900"
                                 data-easing="Elastic.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6; left:186px;">LES PANNES
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption faster mediumlarge_light_white_center skewfromright"
                                 data-x="850"
                                 data-y="230"
                                 data-speed="800"
                                 data-start="2600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6">RAPIDEMENT
                            </div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption brown_line skewfromright"
                                 data-x="715"
                                 data-y="261"
                                 data-speed="800"
                                 data-start="2600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><img
                                        src="http://demo.themesuite.com/automotive/images/brown_line.jpg"
                                        alt="underline"></div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('/images/slides/slide4.jpg')}}"
                                 alt="slide toyota lyon" data-bgfit="cover" data-bgposition="center center"
                                 data-bgrepeat="no-repeat">

                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center domainate customin customout start"
                                 data-x="0"
                                 data-hoffset="0"
                                 data-y="199"

                                 data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">PARTEZ
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption thin_dark_blue fade"
                                 data-x="260"
                                 data-y="210"
                                 data-speed="500"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6; letter-spacing: 0;">EN VACANCES
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption thinner_white sfl"
                                 data-x="05"
                                 data-y="270"
                                 data-speed="500"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6; top: 371px; ">l'esprit tranquille
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">

                var revapi;

                jQuery(document).ready(function () {

                    revapi = jQuery('.tp-banner').revolution(
                            {
                                delay: 8000,
                                startwidth: 1170,
                                startheight: 645,
                                hideThumbs: 10,
                                fullWidth: "off",
                                fullScreen: "off",
                                fullScreenOffsetContainer: "",
                                hideTimerBar: "on",
                                navigationType: "none",
                                stopAtSlide: 1

                            });

                });	//ready

            </script>

            <!-- END REVOLUTION SLIDER -->

            <!-- Content End -->

        </div>
    </section>
    <section class="message-wrap">
        <div class="container">
            <div class="row">
                <h2 class="col-lg-9 col-md-8 col-sm-12 col-xs-12 xs-padding-left-15">Votre garage toutes marques à Lyon
                    accessible <span class="alternate-font">facilement</span></h2>

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 xs-padding-right-15">
                    <a href="{{url('/infos-pratiques')}}" class="default-btn pull-right action_button lg-button">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
        <div class="message-shadow"></div>
    </section>
    <!--message-wrap ends-->
    <section class="content">
        <div class="container">
            <div class="inner-page homepage margin-bottom-none">
                <section class="car-block-wrap padding-bottom-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                                <div class="flip margin-bottom-30">
                                    <div class="card">
                                        <div class="face front"><img class="img-responsive"
                                                                     src="{{asset('images/toyota/toyota1.jpg')}}"
                                                                     alt="toyota illustration 1"></div>
                                        <div class="face back">
                                            <div class='hover_title'>Emplacement</div>
                                            <a href="{{ url('/infos-pratiques')  }}"><i
                                                        class="fa fa-link button_icon" title="toyota lyon infos pratiques"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Garage toutes marques bien placé</a></h4>

                                <p class="margin-bottom-none"><strong>TOYOTA STAMCAR à LYON</strong> (Meyzieu), situé en plein coeur d'un large réseau de
                                    transports, tel l'axe national N346 qui relie l'entreprise à Lyon, repose en plein
                                    coeur de nombreux commerces. (Zone d'activité) 16 Rue Paul Cezanne, 69330 Meyzieu
                                    derrière le centre Leclerc et tout près <strong>d'OL Land</strong>.</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                                <div class="flip horizontal margin-bottom-30">
                                    <div class="card">
                                        <div class="face front"><img class="img-responsive"
                                                                     src="{{asset('images/toyota/toyota2.jpg')}}"
                                                                     alt="toyota illustration 2"></div>
                                        <div class="face back">
                                            <div class='hover_title'>Experts Toyota à LYON</div>
                                            <a href="{{ url('/infos-pratiques')  }}"><i
                                                        class="fa fa-link button_icon" title="infos pratiques toyota lyon"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Des experts à votre écoute</a></h4>

                                <p class="margin-bottom-none">Spécialisé dans la réparation de tous les véhicules y
                                    compris les véhicules sans permis, notre savoir faire sur les entretiens des
                                    véhicules de toutes marques et spécialement de la marque Toyota. En partenariat avec
                                    notre fournisseur IGOL, nos produits sont de hautes qualités, pour une longévité de
                                    votre véhicule.</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                                <div class="flip horizontal margin-bottom-30">
                                    <div class="card">
                                        <div class="face front"><img class="img-responsive"
                                                                     src="{{asset('images/toyota/toyota3.jpg')}}"
                                                                     alt="toyota illustration 3"></div>
                                        <div class="face back">
                                            <div class='hover_title'>Horaires</div>
                                            <a href="{{ url('/infos-pratiques')  }}"><i
                                                        class="fa fa-link button_icon" title="infos pratiques toyota lyon"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Des horaires adaptés à vos besoins</a></h4>

                                <p class="margin-bottom-none">Du Lundi au Jeudi 8h-12h 14h-19h sauf Vendredi fermeture à
                                    18h, et Samedi 8h-12h fermeture après midi.
                                    *À l'occasion de certaines journées (jours fériés, vacances d'été), le garage est
                                    susceptible de fermer ses portes.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!--car-block-wrap ends-->
                <div class="row parallax_parent design_2 margin-bottom-40 margin-top-30">
                    <div class="parallax_scroll clearfix" data-velocity="-.5" data-offset="-200"
                         data-image="{{url('images/parallax1.jpg')}}">
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-left-none xs-margin-bottom-none xs-padding-top-30 scroll_effect bounceInLeft">
                                        <span class="align-center"><i class="fa fa-6x fa-bar-chart-o"></i></span>

                                        <h3>Résultats garantis</h3>

                                        <p>Nos experts <strong>TOYOTA à LYON</strong> s'assurent que votre véhicule sort de notre atelier dans
                                            de meilleures conditions.</p>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xs-margin-bottom-none xs-padding-top-30 scroll_effect bounceInLeft"
                                         data-wow-delay=".2s"><span class="align-center"><i
                                                    class="fa fa-6x fa-road"></i></span>

                                        <h3>Economies</h3>

                                        <p>Grâce à la technologie hybride, réduisez votre consommation de carburant.</p>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xs-margin-bottom-none xs-padding-top-30 scroll_effect bounceInRight"
                                         data-wow-delay=".2s"><span class="align-center"><i
                                                    class="fa fa-6x fa-flag-checkered"></i></span>

                                        <h3>Rapidité</h3>

                                        <p>Nos techniciens s'occupent de votre véhicule rapidement.</p>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xs-margin-bottom-none xs-padding-top-30 padding-right-none scroll_effect bounceInRight">
                                        <span class="align-center"><i class="fa fa-6x fa-dashboard"></i></span>

                                        <h3>Tests</h3>

                                        <p>Votre véhicule est testé et approuvé par notre chaîne de travail.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--car-info-wrap ends-->
                <section class="welcome-wrap padding-top-30 sm-horizontal-15">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
                            <h4 class="margin-bottom-25 margin-top-none"><strong>Bienvenue</strong> Sur notre site.</h4>

                            <p>Consultez notre gamme de véhicules <span class="alternate-font">Occasion</span>. Nous
                                disposons également d'un <span class="alternate-font">magasin en ligne</span> sur lequel
                                vous pouvez commander en ligne.</p>

                            <p>Consultez également la <span class="alternate-font">gamme Toyota</span>. ou la gamme
                                <span class="alternate-font">sans permis</span>. <strong>STAMCAR TOYOTA à LYON</strong> est un atelier agréé Toyota.</p>
                        </div>
                        <!--welcome ends-->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-right-none sm-padding-left-none md-padding-left-15 xs-padding-left-none padding-bottom-40 scroll_effect fadeInUp"
                             data-wow-delay='.2s' style="z-index:100">
                            <h4 class="margin-bottom-25 margin-top-none"><strong>Rechercher</strong> dans notre
                                inventaire</h4>

                            <div class="search-form margin-top-20 padding-vertical-20">
                                <form method="POST" action="{{url('/veh/search')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="select-wrapper clearfix">
                                        <div class="col-md-6">
                                            <div class="min-price select-dropdown">
                                                <div class="my-dropdown min-price-dropdown min-dropdown">
                                                    <select name="anneeMin" class="css-dropdowns" tabindex="1">
                                                        <option value="">Année min</option>
                                                        @for($a = date('Y'); $a > date('Y')-50; $a--)
                                                            <option value="{{$a}}">{{$a}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <span class="my-dropdown">à</span>

                                                <div class="my-dropdown max-price-dropdown min-dropdown">
                                                    <select name="anneeMax" class="css-dropdowns" tabindex="1">
                                                        <option value="">Année max</option>
                                                        @for($a = date('Y'); $a > date('Y')-50; $a--)
                                                            <option value="{{$a}}">{{$a}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="min-price select-dropdown">
                                                <div class="my-dropdown min-price-dropdown min-dropdown">
                                                    <select name="prixMin" class="css-dropdowns" tabindex="1">
                                                        <option value="">Prix min</option>
                                                        <option value="0">0</option>
                                                        <option value="10000">&lt; 10 000</option>
                                                        <option value="20000">&lt; 20 000</option>
                                                        <option value="30000">&lt; 30 000</option>
                                                        <option value="40000">&lt; 40 000</option>
                                                        <option value="50000">&lt; 50 000</option>
                                                        <option value="60000">&lt; 60 000</option>
                                                        <option value="70000">&lt; 70 000</option>
                                                        <option value="80000">&lt; 80 000</option>
                                                        <option value="90000">&lt; 90 000</option>
                                                        <option value="100000">&lt; 100 000</option>
                                                        <option value="120000">&lt; 120 000</option>
                                                        <option value="150000">&lt; 150 000</option>
                                                    </select>
                                                </div>
                                                <span class="my-dropdown">à</span>

                                                <div class="my-dropdown max-price-dropdown min-dropdown">
                                                    <select name="prixMax" class="css-dropdowns" tabindex="1">
                                                        <option value="">Prix max</option>
                                                        <option value="0">0</option>
                                                        <option value="10000">&lt; 10 000</option>
                                                        <option value="20000">&lt; 20 000</option>
                                                        <option value="30000">&lt; 30 000</option>
                                                        <option value="40000">&lt; 40 000</option>
                                                        <option value="50000">&lt; 50 000</option>
                                                        <option value="60000">&lt; 60 000</option>
                                                        <option value="70000">&lt; 70 000</option>
                                                        <option value="80000">&lt; 80 000</option>
                                                        <option value="90000">&lt; 90 000</option>
                                                        <option value="100000">&lt; 100 000</option>
                                                        <option value="120000">&lt; 120 000</option>
                                                        <option value="150000">&lt; 150 000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-wrapper clearfix">
                                        <div class="col-md-6">
                                            <div class="my-dropdown make-dropdown">
                                                <select name="marque" class="css-dropdowns" tabindex="1">
                                                    <option value="">Marque</option>
                                                    @foreach($marques as $marque)
                                                        <option value="{{$marque}}">{{$marque}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="min-price select-dropdown">
                                                <div class="my-dropdown min-price-dropdown min-dropdown">
                                                    <select name="kmMin" class="css-dropdowns" tabindex="1">
                                                        <option value="">KM min</option>
                                                        <option value="0">0</option>
                                                        <option value="10000">&lt; 10 000</option>
                                                        <option value="20000">&lt; 20 000</option>
                                                        <option value="30000">&lt; 30 000</option>
                                                        <option value="40000">&lt; 40 000</option>
                                                        <option value="50000">&lt; 50 000</option>
                                                        <option value="60000">&lt; 60 000</option>
                                                        <option value="70000">&lt; 70 000</option>
                                                        <option value="80000">&lt; 80 000</option>
                                                        <option value="90000">&lt; 90 000</option>
                                                        <option value="100000">&lt; 100 000</option>
                                                        <option value="120000">&lt; 120 000</option>
                                                        <option value="150000">&lt; 150 000</option>
                                                    </select>
                                                </div>
                                                <span class="my-dropdown">to</span>

                                                <div class="my-dropdown max-price-dropdown min-dropdown">
                                                    <select name="kmMax" class="css-dropdowns" tabindex="1">
                                                        <option value="">KM max</option>
                                                        <option value="0">0</option>
                                                        <option value="10000">&lt; 10 000</option>
                                                        <option value="20000">&lt; 20 000</option>
                                                        <option value="30000">&lt; 30 000</option>
                                                        <option value="40000">&lt; 40 000</option>
                                                        <option value="50000">&lt; 50 000</option>
                                                        <option value="60000">&lt; 60 000</option>
                                                        <option value="70000">&lt; 70 000</option>
                                                        <option value="80000">&lt; 80 000</option>
                                                        <option value="90000">&lt; 90 000</option>
                                                        <option value="100000">&lt; 100 000</option>
                                                        <option value="120000">&lt; 120 000</option>
                                                        <option value="150000">&lt; 150 000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-wrapper clearfix">
                                        <div class="form-element">
                                            <input type="submit" value="Trouver mon nouveau véhicule"
                                                   class="find_new_vehicle pull-right md-button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--invetory ends-->
                    </div>

                    <div class="recent-vehicles-wrap margin-top-30 sm-padding-left-none padding-bottom-40">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 recent-vehicles padding-left-none">
                                <h5 class="margin-top-none">Gamme Toyota</h5>

                                <p>Visitez toute la séléction de véhicules Toyota.</p>

                                <div class="arrow3 clearfix margin-top-15 xs-margin-bottom-25" id="slideControls3"><span
                                            class="prev-btn"></span><span class="next-btn"></span></div>
                            </div>
                            <div class="col-md-10 col-sm-8 padding-right-none xs-padding-left-none">
                                <div class="carasouel-slider3">
                                    @foreach($cars as $car)
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"><a href="{{url('/vehicule/' . $car['slug'])}}" title="{{$car['titre']}}"><span
                                                                class="align-center"><i
                                                                    class="fa fa-3x fa-plus-square-o"></i></span></a>
                                                    @if(count($car['images']) > 0)
                                                        <img src="{{$car['images'][0]['uri']}}" alt=""
                                                             class="img-responsive" alt="{{$car['titre']}}"></div>
                                                    @else
                                                        <img src="http://placehold.it/350x200" alt=""
                                                             class="img-responsive"></div>
                                                    @endif
                                            <div class="car-block-bottom">
                                                <h6><strong>{{$car['titre']}}</strong></h6>
                                                <h5>À partir de {{$car['prix']}} €</h5>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Footer Map -->
            <div class='fullwidth_element_parent margin-top-30 padding-bottom-40'>
                <div id='google-map-listing' class='fullwidth_element' data-longitude='4.986016'
                     data-latitude='45.766984' data-zoom='12' style='height: 390px;' data-scroll='false'
                     data-style='[{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#F0F0F0"},{"saturation":-100},{"gamma":2.15},{"lightness":12}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":24}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":57}]}]'></div>
            </div>
            <div class="car-rate-block clearfix margin-top-30 padding-bottom-40">
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 xs-margin-bottom-40 sm-margin-bottom-none padding-left-none scroll_effect bounceInLeft">
                    <div class="small-block clearfix">
                        <h4 class="margin-bottom-25 margin-top-none">Financements.</h4>
                        <a href="{{url('/infos-pratiques')}}" title="Infos pratiques toyota lyon"><span class="align-center"><i class="fa fa-tag fa-7x"></i></span></a></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 xs-margin-bottom-40 sm-margin-bottom-none scroll_effect bounceInLeft"
                     data-wow-delay=".2s">
                    <div class="small-block clearfix">
                        <h4 class="margin-bottom-25 margin-top-none">Garanties.</h4>
                        <a href="{{url('/infos-pratiques')}}" title="Infos pratiques toyota lyon"><span class="align-center"><i class="fa fa-cogs fa-7x"></i></span></a></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-left-none padding-right-none hours_operation">
                    <div class="small-block clearfix">
                        <h4 class="margin-bottom-25 margin-top-none">Quels sont nos horaires d'ouverture ?</h4>

                        <div class="row">
                            <div class="col-lg-12 col-lg-offset-2 xs-margin-bottom-40 sm-margin-bottom-40 md-margin-bottom-none scroll_effect bounceInUp"
                                 data-wow-delay=".4s">
                                <table class="table table-bordered no-border font-13px margin-bottom-none">
                                    <thead>
                                    <tr>
                                        <td colspan="2"><strong>Atelier</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Lundi</td>
                                        <td>8H - 12H 14H - 19H</td>
                                    </tr>
                                    <tr>
                                        <td>Mardi</td>
                                        <td>8H - 12H 14H - 19H</td>
                                    </tr>
                                    <tr>
                                        <td>Mercredi</td>
                                        <td>8H - 12H 14H - 19H</td>
                                    </tr>
                                    <tr>
                                        <td>Jeudi</td>
                                        <td>8H - 12H 14H - 19H</td>
                                    </tr>
                                    <tr>
                                        <td>Vendredi</td>
                                        <td>8H - 12H 14H - 18H</td>
                                    </tr>
                                    <tr>
                                        <td>Samedi</td>
                                        <td>8H - 12H</td>
                                    </tr>
                                    <tr>
                                        <td>Dimanche</td>
                                        <td>Fermé</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 xs-margin-bottom-40 sm-margin-bottom-none scroll_effect bounceInRight"
                     data-wow-delay=".2s">
                    <div class="small-block clearfix">
                        <h4 class="margin-bottom-25 margin-top-none">Infos Pratiques.</h4>
                        <a href="{{url('/infos-pratiques')}}" title="Infos pratiques toyota lyon"><span class="align-center"><i class="fa fa-users fa-7x"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 xs-margin-bottom-40 sm-margin-bottom-none padding-right-none scroll_effect bounceInRight">
                    <div class="small-block clearfix">
                        <h4 class="margin-bottom-25 margin-top-none">Nous contacter.</h4>
                        <a href="{{url('/contact')}}" title="Contact toyota lyon"><span class="align-center"><i class="fa fa-map-marker fa-7x"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--welcome-wrap ends-->

    <div class="row parallax_parent margin-top-30">
        <div class="parallax_scroll clearfix" data-velocity="-.5" data-offset="-300" data-no-repeat="true"
             data-image="{{url('images/parallax2.jpg')}}">
            <div class="overlay">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-left-none margin-vertical-60">
                            <i class="fa fa-car"></i>

                                    <span class="animate_number margin-vertical-15">
                                        <span class="number">14000</span>
                                    </span>

                            Voitures traîtées
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-vertical-60">
                            <i class="fa fa-money"></i>

                                    <span class="animate_number margin-vertical-15">
                                        <span class="number">35</span>€
                                    </span>

                            Prix minimum
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-vertical-60">
                            <i class="fa fa-users"></i>

                                    <span class="animate_number margin-vertical-15">
                                        <span class="number">100</span>%
                                    </span>

                            De satisfaction
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-right-none margin-vertical-60">
                            <i class="fa fa-tint"></i>

                                    <span class="animate_number margin-vertical-15">
                                        <span class="number">7500</span>
                                    </span>

                            Changements d'huile
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
