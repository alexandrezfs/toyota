@extends('app')

@section('content')

    <section id="secondary-banner" class="dynamic-image-11"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>{{$forfait['titre']}}</h2>
                    <h4>Fiche de forfait</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>{{$forfait['titre']}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--secondary-banner ends-->
    <div class="message-shadow"></div>
    <section class="content">
        <div class="container">
            <div class="inner-page">
                <div class="row padding-bottom-40">
                    <div class="col-lg-8 col-md-8 col-xs-12 left-content padding-left-none xs-padding-bottom-40 sm-padding-bottom-40">
                        <!--OPEN OF SLIDER-->
                        <div class="slider">
                            <div class="flexslider flexslider2">
                                <ul class="slides item">
                                    @foreach($forfait->images as $image)
                                        <li><img src="{{$image->uri}}" /></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!--CLOSE OF SLIDER-->
                        <!--Slider End-->

                    </div>
                    <div class="col-lg-4 col-md-4 right-content padding-right-none xs-padding-left-none sm-padding-left-none">
                        <div class="right_site_job">
                            <div class="job sm-padding-bottom-40 xs-padding-bottom-40 xs-padding-top-30">
                                <h2>{{$forfait['titre']}}</h2>
                                <p><strong><a href="{{url('/contact')}}">Contactez STAMCAR au 04 78 31 61 65</a></strong></p>
                                <p>{{$forfait['description']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="project_wrapper clearfix margin-top-30">
                        <h4 class="related_project_head margin-top-10 padding-bottom-15 margin-top-none">Autres forfaits</h4>
                        <div class="related_post margin-top-30 clearfix">
                            @foreach($forfaits as $forfait)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scroll_effect fadeInRight" data-wow-delay=".2s">
                                    <div class="car-block margin-bottom-10"><a href="#">
                                            <div class="img-flex">
                                                <span class="align-center"><i class="fa fa-3x fa-picture-o"></i></span>
                                                @if(count($forfait['images']) > 0)
                                                    <img src="{{$forfait['images'][0]['uri']}}" alt=""
                                                         class="img-responsive">
                                                @else
                                                    <img src="http://placehold.it/350x200" alt=""
                                                         class="img-responsive">
                                                @endif
                                            </div>
                                            <div class="car-block-bottom">
                                                <h2>{{$forfait['titre']}}</h2>
                                                <h4>{{substr($forfait['description'], 0, 100)}}</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container ends-->
    </section>
    <!--content ends-->

@endsection