@extends('app')

@section('seo')
    <title>Sans Permis - STAMCAR TOYOTA LYON EST</title>
    <meta name="description" content="Découvrez notre gamme de véhicules sans permis.">
@endsection

@section('content')

    <section id="secondary-banner" class="dynamic-image-1">
        <!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>Modèles sans permis</h2>
                    <h4>Si un modèle vous intéresse, contactez-nous.</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Modèles sans permis</li>
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
                <div class="listing-view margin-bottom-20">
                    <!--
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 padding-none"> <span class="ribbon"><strong>140 Vehicles Matching:</strong></span> <span class="ribbon-item">All Listings</span> </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 padding-none pull-right select_view"> <span class="align-right">Select View:</span>
                            <ul class="page-view nav nav-tabs">
                                <li><a href="inventory-wide-fullwidth.html"><i class="fa fa-align-left"></i></a></li>
                                <li><a href="inventory-wide-sidebar-left.html"><i class="fa"></i></a></li>
                                <li><a href="inventory-wide-sidebar-right.html"><i class="fa"></i></a></li>
                                <li class="active"><a href="#box-full-width"><i class="fa"></i></a></li>
                                <li><a href="inventory-boxed-sidebar-left.html"><i class="fa"></i></a></li>
                                <li><a href="inventory-boxed-sidebar-right.html"><i class="fa"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <form method="post" action="#" class="listing_sort">
                    <div class="select-wrapper listing_select clearfix margin-top-none margin-bottom-15">
                        <div class="my-dropdown years-dropdown">
                            <select name="year" class="css-dropdowns" tabindex="1" >
                                <option value="">All Years</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                                <option>2008</option>
                                <option>2007</option>
                                <option>2006</option>
                                <option>2005</option>
                                <option>2004</option>
                            </select>
                        </div>
                        <div class="my-dropdown makers-dropdown">
                            <select name="make" class="css-dropdowns" tabindex="1" >
                                <option value="">All Makes</option>
                                <option>Lorem</option>
                                <option>ipsum</option>
                                <option>dolor</option>
                                <option>sit</option>
                                <option>amet</option>
                            </select>
                        </div>
                        <div class="my-dropdown models-dropdown">
                            <select name="model" class="css-dropdowns" tabindex="1" >
                                <option value="">All Models</option>
                                <option>Lorem</option>
                                <option>ipsum</option>
                                <option>dolor</option>
                                <option>sit</option>
                                <option>amet</option>
                            </select>
                        </div>
                        <div class="my-dropdown body-styles-dropdown">
                            <select name="body_style" class="css-dropdowns" tabindex="1" >
                                <option value="">All Body Styles</option>
                                <option>Cargo</option>
                                <option>Compact</option>
                                <option>Convertible</option>
                                <option>Coupe</option>
                                <option>Hatchback</option>
                                <option>Minivan</option>
                                <option>Sedan</option>
                                <option>SUV</option>
                                <option>Truck</option>
                                <option>Van</option>
                                <option>Wagon</option>
                            </select>
                        </div>
                        <div class="my-dropdown mileage-dropdown">
                            <select name="mileage" class="css-dropdowns" tabindex="1" >
                                <option value="">All Mileage</option>
                                <option>0</option>
                                <option>&lt; 10,000</option>
                                <option>&lt; 20,000</option>
                                <option>&lt; 30,000</option>
                                <option>&lt; 40,000</option>
                                <option>&lt; 50,000</option>
                                <option>&lt; 60,000</option>
                                <option>&lt; 70,000</option>
                                <option>&lt; 80,000</option>
                                <option>&lt; 90,000</option>
                                <option>&lt; 100,000</option>
                                <option>&lt; 120,000</option>
                                <option>&lt; 150,000</option>
                            </select>
                        </div>
                        <div class="my-dropdown transmissions-dropdown">
                            <select name="transmission" class="css-dropdowns" tabindex="1" >
                                <option value="">All Transmissions</option>
                                <option>Automatic</option>
                                <option>Manual</option>
                            </select>
                        </div>
                        <div class="my-dropdown fuel-economies-dropdown">
                            <select name="fuel_economies" class="css-dropdowns" tabindex="1" >
                                <option value="">All Fuel Economies</option>
                                <option>10-20 MPG</option>
                                <option>20-30 MPG</option>
                                <option>30-40 MPG</option>
                                <option>40-50 MPG</option>
                                <option>50-60 MPG</option>
                            </select>
                        </div>
                        <div class="my-dropdown conditions-dropdown">
                            <select name="conditions" class="css-dropdowns" tabindex="1" >
                                <option value="">All Conditions</option>
                                <option>New</option>
                                <option>Used</option>
                            </select>
                        </div>
                        <div class="my-dropdown location-dropdown">
                            <select name="location" class="css-dropdowns" tabindex="1" >
                                <option value="">All Locations</option>
                                <option>Toronto</option>
                                <option>New York</option>
                                <option>Los Angeles</option>
                                <option>Vancouver</option>
                            </select>
                        </div>
                        <div class="my-dropdown prices-dropdown">
                            <select name="price" class="css-dropdowns" tabindex="1" >
                                <option value="">All Prices</option>
                                <option>&lt; $1,000</option>
                                <option>&lt; $10,000</option>
                                <option>&lt; $20,000</option>
                                <option>&lt; $30,000</option>
                                <option>&lt; $40,000</option>
                                <option>&lt; $50,000</option>
                                <option>&lt; $60,000</option>
                                <option>&lt; $70,000</option>
                                <option>&lt; $80,000</option>
                                <option>&lt; $90,000</option>
                                <option>&lt; $100,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="select-wrapper pagination clearfix margin-top-none margin-bottom-15">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sort-by-menu"> <span class="sort-by">Sort By:</span>
                                <div class="my-dropdown price-ascending-dropdown">
                                    <select name="price" class="css-dropdowns" tabindex="1" >
                                        <option value="">Price Ascending</option>
                                        <option>Ascending</option>
                                        <option>Descending</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-offset-1">
                                <div class="controls full"> <a href="#" class="left-arrow"><i class="fa fa-angle-left"></i></a> <span>Page 1 of 4</span> <a href="#" class="right-arrow"><i class="fa fa-angle-right"></i></a> </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                                <ul class="form-links top_buttons">
                                    <li><a href="#" class="gradient_button">Reset Filters</a></li>
                                    <li><a href="#" class="gradient_button">Deselect All</a></li>
                                    <li><a href="#" class="gradient_button">Compare 0 Vehicles</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>-->
                    <div class="clearfix"></div>
                    @foreach($cars as $car)
                        <div class="inventory_box car_listings boxed boxed_full">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <a class="inventory" href="{{url('/vehicule/' . $car['slug'])}}">
                                        <div class="title">{{$car['titre']}}</div>
                                        @if(count($car['images']) > 0)
                                            <img src="{{$car['images'][0]['uri']}}" alt=""
                                                 class="img-responsive">
                                        @else
                                            <img src="http://placehold.it/350x200" alt=""
                                                 class="img-responsive">
                                        @endif
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Année</td>
                                                <td class="spec">Neuf</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Marque:</td>
                                                <td class="spec">{{$car['marque']}}</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Moteur:</td>
                                                <td class="spec">{{$car['moteur']}}</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec">{{$car['transmission']}}</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Chassis:</td>
                                                <td class="spec">{{$car['chassis']}}</td>
                                            </tr>
                                        </table>

                                        <div style="margin-top: 45px;">
                                            <div class="price">
                                                <div class="figure">{{$car['prix']}} €</div>
                                            </div>
                                        </div>

                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> Détails
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--container ends-->
    </section>


@endsection