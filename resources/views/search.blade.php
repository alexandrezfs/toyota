@extends('app')

@section('content')

    <section id="secondary-banner" class="dynamic-image-1">
        <!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>Résultats de recherche</h2>
                    <h4>Trouvez votre futur véhicule</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Résultats de recherche</li>
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
            <div class="inner-page row">
                <div class="content-wrap car_listings">
                    <div class="row">
                        @foreach($foundCars as $car)
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox"
                                       id="vehicle_1"/>
                                <label for="vehicle_1"></label>
                                <a class="inventory" href="{{url('/vehicule/' . $car['slug'])}}">
                                    <div class="title">{{$car['titre']}}</div>
                                    @if(count($car['images']) > 0)
                                        <img src="{{$car['images'][0]['uri']}}" alt=""
                                             class="preview">
                                    @else
                                        <img src="http://placehold.it/350x200" alt=""
                                             class="preview">
                                    @endif
                                    <table class="options-primary">
                                        <tr>
                                            <td class="option primary">Chassis</td>
                                            <td class="spec">{{$car['chassis']}}</td>
                                        </tr>
                                        <tr>
                                            <td class="option primary">Transmission</td>
                                            <td class="spec">{{$car['transmission']}}</td>
                                        </tr>
                                        <tr>
                                            <td class="option primary">Moteur</td>
                                            <td class="spec">{{$car['moteur']}}</td>
                                        </tr>
                                        <tr>
                                            <td class="option primary">Kilométrage</td>
                                            <td class="spec">{{$car['km']}}</td>
                                        </tr>
                                    </table>
                                    <table class="options-secondary">
                                        <tr>
                                            <td class="option secondary">Année</td>
                                            <td class="spec">{{$car['annee']}}</td>
                                        </tr>
                                    </table>

                                    <div class="price"><b>Prix</b><br>
                                        <div class="figure">{{$car['prix']}}€</div>
                                    </div>
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

    <!--content ends-->
    <div class="clearfix"></div>

@endsection