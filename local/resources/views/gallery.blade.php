@extends('layouts.guestlayout')
@section('content')

    <!--================ Gallery Area =================-->
    <section class="gallery-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 col-sm-6">
                    <div class="single-gallery mt--480">
                        <div class="overlay"></div>
                        <figure>
                            <img src="{{asset('./vendors/homepage/img/gallery/g1.jpg')}}" class="img-fluid w-100"
                                alt="">
                        </figure>
                        <div class="icon">
                            <a href="{{asset('./vendors/homepage/img/gallery/g1.jpg')}}" class="photo-gallery-pop-up">
                                <span class="lnr lnr-cross"></span>
                            </a>
                            aa
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <figure>
                            <img src="{{asset('./vendors/homepage/img/gallery/g2.jpg')}}" class="img-fluid w-100"
                                alt="">
                        </figure>
                        <div class="icon">
                            <a href="img/gallery/g2.jpg" class="photo-gallery-pop-up">
                                <span class="lnr lnr-cross"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5 col-md-5 col-sm-6">
                    <div class="single-gallery mt--280">
                        <div class="overlay"></div>
                        <figure>
                            <img src="{{asset('./vendors/homepage/img/gallery/g3.jpg')}}" class="img-fluid w-100"
                                alt="">
                        </figure>
                        <div class="icon">
                            <a href="img/gallery/g3.jpg" class="photo-gallery-pop-up">
                                <span class="lnr lnr-cross"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <figure>
                            <img src="{{asset('./vendors/homepage/img/gallery/g4.jpg')}}" class="img-fluid w-100"
                                alt="">
                        </figure>
                        <div class="icon">
                            <a href="img/gallery/g4.jpg" class="photo-gallery-pop-up">
                                <span class="lnr lnr-cross"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Gallery Area =================-->


	<!--================ End Gallery Area =================-->
@endsection
