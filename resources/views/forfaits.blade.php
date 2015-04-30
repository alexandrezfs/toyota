@extends('app')

@section('seo')
    <title>Forfaits - STAMCAR TOYOTA LYON EST</title>
    <meta name="description" content="Faites des économies avec les forfaits TOYOTA chez STAMCAR Toyota Lyon Est">
@endsection

@section('content')

    <section id="secondary-banner" class="dynamic-image-10"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>Forfaits</h2>
                    <h4>Faites des économies avec les forfaits TOYOTA</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Forfaits</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

   <div class="clearfix"></div>
    <section class="content">
        <div class="container">
            <div class="inner-page row">
                <div class="content-wrap car_listings">
                    <div class="row">
                        @if(count($forfaits) == 0)
                            <p>Aucun forfait n'est proposé pour le moment.
                                <br>
                                <a href="{{url('/')}}" title="Retour à la page d'accueil"><i class="fa fa-home"></i> Retour à la page d'accueil</a>
                            </p>
                        @endif
                        @foreach($forfaits as $forfait)
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                <a class="inventory" href="{{url('/forfait/' . $forfait['slug'])}}">
                                    <div class="title" style="white-space:normal;">{{$forfait['titre']}}</div>
                                    @if(count($forfait['images']) > 0)
                                        <img src="{{$forfait['images'][0]['uri']}}" alt=""
                                             class="preview">
                                    @else
                                        <img src="http://placehold.it/350x200" alt=""
                                             class="preview">
                                    @endif
                                    <table class="options-primary">
                                        <tr>
                                            <td class="option primary">Description</td>
                                            <td class="spec">{{$forfait['contenu']}}</td>
                                        </tr>
                                        <tr>
                                            <td class="option primary">Disponible</td>
                                            <td class="spec">Oui</td>
                                        </tr>
                                        <tr>
                                            <td class="option primary">Contact</td>
                                            <td class="spec"><i class="fa fa-phone"></i> <a href="tel:0478316165" style="color:black;">04 78 31 61 65</a></td>
                                        </tr>
                                    </table>

                                    <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> Détails
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--container ends-->
    </section>

@endsection