@extends('layout.main')

@section('title')

@endsection

@section('extra-css')
<!-- start here -->
@endsection

@section('extra-styles')
<!-- start here -->


@endsection

@section('content')
<!-- start here -->

<body>


	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p>Diperkenalkan dengan kebanggaan dan inovasi terbaru dari Nike, nike mewakili kombinasi sempurna antara gaya dan kinerja. Dirancang dengan presisi untuk memenuhi kebutuhan atlet modern dan pecinta fashion, sepatu ini memberikan pengalaman yang tak tertandingi dalam setiap langkah.
									</p>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="banner-img">
									<img class="img-fluid" src="global\image\nikeaf.png" alt="">
									@if(session('success'))
									<div class="row">
										<div class="col text-center">
											<div class="alert alert-success" id="welcomeMessage">
												{{ session('success') }}
											</div>
										</div>
									</div>
									@endif
									@if(session('suuccess'))
									<div class="row">
										<div class="col text-left">
											<div class="alert alert-success" id="welcomeMessage">
												{{ session('success') }}
											</div>
										</div>
									</div>
									@endif
									@auth
									@endauth
								</div>
							</div>
						</div>

						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p>Diperkenalkan dengan kebanggaan dan inovasi terbaru dari Nike, Nike mewakili kombinasi sempurna antara gaya dan kinerja. Dirancang dengan presisi untuk memenuhi kebutuhan atlet modern dan pecinta fashion, sepatu ini memberikan pengalaman yang tak tertandingi dalam setiap langkah.
									</p>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start category Area -->


	<!-- start product Area -->
	<div class="row">
		@foreach($produk as $produk)
		<!-- single product -->
		<div class="col-lg-3 col-md-6">
			<div class="single-product">
				<img class="img-fluid" src="{{ asset($produk->gambar1) }}" alt="" data-image="{{ asset($produk->gambar1) }}">
				<div class="product-details">
					<h6>{{ $produk->nama }}</h6>
					<div class="price">
						<h6>Rp{{ $produk->harga }}</h6>
					</div>
					<div class="prd-bottom">
						<a href="{{ route('produk.index', ['id' => $produk->id]) }}" class="social-info">
							<span class="lnr lnr-move"></span>
							<p class="hover-text">view more</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">

				</div>
			</div>
			<div class="col-lg-4  col-md-6 col-sm-6">

			</div>
			<div class="col-lg-3  col-md-6 col-sm-6">

			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">

			</div>
		</div>

	</div>
	</div>
	</footer>

</body>


@endsection

@section('extra-content')
<!-- start here -->



@endsection

@section('extra-js')
<!-- start here -->
@endsection

@section('extra-script')
<!-- start here -->
@endsection