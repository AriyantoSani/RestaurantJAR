@extends('layouts.guestlayout')
@section('content')

    <!--================ Start banner Area =================-->
    <section class="home-banner-area relative">
        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="home-banner-content col-lg-5">
                    <h1>Rooftop</h1>
                    <hr>
                    <p>A Fine Dinning Restaurant</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner Area =================-->

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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo
                            consequat.</p>
                        <a href="#" class="primary-btn text-uppercase">See Full Menu</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="menu-list">
                        <h1>Favorite List</h1>
                        <div class="single-menu">
                            <h3>Appetizer</h3>
                            <ul class="list">
                                <li>
                                    <p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
                                    <p>(French bread baguette, cooked ham, potato salad)</p>
                                </li>
                                <li>
                                    <p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
                                    <p>(French bread baguette, cooked ham, potato salad)</p>
                                </li>
                            </ul>
                        </div>

                        <div class="single-menu">
                            <h3>Main Courses</h3>
                            <ul class="list">
                                <li>
                                    <p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
                                    <p>(French bread baguette, cooked ham, potato salad)</p>
                                </li>
                                <li>
                                    <p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
                                    <p>(French bread baguette, cooked ham, potato salad)</p>
                                </li>
                            </ul>
                        </div>

                        <div class="single-menu">
                            <h3>Drinks & Juices</h3>
                            <ul class="list">
                                <li>
                                    <p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
                                    <p>(French bread baguette, cooked ham, potato salad)</p>
                                </li>
                                <li>
                                    <p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
                                    <p>(French bread baguette, cooked ham, potato salad)</p>
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
