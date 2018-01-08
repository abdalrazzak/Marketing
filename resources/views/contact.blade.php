@extends('layouts.master')
@section('ribbon')
    <!-- Page Header Start Here -->
    <section class="page-header">
        <div class="product-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="p-tb-10">Contact Us</h2>
                    </div>
                    <div class="col-md-3 m-t-15">
                        <a href="{!! route('home') !!}">Home</a> <i class="fa fa-angle-double-right"></i>
                        <a href="{!! route('pages.view', ['contact']) !!}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End Here -->

@stop
@section('content')
    <!-- Main Section Start Here -->
    <div id="main">
        <!-- Contact Section Start Here -->
        <section id="contact-us" class="contact-section section-padding">
            <div class="container form-section">
                <div class="row">
                    <div class="contact-detail col-md-6 col-xs-12 wow fadeUp">
                        <h3>Contact Information</h3>
                        <ul class="contact-detail">
                            <li>
                                <h6>Business Hour</h6>
                                <p><i class="fa fa-support"></i>Our support Hotline is available 24 Hours a day : (123) 456-7890 </p>
                                <p><i class="fa fa-clock-o"></i>Monday-Friday : 9am to 6pm, - Saturday : 10am to 2pm
                            </li>
                            <li>
                                <h6>Bulding Address </h6>
                                <p><i class="fa fa-map-marker"></i>Address: 557 Cyan Avenue, Suite 65, New York, CA 9008</p>
                            </li>
                            <li>
                                <h6>E-mail</h6>
                                <p><i class="fa fa-envelope-o"></i>example@gmail.com, info.example@gmail.com</p>
                            </li>
                            <li>
                                <h6>Cell Phone</h6>
                                <p><i class="fa fa-phone"></i>(123) 456-7890</p>
                            </li>
                        </ul>
                    </div>
                    <div class="form col-md-6 contact-form wow fadeUp">
                        <div id="alertMsg" class="row hidden"></div>
                        <h3>Send Inquiry</h3>
                        <form class="form-horizontal" id="contactForm" action="{!! route('contact.send') !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <!-- IF MAIL SENT SUCCESSFULLY -->
                            {{--<p class="success alert alert-success"><i class="fa fa-check"></i> Your message has been sent successfully. </p>

                            <!-- IF MAIL SENDING UNSUCCESSFULL -->
                            <p class="error alert alert-danger"><i class="fa fa-times"></i> E-mail must be valid and message must be longer than 1 character. </p>
                                --}}
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input  class="form-control" id="cf-name" type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="cf-email" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="cf-subject" type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <textarea class="form-control custom-control" id="cf-message" rows="4" name="body" placeholder="How can i help? "></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <button type="submit" id="cf-submit" name="submit" class="btn-theme btn">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section end Here -->
        <!-- Map Section Start Here -->
        <div class="map">
            <div id="map" style="width:100%; height:400px;"> </div>
        </div>
        <!-- Map Section Start Here -->
    </div>
    <!-- Satisfied Clients Section Start Here-->
    <section class="clients-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="page-header section-header text-center">
                        <h1 class="h-bold">Satisfied Clients</h1>
                        <span class="line text-center"></span>
                        <p>Unique features give you a head-start over your competitors: countless customization options,<br> working forms and newsletters, flexible code, great design, and more</p>
                    </header>
                </div>
                <div class="col-md-12">
                    <ul id="logo" class="owl-carousel owl-theme">
                        <li class="item">
                            <img src="bizstart/images/clients/logo-1.png" alt="" class="img-responsive">
                        </li>
                        <li class="item">
                            <img src="bizstart/images/clients/logo-3.png" alt="" class="img-responsive">
                        </li>
                        <li class="item">
                            <img src="bizstart/images/clients/logo-4.png" alt="" class="img-responsive">
                        </li>
                        <li class="item">
                            <img src="bizstart/images/clients/logo-5.png" alt="" class="img-responsive">
                        </li>
                        <li class="item">
                            <img src="bizstart/images/clients/logo-6.png" alt="" class="img-responsive">
                        </li>
                        <li class="item">
                            <img src="bizstart/images/clients/logo-4.png" alt="" class="img-responsive">
                        </li>
                        <li class="item">
                            <img src="bizstart/images/clients/logo-3.png" alt="" class="img-responsive">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Satisfied Client Section End Here-->

@stop
@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('#contactForm').submit(function (e) {
                e.preventDefault();
                var url = $(this).attr('action');

               $.ajax({
                   method: 'POST',
                   url: url,
                   data: $(this).serialize(),
                   dataType: 'json',
                   success: function (response) {
                       $('#alertMsg').append('<div class="alert alert-success">'+response.message+'</div>')
                           .removeClass('hidden');

                       $('#contactForm').find('input, textarea').val('');
                   },
                   error: function(response) {
                       //{subject: '', body: ''}
                       $.each(response.responseJSON, function (i, el) {
                           $('#alertMsg').append('<div class="alert alert-danger">'+el+'</div>')
                               .removeClass('hidden');
                       });
                   }
               }) ;
            });
        });
    </script>
@stop