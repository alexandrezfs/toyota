@extends('app')

@section('content')

    <!--Header End-->
    <section id="secondary-banner" class="dynamic-image-5"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>Nous contacter</h2>
                    <h4>Nous sommes au 16 Rue Paul Cézanne à MEYZIEU</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Contact</li>
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
            <div class="inner-page">
                <div class="col-md-12 padding-none">
                    <!--MAP-->
                    <div class="find_map row clearfix">
                        <h2 class="margin-bottom-25 margin-top-none">Nous trouver sur la carte</h2>
                        <div class="map margin-vertical-30">
                            <div id='google-map-listing' class="contact" data-longitude='4.986016'
                                 data-latitude='45.766984' data-zoom='10' style='height: 390px;'></div>
                        </div>
                    </div>
                    <!--MAP-->
                    <!--CONTACT INFORMATION-->
                    <div class="row contacts margin-top-25">
                        <!--LEFT INFORMATION-->
                        <div class="col-md-6 left-information">
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
                                        <li><i class="fa fa-phone"></i><strong>Téléphone:</strong> <span><a href="tel:0478316165">04 78 31 61 65</a></span></li>
                                        <li><i class="fa fa-envelope-o"></i><strong>Email:</strong> <a href="mailto:stamcar.toyota@neuf.fr">stamcar.toyota@neuf.fr</a></li>
                                        <li class="padding-bottom-none"><i class="fa fa-laptop"></i><strong>Web:</strong> <a href="http://www.stamcar.fr">www.stamcar.fr</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--INFORMATION HOUR-->
                            <div class="information_hour information_head margin-top-30 xs-padding-bottom-40">
                                <h3 class="margin-bottom-25 margin-top-none">HORAIRES D'OUVERTURE</h3>
                                <div class="row">
                                    <div class="col-sm-12 padding-left-none">
                                        <div class="deparment">
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
                            <!--INFORMATION HOUR-->
                        </div>
                        <!--LEFT INFORMATION-->

                        <!--RIGHT INFORMATION-->
                        <div class="col-md-5 col-lg-offset-1 col-md-offset-1 padding-right-none xs-padding-left-none sm-padding-left-none xs-margin-top-30">
                            <div class="contact_wrapper information_head">
                                <h3 class="margin-bottom-25 margin-top-none">FORMULAIRE DE CONTACT</h3>
                                <div class="form_contact margin-bottom-20">
                                    <div id="result"></div>
                                    <form method="POST" action="{{url('/contact/send')}}">
                                        <fieldset id="contact_form">
                                            <input type="text" name="nom" class="form-control margin-bottom-25" placeholder="Nom  (Requis)" required />
                                            <input type="email" name="email" class="form-control margin-bottom-25" placeholder="Email  (Requis)" required />
                                            <textarea name="message" class="form-control margin-bottom-25 contact_textarea" placeholder="Votre message" rows="7" required></textarea>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input id="submit_btn" type="submit" value="Envoyer">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--RIGHT INFORMATION-->

                    </div>
                    <!---CONTACT INFORMATION-->

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--container ends-->
    </section>
    <!--content ends-->
    <div class="clearfix"></div>
    <div class="back_to_top"> <img src="http://demo.themesuite.com/automotive/images/arrow-up.png" alt="scroll up" /> </div>

@endsection
