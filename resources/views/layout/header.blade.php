<!-- Start Header Area -->
<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="/kategori">Kategori</a></li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
								<li class="nav-item">
									<form action="{{ route('logout') }}" method="post">
										@csrf
										<button type="submit" class="nav-link" style="border: none; background: none; padding: 0; margin: 0;">Logout</button>
									</form>
								</li>
							</ul>


						</li>
				</div>

				</ul>

			</div>
	</div>
	</nav>
	</div>
</header>
<!-- End Header Area -->