@extends('app')

@section('seo')
    <title>Infos pratiques et horaires - STAMCAR TOYOTA LYON EST</title>
    <meta name="description" content="Horaires d'ouverture, localisation, carte. Trouvez-nous facilement.">
@endsection

@section('content')

    <div class="clearfix"></div>
    <section id="secondary-banner" class="dynamic-image-3">
        <!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>Infos pratiques</h2>
                    <h4>Faites réparer votre véhicule par des experts</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Nous rejoindre</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--secondary-banner ends-->
    <div class="message-shadow"></div>
    <div class="clearfix"></div>

    <section class="content">
        <div class="container">
            <div class="inner-page about-us row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-left-none padding-bottom-40 xs-padding-left-none xs-padding-right-none">

                    <div class="contact_information information_head clearfix">
                        <h3 class="margin-bottom-25 margin-top-none">CONTACT</h3>

                        <div class="address clearfix margin-right-25 padding-bottom-40">
                            <div class="icon_address">
                                <p><i class="fa fa-map-marker"></i><strong>Adresse:</strong></p>
                            </div>
                            <div class="contact_address">
                                <p class="margin-bottom-none">STAMCAR TOYOTA LYON EST<br>
                                    16 RUE PAUL CEZANNE <br>
                                    69330 MEYZIEU <br>
                                    France</p>
                            </div>
                        </div>
                        <div class="address clearfix address_details margin-right-25 padding-bottom-40">
                            <ul class="margin-bottom-none">
                                <li><i class="fa fa-phone"></i><strong>Téléphone:</strong> <span><a
                                                href="tel:0478316165">04 78 31 61 65</a></span></li>
                                <li><i class="fa fa-envelope-o"></i><strong>Email:</strong> <a
                                            href="mailto:stamcar.toyota@neuf.fr">stamcar.toyota@neuf.fr</a></li>
                                <li class="padding-bottom-none"><i class="fa fa-laptop"></i><strong>Web:</strong> <a
                                            href="http://www.stamcar.fr">www.stamcar.fr</a></li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="margin-bottom-25">NOTRE MISSION</h3>

                    <p><span class="firstcharacter">S</span>pécialisé dans la réparation de tous les véhicules y compris
                        les véhicules sans permis, notre savoir faire sur les entretiens des véhicules de toutes marques
                        et spécialement de la marque Toyota. En partenariat avec notre fournisseur IGOL, nos produits
                        sont de hautes qualités, pour une longévité de votre véhicule.

                        Du Lundi au Jeudi 8h-12h 14h-19h sauf Vendredi fermeture à 18h, et Samedi 8h-12h fermeture après
                        midi.
                        *À l'occasion de certaines journées (jours fériés, vacances d'été), le garage est susceptible de
                        fermer ses portes.

                        STAMCAR, situé en plein coeur d'un large réseau de transports, tel l'axe national N346 qui relie
                        l'entreprise à Lyon, repose en plein coeur de nombreux commerces. (Zone d'activité) 16 Rue Paul
                        Cezanne, 69330 Meyzieu derrière le centre Leclerc.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 padding-right-none padding-bottom-40 xs-padding-left-none xs-padding-right-none">
                    <div class="right-container">
                        <h3 class="margin-bottom-25">Nos spécialités</h3>

                        <div class="progressbar">
                            <div class="bs-example">
                                <div class="progress margin-bottom-15">
                                    <div class="progress-bar progress-bar-danger" data-width="100">Réparations</div>
                                </div>
                                <div class="progress margin-bottom-15">
                                    <div class="progress-bar progress-bar-danger" data-width="100">Entretiens</div>
                                </div>
                                <div class="progress margin-bottom-15">
                                    <div class="progress-bar progress-bar-danger" data-width="100">Concessions</div>
                                </div>
                                <div class="progress margin-bottom-15">
                                    <div class="progress-bar progress-bar-danger" data-width="100">Sans Permis</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="margin-top-30 xs-margin-top-none padding-bottom-40">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-left-none xs-padding-bottom-40 xs-padding-left-none sm-padding-bottom-40 xs-padding-right-none scroll_effect fadeInUp">
                        <h3 class="margin-bottom-25">Pourquoi nous choisir ?</h3>

                        <div class="choose-list">
                            <ul>
                                <li>Nous sommes agréés par de grandes marques</li>
                                <li>Notre atelier est révisé par des organismes agréés par l'etat</li>
                                <li>Nous choisissons nos techniciens avec soin</li>
                                <li>Nous fournissons une meilleure expérience en ligne</li>
                                <li>Nos prix sont abordables</li>
                                <li>Nous sommes attachés à votre satisfaction</li>
                                <li>Notre atelier est pleinement accessible</li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xs-padding-bottom-40 xs-padding-left-none xs-padding-right-none sm-padding-bottom-40 testimonials scroll_effect fadeInUp"
                         data-wow-delay=".2s">
                        <h3 class="margin-bottom-25">Témoignages</h3>

                        <div class="testimonial">
                            <ul class="testimonial_slider">
                                <li>
                                    <blockquote class="style1"><span>STAMCAR est notre principal partenaire et gère notre parc de 40 véhicules neufs. Nous avons pleinement confiance en leurs compétence et ont su être à la hauteur à chacune de nos demandes d'intervention.</span>
                                        <strong>Jean</strong></blockquote>
                                </li>
                                <li>
                                    <blockquote class="style1"><span>Me déplacant toute la journée mon véhicule a besoin d'être entretenu de manière soutenue. STAMCAR a su répondre à mes attentes et leurs interventions ont été rapides et efficaces.</span>
                                        <strong>Roger</strong></blockquote>
                                </li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 latest-news margin-padding-none xs-padding-bottom-40 xs-padding-left-none xs-padding-right-none sm-padding-left-none sm-margin-bottom-none scroll_effect fadeInUp"
                         data-wow-delay=".4s">
                        <h3 class="margin-bottom-25">Nos dernières news</h3>

                        <div class="arrow1 pull-right blog_post_controls"></div>
                        <ul class="recent_blog_posts">
                            @foreach($news as $new)
                                <li>
                                    <div class="blog-list">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list-info padding-bottom-15 padding-horizontal-5">
                                            <a href="{{url('/article/' . $new['slug'])}}">
                                                <div class="thumb-image">
                                                    @if(count($new['images']) > 0)
                                                        <img src="{{$new['images'][0]['uri']}}" style="max-width:80px;"
                                                             alt="">
                                                    @else
                                                        <img src="http://placehold.it/50x50" alt=""
                                                             class="img-responsive">
                                                    @endif
                                                </div>
                                                <h4>{{$new['titre']}}</h4>
                                                <span>{{$new['created_at']}}</span>

                                                <p>{{substr(preg_replace('/(<.*?>)|(&.*?;)/', '', $new['contenu']), 0, 250)}}
                                                    <a href="{{url('/article/' . $new['slug'])}}"> [...]</a></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--container ends-->
    </section>
    <!--content ends-->
    <div class="clearfix"></div>

    <!-- Footer Map -->
    <div id='google-map-listing' data-longitude='4.986016'
         data-latitude='45.766984' data-zoom='16' style='height: 390px;'
         data-scroll='false'
         data-style='[{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#F0F0F0"},{"saturation":-100},{"gamma":2.15},{"lightness":12}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":24}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":57}]}]'></div>

@endsection