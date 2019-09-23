<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SICPA - V2</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('global_assets/css/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<style>
        html, body {
            font-family: 'consolas', sans-serif;
            background-image: url("{{asset('global_assets/images/backgrounds/seamless.png')}}");
        }
        .dropdown-item-group{
        	height: 221px;
        }
    </style>
	@yield('css')
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/slinky.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/ripple.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/switch.min.js') }}"></script>

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/form_checkboxes_radios.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/login.js') }}"></script>

	<!-- /theme JS files -->
	@yield('javascript')
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark" style="background-color: #303030">
		<div class="navbar-brand wmin-0 mr-5">
			<a href="./home" class="d-inline-block">
				<img src="{{asset('Images/logo2.png')}}" alt="AGROIMPORT">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
			</ul>



			<ul class="navbar-nav ml-md-auto">
				@if (Auth::guest())
					<li><a class="navbar-nav-link" href="{{ route('login') }}">INICIAR SESIÓN</a></li>
                    <li><a class="navbar-nav-link" href="{{ route('register') }}">REGISTRATE</a></li>
				@else
					<li class="nav-item dropdown dropdown-user">
						<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('Images/profile.jpg')}}" class="rounded-circle mr-2" height="34" alt="">
							<span>{{ Auth::user()->name }}</span>
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a href="{{ route('logout') }}" class="dropdown-item"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-switch2"></i> Cerrar Sesión</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
						</div>
					</li>
				@endif
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main content -->
		<div class="content-wrapper">

			@yield('content')

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light">
		<div class="text-center d-lg-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
				<i class="icon-unfold mr-2"></i>
				Footer
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; 2019 - 2020. <a href="#">SICPA-V2</a> by <a href="#">Deyvy Morochara Y.  -  Michael Huahuasoncco P.</a>
			</span>

			<ul class="navbar-nav ml-lg-auto">
				<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
				<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
				<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
			</ul>
		</div>
	</div>
	<!-- /footer -->

</body>
@yield('javascriptfinal')
</html>
