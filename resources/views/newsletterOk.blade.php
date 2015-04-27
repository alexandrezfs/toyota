@extends('app')

@section('content')

    <section id="secondary-banner" class="dynamic-image-1">
        <!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>Newsletter</h2>
                    <h4>Vous vous êtes inscrit à notre newsletter</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Newsletter</li>
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
            <div class="col-lg-12 padding-top-100 padding-bottom-100">
                <p>Merci de vous êtes inscrit à notre newsletter. Vous recevrez les dernirères actus STAMCAR prochainement !</p>
            </div>
        </div>
        <!--container ends-->
    </section>

@endsection