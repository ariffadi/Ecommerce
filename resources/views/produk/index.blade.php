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

<!-- resources/views/produk/index.blade.php -->

<body>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="{{ route('home.index') }}">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset($produk->gambar1) }}" alt="" data-image="{{ asset($produk->gambar1) }}">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset($produk->gambar2) }}" alt="" data-image="{{ asset($produk->gambar2) }}">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset($produk->gambar3) }}" alt="" data-image="{{ asset($produk->gambar3) }}">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{ $produk->nama }}</h3>
						<h2>Rp {{$produk->harga}}</h2>
						<ul class="list">
							<li><a href="#"><span>Stok</span> : {{ $produk->stok }}</a></li>
						</ul>
						<p>deskripsi:
						<h6>{{ $produk->deskripsi }}</h6>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->



	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->



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