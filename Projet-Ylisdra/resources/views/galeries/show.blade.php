<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Panel administrateur</title>
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/style-learn-more.css">
</head>
<body class="big-bg-color">
	<div class="container-fluid big-bg">
		<div class="col-12 p-0">
			<div class="row">
				<img src="img/Pont-Monet.jpg" class="banner">
			</div>
			<div class="row">
				<div class="col-12 p-0">
					<nav class="navbar navbar-expand-lg bg-nav">

						<!--Logo Accueil-->
						<a class="navbar-brand nav-link active text-white" aria-current="page" href="{{route('galeries')}}">Galerie</a>
						<!--menu burger-->
						<button
						class="navbar-toggler"
						type="button"
						data-toggle="collapse"
						data-target="#accueil"
						aria-controls="accueil"
						aria-expanded="true"
						aria-label="Toggle navigation"
						>
						<span class="navbar-toggler-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" /></svg>
							</span>
						</button>
						<div class="collapse navbar-collapse" id="accueil">
							<ul class="navbar-nav">
								<li class="nav-item ">
									<a class="nav-link text-white pl-4" href="#">Dessins</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white pl-4" href="#">Peintures</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white pl-4" href="#">Croquis</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white pl-4" href="#">Projets</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white pl-3" href="#">A Propos</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>

			<!--Contenu-->
			<div class="row">
				<div class="col-12 pt-4 pl-4 pb-3">
					<a class="btn btn-color text-white" href="{{route('galeries')}}">Retour</a>
				</div>
			</div>
			<div class="row row-card">
				<div class="col-12 pl-3">
					<div class="card">
						<img class="card-img-top" src="{{$galerie->emplacement}}" alt="Card image cap">
						<div class="card-body">
							<p class="card-text">{{$galerie->description}}</p>
					</div>
				</div>
			</div>
		</div>		
	</div>
<footer>
	<div class="container-fluid">
		<div class="col-12">
			<div class="row text-center">
				<a href="#" class="m-2 text-white">Conditions d'utilisations</a>
				<a href="#" class="m-2 text-white">Plan du site</a>
				<p class="text-white m-2">develop by Laura Morvan</p>		
			</div>
		</div>
	</div>
</footer>			
</body>
</html>