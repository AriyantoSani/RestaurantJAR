<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('./vendors/homepage/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>RestaurantJAR</title>

    <link rel="icon" type="image/png" href="{{ asset('./images/logo.jpg') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/availability-calendar.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/homepage/css/main.css')}}">
    @yield('css')
</head>

<body>

    <!--================ Start Header Area =================-->
    <header class="header-area">
        <div class="container">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center navbar-expand-md">
                    <div class="col menu-left">
                        <a class="{{ request()->is('home') ? 'active' : '' }}" href="{{ asset('home') }}">Home</a>
                        <a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ asset('about') }}">about</a>
                    </div>
                    <div class="col-3 logo">
                        <a href="{{ asset('home') }}"><img class="mx-auto" src="{{asset('./images/logo.png')}}"
                                alt=""></a>
                    </div>
                    <nav class="col navbar navbar-expand-md justify-content-end">

                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="lnr lnr-menu"></span>
                        </button>

                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
                            <ul class="navbar-nav justify-content-center w-100">
                                <li class="nav-item hide-lg">
                                    <a class="nav-link" href="{{ asset('home') }}">Home</a>
                                </li>
                                <li class="nav-item hide-lg">
                                    <a class="nav-link" href="{{ asset('menu') }}">menu</a>
                                </li>
                                <li class="nav-item hide-lg">
                                    <a class="nav-link" href="{{ asset('about') }}">about</a>
                                </li>
                                <!-- Dropdown -->
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="blog-home.html">Blog</a>
                                        <a class="dropdown-item" href="blog-single.html">Blog Detail</a>
                                    </div>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('gallery') }}">Gallery</a>
                                </li>
                                {{-- <li class="nav-item cta cta-colored"><a href="cart" class="nav-link"><span
                                            class="fa-shopping-cart"></span>[0]</a></li> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--================ End Header Area =================-->

    {{-- <!--================ Start banner Area =================-->
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

    <!--================ Left Right And Banner Icon =================-->
    <div class="go-down">
        <a href="#menu_area">
            <img class="go-down-img" src="{{asset('./vendors/homepage/img/go-down.png')}}" alt="">
    </a>
    </div>
    <div class="fixed-view-menu">
        <p>
            <a href="{{asset('/menu')}}">view menu</a>
        </p>
    </div>
    <div class="fixed-book-table">
        <p>
            <a href="index.html">book a table</a>
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
    </section> --}}
    <!--================End Menu Area =================-->

    <!--================ Gallery Area =================-->
    {{-- <section class="gallery-area">
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
        <a href="img/gallery/g1.jpg" class="photo-gallery-pop-up">
            <span class="lnr lnr-cross"></span>
        </a>
    </div>
    </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-6">
        <div class="single-gallery">
            <div class="overlay"></div>
            <figure>
                <img src="{{asset('./vendors/homepage/img/gallery/g2.jpg')}}" class="img-fluid w-100" alt="">
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
                <img src="{{asset('./vendors/homepage/img/gallery/g3.jpg')}}" class="img-fluid w-100" alt="">
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
                <img src="{{asset('./vendors/homepage/img/gallery/g4.jpg')}}" class="img-fluid w-100" alt="">
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
    </section> --}}
    <!--================ End Gallery Area =================-->

    <!--================ Reservation Area =================-->
    {{-- <section class="reservation-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<form class="booking-form" id="myForm" action="">
						<div class="row">
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="event-name" placeholder="Event Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text">
							</div>

							<div class="input-group col-lg-6 mb-20">
								<input id="event_date" class="form-control datepicker" placeholder="Event Date" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Event Date'" class="form-control" required="" type="text">
								<span class="input-group-append">
									<button class="btn btn-outline-secondary border-left-0 border-0" type="button">
										<i class="fa fa-calendar reservation-calendar"></i>
									</button>
								</span>
							</div>

							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="nice-select app-select form-control " tabindex="0">
									<span class="current">Event Time</span>
									<ul class="list">
										<li data-value="Project you want to donate" data-display="Project you want to donate" class="option selected">Meal
											Preferences</li>
										<li data-value="1" class="option">05pm</li>
										<li data-value="2" class="option">08pm</li>
										<li data-value="3" class="option">09pm</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="nice-select app-select form-control " tabindex="0">
									<span class="current">Number of guests</span>
									<ul class="list">
										<li data-value="Project you want to donate" data-display="Project you want to donate" class="option selected">Number
											of guests</li>
										<li data-value="1" class="option">Number of guests 1</li>
										<li data-value="2" class="option">Number of guests 2</li>
										<li data-value="3" class="option">Number of guests 3</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<input name="budget" placeholder="Budget" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Budget'"
								 class="form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="contact-name" placeholder="Contact Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
								 class="form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="email-address" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
								 class="form-control" required="" type="email">
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="phone-number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
								 class="form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex flex-column">
								<textarea class="form-control" name="post-message" placeholder="Post a message" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Post a message'" required=""></textarea>
							</div>

							<div class="col-lg-12 d-flex justify-content-end">
								<button class="primary-btn dark mt-30 text-uppercase">Send Request</button>
							</div>
							<div class="alert-msg"></div>
						</div>
					</form>
				</div>
				<div class="offset-lg-1 col-lg-4 col-md-6">
					<div class="section-title relative">
						<h1>
							Book a <br>
							Table or <br>
							Rooms for <br>
							private <br>
							dining
						</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
    <!--================End Reservation Area =================-->

    <!--================ Chefs Quotes Area =================-->
    {{-- <section class="chefs-quotes-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							Chef’s <br>
							Quotes
						</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
							enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quotes
						</p>
						<img src="{{asset('./vendors/homepage/img/signature.png')}}" class="img-fluid" alt="">
    </div>
    </div>
    <div class="offset-lg-1 col-lg-6 col-md-6">
        <div class="mt--120">
            <img class="chef-img img-fluid" src="{{asset('./vendors/homepage/img/chefs-quotes.jpg')}}" alt="">
        </div>
    </div>
    </div>
    </div>
    </section> --}}
    <!--================ End Chefs Quotes Area =================-->

    {{-- <!--================ Start Call To Action Area =================-->
    <section class="container section-gap-top">
        <div class="callto-action-area relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 p-0">
                    <div class="cta-owl owl-carousel">
                        <div class="item">
                            <div class="cta-img">
                                <img src="{{asset('./vendors/homepage/img/callaction-bg.jpg')}}" class="img-fluid"
    alt="">
    </div>
    <div class="text-box text-center">
        <h3 class="mb-10">Main Course</h3>
        <p>
            Chicken Steak with gerlic bread & Fries
        </p>
    </div>
    </div>
    <div class="item">
        <div class="cta-img">
            <img src="{{asset('./vendors/homepage/img/callaction-bg.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="text-box text-center">
            <h3 class="mb-10">Main Course</h3>
            <p>
                Chicken Steak with gerlic bread & Fries
            </p>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--================ End Call To Action Area =================--> --}}

    <!--================ Contact Area =================-->
    {{-- <section class="contact-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div id="contactMap"></div>
                </div>
                <div class="offset-lg-1 col-lg-5 col-md-6">
                    <div class="section-title relative">
                        <h1>
                            Rooftop <br>
                            Fine Dinning <br>
                            Restaurant <br>
                        </h1>
                        <div class="mb-40">
                            <p>432 Wyandotte Ave, Lakewood, OH, 44107</p>
                            <p>432 Wyandotte Ave, Lakewood, OH, 44107</p>
                        </div>
                        <div class="mb-40">
                            <p>012 44 (216) 785-9346</p>
                            <p>012 44 (216) 785-9346</p>
                            <p>012 44 (216) 785-9346</p>
                        </div>
                        <div class="mail">
                            <p>info@rooftoprestaurant.co.uk</p>
                            <p>support@rooftoprestaurant.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================ End Contact Area =================-->
    @yield('content')
    <!--================ Start Footer Area =================-->
    <footer class="footer-area section-gap">
        <strong>Copyright &copy; Ariyanto Sani , Roy Parsaoran , Jonathan Bernad</strong>
    </footer>
    <!--================ End Footer Area =================-->
    @yield('js')
    <script src="{{asset('./vendors/homepage/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{asset('./vendors/homepage/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('./vendors/homepage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('./vendors/homepage/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('./vendors/homepage/js/parallax.min.js')}}"></script>
    <script src="{{asset('./vendors/homepage/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('./vendors/homepage/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('./vendors/homepage/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{asset('./vendors/homepage/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('./vendors/homepage/js/main.js')}}"></script>
</body>

</html>
