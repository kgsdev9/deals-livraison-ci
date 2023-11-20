<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="KGs informatique" content="kgsinformatique.tech" />
		<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
		<!-- Libs CSS -->
		<link rel="stylesheet" href="{{asset('assets/fonts/feather/feather.css')}}">
		<link rel="stylesheet" href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
		<link rel="Chap" href="lives.ci">
        <link rel="stylesheet" href="http://localhost:8000/backend/plugins/select2/css/select2.min.css">
		<link rel="stylesheet" href="{{asset('assets/select2-bootstrap4.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/select2.min.css')}}">
		<title>@yield('title')</title>
        @livewireStyles
	</head>
	<body class="bg-white">
		<nav class="navbar navbar-expand-lg">
			<div class="container px-0">
				<a class="navbar-brand text-dark" href="#">
					KGS LIVRAISON
					<div class="d-flex align-items-center order-lg-3 ms-lg-3">
						<div class="d-flex align-items-center">
							<a href="{{route('register.livreur')}}" class="btn btn-warning d-none d-md-block">Inscription Livreur</a>
						</div>
						<buttonclass="navbar-toggler collapsed ms-2 ms-lg-0"type="button"data-bs-toggle="collapse"data-bs-target="#navbar-default"aria-controls="navbar-default"aria-expanded="false"aria-label="Toggle navigation">
							<span class="icon-bar top-bar mt-0"></span>
							<span class="icon-bar middle-bar"></span>
							<span class="icon-bar bottom-bar"></span>
						</button>
					</div>
					<!-- Button -->
					<!-- Collapse -->
					<div class="collapse navbar-collapse" id="navbar-default">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
							<li class="nav-item"><a class="nav-link" href="#" >Catalogue livreurs</a></li>
							<li class="nav-item"><a class="nav-link" href="#" >Boutique Pro</a></li>
							<li class="nav-item"><a class="nav-link" href="#" >Course Administratif</a></li>
							<li class="nav-item"><a class="nav-link" href="#">A propos</a></li>
						</ul>
					</div>
				</div>
			</nav>
			@yield('master')
			<!-- footer -->
			<footer class="pt-lg-8 pt-5 footer bg-white">
				<div class="container mt-lg-2">
					<div class="row align-items-center g-0 border-top py-2 mt-6">
						<!-- Desc -->
						<div class="col-lg-4 col-md-5 col-12">
							<span>©<span id="copyright2"><script>                            document.getElementById("copyright2").appendChild(document.createTextNode(new Date().getFullYear()));                        </script></span>Livraison programmation ci</span>
						</div>
						<!-- Links -->
						<div class="col-12 col-md-7 col-lg-8 d-md-flex justify-content-end">
							<nav class="nav nav-footer">
								<a class="nav-link ps-0" href="#">Développé par KGS INFORMATIQUE</a>
								<a class="nav-link px-2 px-md-3" href="#">Les livreurs</a>
								<a class="nav-link" href="#">Terme et conditions</a>
							</nav>
						</div>
					</div>
				</div>
			</footer>
			<!-- Scroll top -->
			<div class="btn-scroll-top">
				<svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
					<path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
				</svg>
			</div>
			<!-- Scripts -->
			<!-- Libs JS -->
			<script src="../../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
			<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
			<script src="../../assets/libs/simplebar/dist/simplebar.min.js"></script>
			<!-- Theme JS -->
			<script src="../../assets/js/theme.min.js"></script>
			<script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
			<script src="../../assets/js/vendors/tooltip.js"></script>
            @livewireScripts
            <script src="{{asset('assets/select2.full.min.js')}}"></script>
            <script>
                $(function() {
                    $('#members').select2({
                        theme: 'bootstrap4',
                    })
                })

		</body>

	</html>
