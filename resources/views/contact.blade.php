@extends('app')

@section('content')

    <!--Header End-->
    <section id="secondary-banner" class="dynamic-image-5"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2>Contact Us</h2>
                    <h4>We are conveniently located just off Santa Monica Blvd</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
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
                        <h2 class="margin-bottom-25 margin-top-none">FIND US ON THE MAP</h2>
                        <div class="map margin-vertical-30">
                            <div id='google-map-listing' class="contact" data-longitude='-79.38' data-latitude='43.65' data-zoom='7' style='height: 390px;'></div>
                        </div>
                    </div>
                    <!--MAP-->
                    <!--CONTACT INFORMATION-->
                    <div class="row contacts margin-top-25">
                        <!--LEFT INFORMATION-->
                        <div class="col-md-6 left-information">
                            <div class="contact_information information_head clearfix">
                                <h3 class="margin-bottom-25 margin-top-none">CONTACT INFORMATION</h3>
                                <div class="address clearfix margin-right-25 padding-bottom-40">
                                    <div class="icon_address">
                                        <p><i class="fa fa-map-marker"></i><strong>Address:</strong></p>
                                    </div>
                                    <div class="contact_address">
                                        <p class="margin-bottom-none">Company Name<br>
                                            1234 Street Name <br>
                                            City Name, AB  12345 <br>
                                            United States</p>
                                    </div>
                                </div>
                                <div class="address clearfix address_details margin-right-25 padding-bottom-40">
                                    <ul class="margin-bottom-none">
                                        <li><i class="fa fa-phone"></i><strong>Phone:</strong> <span>1-800-123-4567</span></li>
                                        <li><i class="fa fa-envelope-o"></i><strong>Email:</strong> <a href="mailto:sales@company.com">sales@company.com</a></li>
                                        <li class="padding-bottom-none"><i class="fa fa-laptop"></i><strong>Web:</strong> <a href="http://company.com">www.company.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--INFORMATION HOUR-->
                            <div class="information_hour information_head margin-top-30 xs-padding-bottom-40">
                                <h3 class="margin-bottom-25 margin-top-none">BUSINESS HOURS</h3>
                                <div class="row">
                                    <div class="col-sm-4 padding-left-none">
                                        <div class="deparment">
                                            <table class="table table-bordered no-border font-12px">
                                                <thead>
                                                <tr>
                                                    <td colspan="2"><strong>Sales Department</strong></td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Mon:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Tue:</td>
                                                    <td>8:00am - 9:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Wed:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Thu:</td>
                                                    <td>8:00am - 9:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Fri:</td>
                                                    <td>8:00am - 6:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Sat:</td>
                                                    <td>9:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Sun:</td>
                                                    <td>Closed</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="deparment">
                                            <table class="table table-bordered no-border font-12px">
                                                <thead>
                                                <tr>
                                                    <td colspan="2"><strong>Service Department</strong></td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Mon:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Tue:</td>
                                                    <td>8:00am - 9:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Wed:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Thu:</td>
                                                    <td>8:00am - 9:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Fri:</td>
                                                    <td>8:00am - 6:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Sat:</td>
                                                    <td>9:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Sun:</td>
                                                    <td>Closed</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 padding-right-none">
                                        <div class="deparment">
                                            <table class="table table-bordered no-border font-12px margin-bottom-none">
                                                <thead>
                                                <td colspan="2"><strong>Parts Department</strong></td>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Mon:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Tue:</td>
                                                    <td>8:00am - 9:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Wed:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Thu:</td>
                                                    <td>8:00am - 9:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Fri:</td>
                                                    <td>8:00am - 6:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Sat:</td>
                                                    <td>9:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Sun:</td>
                                                    <td>Closed</td>
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
                                <h3 class="margin-bottom-25 margin-top-none">CONTACT FORM</h3>
                                <div class="form_contact margin-bottom-20">
                                    <div id="result"></div>
                                    <fieldset id="contact_form">
                                        <input type="text" name="name" class="form-control margin-bottom-25" placeholder="Name  (Required)" />
                                        <input type="email" name="email" class="form-control margin-bottom-25" placeholder="Email  (Required)" />
                                        <textarea name="msg" class="form-control margin-bottom-25 contact_textarea" placeholder="Your message" rows="7"></textarea>
                                        <input id="submit_btn" type="submit" value="Send Message">
                                    </fieldset>
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
