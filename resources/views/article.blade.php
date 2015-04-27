@extends('app')

@section('seo')
    <title>{{$article['titre']}} - STAMCAR TOYOTA LYON EST</title>
    <meta name="description" content="{{substr(preg_replace('/(<.*?>)|(&.*?;)/', '', $article['contenu']), 0, 150)}} [...]">
@endsection

@section('content')
    <section id="secondary-banner" class="dynamic-image-9"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>{{$article['titre']}}</h2>
                    <h4>L'actualité STAMCAR</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>{{$article['titre']}}</li>
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
            <div class="inner-page full-width row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-none padding-right-none">
                    <div class="blog-content">
                        <div class="post-entry clearfix">
                            @if(count($article['images']) > 0)
                                <img src="{{$article['images'][0]['uri']}}" alt=""
                                     class="img-responsive">
                            @else
                                <img src="http://placehold.it/350x200" alt=""
                                     class="img-responsive">
                            @endif
                            <div class="blog-title">
                                <h2 class="margin-top-40">{{$article['titre']}}</h2>
                                <p>{{$article['created_at']}}</p>
                                <p>{!! $article['contenu'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--container ends-->
    </section>
    <!--content ends-->
    <div class="clearfix"></div>

@endsection
