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

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/dashboard.js') }}"></script>

	<!-- /theme JS files -->
	@yield('javascript')
</head>

<body >

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
					<li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
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


	<!-- Secondary navbar -->
	<div class="navbar navbar-expand-md navbar-light">
		<div class="text-center d-md-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-navigation">
				<i class="icon-unfold mr-2"></i>
				Navigation
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-navigation">
			<ul class="navbar-nav navbar-nav-highlight">
				<li class="nav-item">
					<a href="/dashboard" class="navbar-nav-link active">
						<i class="icon-stats-bars3"></i>
						visualización
					</a>
				</li>

				<li class="nav-item nav-item-levels mega-menu-full">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="mi-build mr-2"></i>
						Mantenimiento
					</a>

					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-4">
									<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Productos</div>
									<div class="dropdown-divider mb-2"></div>
									<div class="dropdown-item-group mb-3 mb-md-0">
										<ul class="list-unstyled">
											<li>
												<a href="/products" class="dropdown-item rounded">
													<i class="icon-cube4"></i>
													Productos
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-item rounded">
													<i class="icon-pencil-ruler"></i>
													Unidades de Medida por Producto
												</a>
											</li>
											<li>
												<a href="/unitmeasure" class="dropdown-item rounded">
													<i class="mi-format-underlined"></i>
													Unidades de Medida
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-item rounded">
													<i class="mi-loyalty"></i>
													Familias de Producto
												</a>
											</li>
											<li>
												<a href="/categories" class="dropdown-item rounded">
													<i class="mi-local-offer"></i>
													Categoría de Producto
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-item rounded">
													<i class="icon-sort-numeric-asc"></i>
													Conversiones
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Entidades</div>
									<div class="dropdown-divider mb-2"></div>
									<div class="dropdown-item-group mb-3 mb-md-0">
										<ul class="list-unstyled">
											<li>
												<a href="/proveedores" class="dropdown-item rounded">
													<i class="icon-user-tie"></i>
													Proveedores
												</a>
											</li>
											<li>
												<a href="/clientes" class="dropdown-item rounded">
													<i class="mi-people"></i>
													Clientes
												</a>
											</li>
											<li>
												<a href="/vendors" class="dropdown-item rounded">
													<i class="mi-face"></i>
													Vendedores
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Inventario</div>
									<div class="dropdown-divider mb-2"></div>
									<div class="dropdown-item-group mb-3 mb-md-0">
										<ul class="list-unstyled">
											<li>
												<a href="#" class="dropdown-item rounded">
													<i class="mi-widgets"></i>
													Inventario
												</a>
											</li>
											<li>
												<a href="/tipogasto" class="dropdown-item rounded">
													<i class="mi-monetization-on"></i>
													Tipo de Gasto
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-item rounded">
													<i class="mi-local-atm"></i>
													Centro de Costo
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item nav-item-levels mega-menu-full">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="mi-import-export mr-2"></i>
						Operaciones
					</a>

					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-4">
									<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Ingresos</div>
									<div class="dropdown-divider mb-2"></div>
									<div class="dropdown-item-group mb-3 mb-md-0">
										<ul class="list-unstyled">
											<li>
												<a href="/vouchers" class="dropdown-item rounded">
													<i class="icon-cart-add2"></i>
													Compras
												</a>
											</li>
											<li>
												<a href="/compras/notascreditorecibidas" class="dropdown-item rounded">
													<i class="icon-enter2"></i>
													Notas de Crédito Recibidas
												</a>
											</li>
											<li>
												<a href="/compras/notasdebitorecibidas" class="dropdown-item rounded">
													<i class="icon-enter"></i>
													Notas de Débito Recibidas
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Salidas</div>
									<div class="dropdown-divider mb-2"></div>
									<div class="dropdown-item-group mb-3 mb-md-0">
										<ul class="list-unstyled">
											<li>
												<a href="/ventas" class="dropdown-item rounded">
													<i class="icon-cart-remove"></i>
													Ventas
												</a>
											</li>
											<li>
												<a href="/ventas/notascreditoemitidas" class="dropdown-item rounded">
													<i class="icon-exit2"></i>
													Notas de Crédito Emitidas
												</a>
											</li>
											<li>
												<a href="/ventas/notasdebitoemitidas" class="dropdown-item rounded">
													<i class="icon-exit"></i>
													Notas de Débito Emitidas
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Otros</div>
									<div class="dropdown-divider mb-2"></div>
									<div class="dropdown-item-group mb-3 mb-md-0">
										<ul class="list-unstyled">
											<li>
												<a href="#" class="dropdown-item rounded">
													<i class="mi-class"></i>
													Notas de Pedido
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-item rounded">
													<i class="mi-attach-money"></i>
													Gastos
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-item rounded">
													<i class="icon-piggy-bank"></i>
													Caja
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<a href="#" class="navbar-nav-link">
						<i class="mi-pie-chart"></i>
						Reportes
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="navbar-nav-link">
						<i class="mi-event-note"></i>
						Kardex
					</a>
				</li>
			</ul>

			<ul class="navbar-nav navbar-nav-highlight ml-md-auto">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="d-md-none ml-2">Settings</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /secondary navbar -->




	<!-- Page content -->
	<!-- Page content -->
	<!-- Page content -->
	<!-- Page content -->
	<!-- Page content -->
	<div id="app" class="page-content pt-0">

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

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
@yield('javascriptfinal')
</html>
