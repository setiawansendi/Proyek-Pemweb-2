<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="icon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{ asset ('landing/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset ('landing/css/tiny-slider.css') }}" rel="stylesheet">
		<link href="{{asset('landing/css/style.css')}}" rel="stylesheet">
		<title>Rental Mobil </title>
	</head>
     
	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-white bg-white" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Rental<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsRental" aria-controls="navbarsRental" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="{{asset('landing/images/user.svg')}}"></a></li>
						
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Rental Mobil <span clsas="d-block"></span></h1>
								<p class="mb-4">rental mobil spesialis layanan sewa mobil terlengkap untuk wilayah Jakarta, Bogor, Depok, Tangerang, Bekasi dan Bandung dengan dukungan mobil terbaru dan driver berpengalaman.</p>
								<p><a href="" class="btn btn-secondary me-2">Daftar Haarga Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{asset('landing/images/sedan.png')}}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Dibuat dengan material yang luar biasa</h2>
						<p class="mb-4"> Ingin merasakan kebebasan menjelajah tanpa ribet membeli dan merawat mobil? Renta solusi tepat untuk Anda! Sewa mobil impian Anda dengan proses cepat, mudah, dan pilihan kendaraan yang beragam.</p>
						<p><a href="daftar-harga.html" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="{{asset('landing/images/sedan.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Sedan</h3>
							<strong class="product-price"> RP.8.500.000/Hari</strong><br>

							<span class="icon-cross">
								<img src="{{asset('landing/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="{{ asset('landing/images/pajero-sport.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">SUV (Sport Utility Vehicle)</h3>
							<strong class="product-price"> RP.10.000.000/Hari :</strong><br>

							<span class="icon-cross">
								<img src="{{asset ('landing/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="{{ asset ('landing/images/alphard-transformer.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Alphard Transformer</h3>
							<strong class="product-price">RP.20.000.000/Hari</strong>

							<span class="icon-cross">
								<img src="{{asset ('landing/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Kami memiliki komitmen untuk memberikan pengalaman menyewa kendaraan yang luar biasa.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img >
									</div>
									<h3>Pengiriman Kendaraan Cepat &amp; Gratis</h3>
									<p>Nikmati pengalaman menyewa kendaraan tanpa kerumitan dengan pengiriman cepat dan gratis.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img >
									</div>
									<h3>Registrasi Harga Sederhana</h3>
									<p>Daftar harga bersama kami menjadi mudah dan sederhana.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img >
									</div>
									<h3>Bantuan Sepanjang Waktu</h3>
									<p>Kami menyediakan dukungan 24/7 untuk memastikan kenyamanan Anda dalam proses penyewaan kendaraan.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img >
									</div>
									<h3>Proses Pengembalian yang Mudah</h3>
									<p>Kami menjamin pengalaman menyewa kendaraan tanpa kesulitan dengan proses pengembalian yang mudah.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="{{asset ('landing/images/pexels.jpg')}}" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="{{asset ('landing/images/mudah1.png')}}" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="{{ asset ('landing/images/mudah2.jpg')}}" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="{{asset ('landing/images/mudah3.jpg')}}" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">Rental Mobil</h2>
						<p>Kami berkomitmen untuk memberikan pengalaman penyewaan yang praktis dan tanpa kerumitan. Dengan berbagai opsi kendaraan dan pelayanan terpercaya, kami hadir untuk memastikan perjalanan Anda berjalan lancar dan memuaskan.</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Lupakan macet, nikmati kemudahan sewa kendaraan online bersama Rental</li>
							<li>Perjalanan bisnis lancar tanpa pusing, rental kendaraan terpercaya ada di Rental</li>
							<li>Dari motor matic hingga truk box, temukan semua kebutuhan sewa kendaraan kamu di Rental</li>
							<li>Ingin liburan dadakan? Sewa mobil dan motor praktis lewat Rental</li>
						</ul>
						<p><a herf="#" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{asset ('landing/images/alphard-transformer.png')}}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Alphard Transformer</h3>
								<p> Jenis kendaraan yang dirancang untuk mengakomodasi kebutuhan keluarga dengan memberikan kenyamanan, ruang, dan fleksibilitas yang tinggi. MPV dikenal sebagai kendaraan serba guna yang mampu mengangkut penumpang dan barang dalam jumlah besar. </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{asset ('landing/images/pajero-sport.png')}}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>SUV (Sport Utility Vehicle)</h3>
								<p>Jenis kendaraan yang dirancang untuk memberikan kinerja yang tangguh baik di jalan raya maupun di medan yang lebih menantang.Karena kemampuannya yang serbaguna, menawarkan kombinasi antara kenyamanan berkendara, ruang kabin yang luas, dan kapasitas kargo yang besar. </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{asset ('landing/images/sport.png')}}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Lamborghini</h3>
								<p>Jenis kendaraan yang dirancang dengan fokus pada kinerja tinggi, akselerasi cepat, dan handling yang superior. Dikenal karena desain aerodinamis dan mesin bertenaga, mobil sport sering kali menjadi simbol prestise dan kesenangan berkendara. </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		
		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">View All Posts</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="{{asset('landing/images/images1.jpg')}}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Bebas Ribet, Nikmati Perjalanan</a></h3>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="{{asset('landing/images/images2.jpg')}}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Bebas Tidak Terlalu Pusing Soal Perawatan</a></h3>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="{{asset ('landing/images/images3.jpg')}}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Sesuaikan Kebutuhan, Sesuaikan Anggaran</a></h3>
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="{{asset ('landing/images/envelope-outline.svg')}}" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Rental<span>.</span></a></div>
						<p class="mb-4">Rental memudahkan Anda untuk menemukan kebebasan berkendara. Nikmati perjalanan Anda dengan kendaraan berkualitas tinggi dan layanan yang handal.</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="{{asset('landing/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('landing/js/tiny-slider.js')}}"></script>
		<script src="{{asset('landing/js/custom.js')}}"></script>
	</body>

</html>
