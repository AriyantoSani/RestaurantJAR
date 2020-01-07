@extends('layouts.guestlayout')
@section('content')
	<!--================ Start banner Area =================-->
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1>about us</h1>
					<hr>
					<div class="breadcrmb">
						<p>
							Creator
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!--================ About Area =================-->
	<section class="about-area section-gap-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="">
						<img class="img-fluid" src="http://localhost/RestaurantJAR/./images/logo.png" alt="" width="400px">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							About
						</h1>
						<p>
							Website ini dibuat oleh Ariyanto Sani, Roy Parsaoran, dan Jonathan Bernad sebagai
							syarat untuk memenuhi nilai mata kuliah Pemrograman Web 2.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Call To Action Area =================-->
	<section class="container section-gap-top">
		<div class="callto-action-area relative">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12 p-0">
					<div class="cta-owl owl-carousel">
						<div class="item">
							<div class="cta-img">
								<img src="img/callaction-bg.jpg" class="img-fluid" alt="">
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
								<img src="img/callaction-bg.jpg" class="img-fluid" alt="">
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
	<!--================ End Call To Action Area =================-->

	<!--================ Chefs Quotes Area =================-->
	<section class="chefs-quotes-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="section-title relative">
						<h1>
							Chef’s <br>
							Quotes
						</h1>
						<p>
							"Seorang koki sejati tidak akan pernah membuang-buang bahan makanan yang tersisa" -Kafka Febianto<br><br>

							"Jangan pernah membuat kebisingan ketika sedang makan makananmu" -Avinash<br><br>

							"Semua orang sudah tau bahwa seorang koki yang banyak bicara di dapur itu, tidak punya kemampuan!" -Zaldy Auw
						</p>
						<img src="" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6 col-md-6">
					<div>
						<img class="chef-img" src="https://gastronomyaficionado.files.wordpress.com/2014/09/yono-purnomo-1.jpg?w=1200" class="img-fluid" alt="" width="500px">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Chefs Quotes Area =================-->
@endsection
