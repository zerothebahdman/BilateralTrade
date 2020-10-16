{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

@extends('layouts.main')

@section('content')
    <!-- Banner Section -->

        <section class="banner-section banner-one">



            <div class="banner-carousel owl-theme owl-carousel">

                <!-- Slide Item -->

                <div class="slide-item">

                    <div class="image-layer" style="background-image: url(images/background/IMG_2977.jpg);"></div>
                    {{-- <div class="image-layer" style="background-image: url(images/background/IMG_2977.jpg);"></div> --}}

                    <div class="auto-container">

                        <div class="content-box">

                            <div class="content clearfix">

                                <div class="inner">

                                    <h1>Check Out The<br> Departments Upcoming <br>Events</h1>

                                    <div class="text">The department have series of events that are being oraginsed in different places and different countries</div>

                                    <div class="links-box clearfix">

                                        <a href="/ourevent" class="theme-btn btn-style-one"><span class="btn-title">See All Events</span></a>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>



                <!-- Slide Item -->

                <div class="slide-item">

                    <div class="image-layer" style="background-image: url(images/main-slider/6.jpg);"></div>

                    <div class="auto-container">

                        <div class="content-box">

                            <div class="content clearfix">

                                <div class="inner">

                                    <h1>See all signed <br>MoU's and Agreements</h1>

                                    <div class="text">The Department houses all MoU's and Agreements signed by the Nigerian Goverment</div>

                                    <div class="links-box clearfix">

                                        <a href="/downloads" class="theme-btn btn-style-one"><span class="btn-title">View Documents</span></a>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>



                <!-- Slide Item -->

                {{-- <div class="slide-item">

                    <div class="image-layer" style="background-image: url(images/main-slider/3.jpg);"></div>

                    <div class="auto-container">

                        <div class="content-box">

                            <div class="content clearfix">

                                <div class="inner">

                                    <h1>the world's <br>largest urban <br>museum</h1>

                                    <div class="text">We're starting off with a handful of spots that should also be on your bucket list.</div>

                                    <div class="links-box clearfix">

                                        <a href="about.html" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a>



                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                </div> --}}



            </div>

        </section>

        <!--End Banner Section -->

<!--Services Section-->

        <section class="services-section">

            <div class="sec-title with-separator centered">

                <h2>Department Services</h2>


                <div class="lower-text" style="margin-top: -30px;">Bilateral Department render's 4 major services to the general public and these are</div>

            </div>

            <div class="auto-container">



                <div class="row clearfix">

                    <!--Featured Service Block-->





                    <div class="">

                        <div class="col-inner">

                            <div class="row clearfix">

                                <!--Feature Block-->

                                <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                                    <div class="inner-box">

                                        <div class="content-box">

                                            <div class="icon-box"><span class="icon flaticon-sheriff-badge"></span></div>

                                            <div class="content">

                                                <h4><a href="policing-crime.html">Hosting of Trade fairs</a></h4>

                                                <div class="text">Blinded by desire, that they cannot foresee belongs which through shrinking.</div>



                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <!--Feature Block-->

                                <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                                    <div class="inner-box">

                                        <div class="content-box">

                                            <div class="icon-box"><span class="icon flaticon-traffic-light"></span></div>

                                            <div class="content">

                                                <h4><a href="transport-traffice.html">Exhibition Approval</a></h4>

                                                <div class="text">Foresee the pain and trouble that are bound to ensue; and equal blame belongs.</div>



                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <!--Feature Block-->

                                <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                                    <div class="inner-box">

                                        <div class="content-box">

                                            <div class="icon-box"><span class="icon flaticon-statue"></span></div>

                                            <div class="content">

                                                <h4><a href="arts-culture.html">Arts & <br>culture department</a></h4>

                                                <div class="text">Trouble that are bound to ensue and equal to those city work who fail their duty.</div>



                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <!--Feature Block-->

                                <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                                    <div class="inner-box">

                                        <div class="content-box">

                                            <div class="icon-box"><span class="icon flaticon-museum"></span></div>

                                            <div class="content">

                                                <h4><a href="land-department.html">Housing & <br>land department</a></h4>

                                                <div class="text">Our power of choice untrammelled and when nothing prevents what like best. </div>



                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>

                </div>



            </div>



        </section>




        <!--About Section-->

        <section class="about-section">

            <div class="image-layer" style="background-image: url(images/background/IMG_2977.jpg);"></div>

            {{-- <div class="pattern-layer" style="background-image: url(images/background/pattern-1.png);"></div> --}}

            <div class="auto-container">

                <div class="content-box">

                    <div class="content">

                        <div class="sec-title light">

                            <h2>From the Deputy Director (Bilaterial)'s Desk</h2>

                        </div>

                        <div class="upper-text clearfix">mayor of london the obligations business will frequently occur that all pleasures have to be repudiated annoyances accepted wise man therefore always holds.</div>

                        <div class="text">Beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</div>



                        <div class="info">

                            <div class="name" style="font-size:larger">Ishaku Zachariah</div>

                            <div class="designation">Deputy Director (Bilaterial)</div>

                        </div>

                    </div>



                    <!--Quote-->



                </div>

            </div>

        </section>


        <!--Events Section-->

        <section class="events-section">

            <div class="auto-container">

                <div class="row clearfix">



                    <div class="left-column col-xl-8 col-lg-12 col-md-12 col-sm-12">

                        <div class="col-inner">

                            <div class="sec-title with-separator">

                                <h2>Latest Department Activities & Events</h2>

                                <div class=""><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                            </div>



                            <div class="carousel-box">

                                <!--Event Block-->

                                <div class="event-block">

                                    <div class="inner-box">

                                        <div class="content-box">

                                            <div class="date-box">
                                                <div class="date"><span class="day">14</span><span class="month">December</span></div>
                                            </div>

                                            <div class="content">

                                                <div class="cat-info"><a href="#">Training</a></div>

                                                <h3><a href="event-details.html">Dacy's parade balloon inflation</a></h3>

                                                <div class="location"><b>Venue:</b> At 12th street, Central park west, UK</div>



                                            </div>

                                        </div>

                                    </div>



                                    <div class="inner-box">

                                        <div class="content-box">

                                            <div class="date-box">
                                                <div class="date"><span class="day">14</span><span class="month">December</span></div>
                                            </div>

                                            <div class="content">

                                                <div class="cat-info"><a href="#">Meeting</a></div>

                                                <h3><a href="event-details.html">Dacy's parade balloon inflation</a></h3>

                                                <div class="location"> <b>Venue:</b> At 12th street, Central park west, UK</div>



                                            </div>

                                        </div>

                                    </div>







                                    <div class="see-all">

                                        <a href="/ourevent"><span class="arrow flaticon-right-2"></span> View All Upcoming Events</a>

                                    </div>

                                </div>





                            </div>



                        </div>

                    </div>



                    <div class="right-column col-xl-4 col-lg-12 col-md-12 col-sm-12">

                        <div class="col-inner">

                            <div class="newsletter-box">

                                <div class="image-box">

                                    <div class="image-layer" style="background-image: url(images/background/image-3.jpg);"></div>

                                    <div class="icon-box"><img src="images/icons/icon-email.png" alt=""></div>

                                    <h3>Subscribe Us</h3>

                                    <div class="text">Get latest News and Events Details.</div>

                                </div>

                                <div class="form-box">

                                    <form method="post" action="http://st.ourhtmldemo.com/new/City.Govt/contact.html">

                                        <div class="form-group clearfix">

                                            <input type="email" name="email" value="" placeholder="Enter email address" required>

                                            <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Subscribe Us</span></button>

                                        </div>

                                    </form>



                                </div>

                            </div>




                        </div>

                    </div>



                </div>

            </div>

        </section>











        <!--Contact Info Section-->

        <section class="contact-info-section">

            <div class="image-layer" style="background-image: url(images/background/image-5.jpg);"></div>

            <div class="auto-container">

                <div class="sec-title with-separator centered">

                    <h2>Suggestion and Complaints</h2>


                    <div class="lower-text" style="margin-top:-30px">We are open to all forms of Suggestions and complaint from the general public</div>

                </div>

                <div class="info-outer clearfix">

                    <!--Info Box-->

                    <div class="info-box">

                        <div class="inner">

                            <div class="icon"><span class="flaticon-password"></span></div>

                            <strong>Call on</strong>

                            <div class="info"><a href="tel:+4488812345">+44 888 12 345</a></div>

                        </div>

                    </div>

                    <!--Info Box-->

                    <div class="info-box">

                        <div class="inner">

                            <div class="icon"><span class="flaticon-contact"></span></div>

                            <strong>Mail at</strong>

                            <div class="info"><a href="mailto:Mail@mygovt.com">Mail@mygovt.com</a></div>

                        </div>

                    </div>

                    <!--Info Box-->

                    <div class="info-box">

                        <div class="inner">

                            <div class="icon"><span class="flaticon-circular-clock"></span></div>

                            <strong>Off hrs</strong>

                            <div class="info">10am to 6pm</div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection
