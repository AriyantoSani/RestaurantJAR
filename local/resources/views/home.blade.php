@extends('layouts.guestlayout')
@section('content')

<!--================ Start banner Area =================-->
<section class="home-banner-area relative">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="home-banner-content col-lg-12">
                <h1 align="center">RestaurantJAR</h1>
                <hr>
                <p>A Fine Dinning Restaurant</p>
            </div>
        </div>
    </div>
</section>
<!--================ End banner Area =================-->

<!--================ Left Right And Banner Icon =================-->
<div class="go-down">
    <a href="#menu_area">
        <img class="go-down-img" src="{{asset('./vendors/homepage/img/go-down.png')}}" alt="">
    </a>
</div>
{{-- <div class="fixed-view-menu">
    <p>
        <a href="{{asset('/menu')}}">view menu</a>
    </p>
</div> --}}
<div class="fixed-book-table">
    <p>
        <a href="book">book a table</a>
    </p>
</div>
<!--================ Left Right And Banner Icon =================-->

<!--================ Menu Area =================-->
<section class="menu-area" id="menu_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5">
                <div class="section-title relative">
                    <h1>
                        Daily Food <br>
                        Courses <br>
                        with Drinks
                    </h1>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="menu-list">
                    <h1>Favorite List</h1>
                    <div class="single-menu">
                        <h3>Appetizer</h3>
                        <ul class="list">
                            <li>
                                <p class="menu-item">Salad ............... <span>Rp7.000,00</span></p>
                            </li>
                            <li>
                                <p class="menu-item">Ketoprak ........... <span>Rp7.000,00</span></p>
                            </li>
                        </ul>
                    </div>

                    <div class="single-menu">
                        <h3>Main Courses</h3>
                        <ul class="list">
                            <li>
                                <p class="menu-item">Indomie Goreng ........... <span>Rp8.000,00</span></p>
                            </li>
                            <li>
                                <p class="menu-item">Ayam Goreng .................. <span>Rp10.000,00</span></p>
                            </li>
                        </ul>
                    </div>

                    <div class="single-menu">
                        <h3>Drinks & Juices</h3>
                        <ul class="list">
                            <li>
                                <p class="menu-item">Jus Mangga ........... <span>Rp8.000,00</span></p>
                            </li>
                            <li>
                                <p class="menu-item">Milo ....................... <span>Rp6.000,00</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Menu Area =================-->
@endsection
