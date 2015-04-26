@extends('app')

@section('content')

    <section id="secondary-banner" class="dynamic-image-10"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>Actualité</h2>
                    <h4>Tenez-vous au courant des activités TOYOTA</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--secondary-banner ends-->
    <div class="message-shadow"></div>
    <section class="content">
        <div class="container">
            <div class="inner-page portfolio-container clearfix row">
                <div class="portfolioContainer portfolio_3">
                    @foreach($newsfeed as $new)
                    <div class="col-md-4 convertible sports-car mix margin-bottom-50">
                        <div class="box clearfix">
                            <a href="{{url('/article/' . $new['id'])}}">
                                @if(count($new['images']) > 0)
                                    <img src="{{$new['images'][0]['uri']}}" alt=""
                                         class="img-responsive">
                                @else
                                    <img src="http://placehold.it/350x200" alt=""
                                         class="img-responsive">
                                @endif
                            </a>
                            <div class="padding-top-25 padding-bottom-10">
                                <h2>{{$new['titre']}}</h2>
                                <span>{{$new['created_at']}}</span> </div>
                            <p>{{substr(preg_replace('/(<.*?>)|(&.*?;)/', '', $new['contenu']), 0, 100)}} [...]</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--container ends-->
    </section>
    <!--content ends-->

@endsection