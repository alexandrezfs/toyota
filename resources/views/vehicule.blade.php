@extends('app')

@section('content')

    <section id="secondary-banner" class="dynamic-image-11"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>{{$vehicule['titre']}}</h2>
                    <h4>Fiche de véhicule</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>{{$vehicule['titre']}}</li>
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
                                    <li> <img src="http://demo.themesuite.com/automotive/images/Portfolio-Single.jpg" alt="Portfolio Image" /> </li>
                                    <li> <img src="http://demo.themesuite.com/automotive/images/Portfolio-Single-2.jpg" alt="Portfolio Image 2" /> </li>
                                </ul>
                            </div>
                        </div>

                        <!--CLOSE OF SLIDER-->
                        <!--Slider End-->

                    </div>
                    <div class="col-lg-4 col-md-4 right-content padding-right-none xs-padding-left-none sm-padding-left-none">
                        <div class="right_site_job">
                            <div class="job sm-padding-bottom-40 xs-padding-bottom-40 xs-padding-top-30">
                                <h2>{{$vehicule['titre']}}</h2>
                                <p>{{$vehicule['description']}}</p>
                            </div>
                            <div class="project_details margin-top-30">
                                <h2>Détails</h2>
                                <ul class="margin-bottom-none">
                                    <li><i class="fa fa-check-circle"></i>Fully responsive and ready for all mobile devices</li>
                                    <li><i class="fa fa-check-circle"></i>Integrated inventory management system is included</li>
                                    <li><i class="fa fa-check-circle"></i>Simple option panel and very easy to customize</li>
                                    <li><i class="fa fa-check-circle"></i>Search engine optimization (SEO) is 100% built-in</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="project_wrapper clearfix margin-top-30">
                        <h4 class="related_project_head margin-top-10 padding-bottom-15 margin-top-none">Autres véhicules</h4>
                        <div class="related_post margin-top-30 clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scroll_effect fadeInLeft">
                                <div class="car-block margin-bottom-10"><a href="#">
                                        <div class="img-flex"> <span class="align-center"><i class="fa fa-3x fa-youtube-play"></i></span> <img src="http://demo.themesuite.com/automotive/images/related_project1.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h2>Single Project 1</h2>
                                            <h4>First project description</h4>
                                        </div>
                                    </a> </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scroll_effect fadeInLeft" data-wow-delay=".2s">
                                <div class="car-block margin-bottom-10"> <a href="#">
                                        <div class="img-flex"><span class="align-center"><i class="fa fa-3x fa-pencil-square-o"></i></span> <img src="http://demo.themesuite.com/automotive/images/related_project2.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h2>Single Project 2</h2>
                                            <h4>Scond project description</h4>
                                        </div>
                                    </a> </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scroll_effect fadeInRight" data-wow-delay=".2s">
                                <div class="car-block margin-bottom-10"><a href="#">
                                        <div class="img-flex"> <span class="align-center"><i class="fa fa-3x fa-picture-o"></i></span> <img src="http://demo.themesuite.com/automotive/images/related_project3.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h2>Single Project 3</h2>
                                            <h4>Third project description</h4>
                                        </div>
                                    </a> </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scroll_effect fadeInRight">
                                <div class="car-block margin-bottom-10"><a href="#">
                                        <div class="img-flex"> <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span> <img src="http://demo.themesuite.com/automotive/images/related_project4.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h2>Single Project 4</h2>
                                            <h4>Four project description</h4>
                                        </div>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container ends-->
    </section>
    <!--content ends-->

@endsection