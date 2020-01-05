@extends('layouts.guestlayout')
@section('content')

	<!--================ Start banner Area =================-->
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1>image gallery</h1>
					<hr>
					<div class="breadcrmb">
						<p>
							<a href="index.html">home</a>
							<span class="lnr lnr-arrow-right"></span>
							<a href="gallery.html">gallery</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!--================ Gallery Area =================-->
	<section class="gallery-area section-gap mt-172">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-5 col-sm-6">
					<div class="single-gallery mt--350">
						<div class="overlay"></div>
						<figure>
							<img src="img/gallery/g1.jpg" class="img-fluid w-100" alt="">
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
							<img src="img/gallery/g2.jpg" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="img/gallery/g2.jpg" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-5 col-sm-6">
					<div class="single-gallery mt--155">
						<div class="overlay"></div>
						<figure>
							<img src="img/gallery/g3.jpg" class="img-fluid w-100" alt="">
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
							<img src="img/gallery/g4.jpg" class="img-fluid w-100" alt="">
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
		</div>
	</section>
	<!--================ End Gallery Area =================-->
@endsection
