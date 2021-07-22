<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lauras Gallery</title>
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

	<link href="/css/style-index.css" rel="stylesheet">
	
</head>
<body class="big-bg-color big-bg">
	<div class="container-fluid">
		<div class="col-12 p-0 m-0">
			<div class="row">
				<img class="banner" src="img/Pont-Monet.jpg" alt="banner">
			</div>
			<div class="row">
				<div class="col-12 p-0 m-0">
					<nav class="navbar navbar-expand-lg bg-nav">

						<!--Logo Accueil-->
						<a class="navbar-brand nav-link active text-white selector" aria-current="page" href="{{route('galeries.index')}}#">Galerie</a>
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
									<a class="nav-link text-white pl-4" href="#Dessins">Dessins</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white pl-4" href="#Peintures">Peintures</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white pl-4" href="#Croquis">Croquis</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white pl-4" href="#Projets">Projets</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white pl-3" href="{{route('galeries.more')}}">A Propos</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!--Contenu-->
			<div class="container">

				<div class="row row-card" id="cards">
                @foreach($galeries as $galerie)
					<div class="position-relative card-pos p-0 mb-3" data-categorie="{{$galerie->categorie}}">
						<div class="card card-style">
							<!--<img src="{{Storage::disk('uploads')->url($galerie->id)}}" class="card-img-top" alt="Meow">-->
							<img src="{{$galerie->emplacement}}" class="card-img-top img-size" alt="Meow">
							<div class="card-body bg-card">
								<h5 class="card-title">{{$galerie->titre}}</h5>
								<span class="pos">
									<a href="{{route('galeries.show', [$galerie->id])}}" class="btn btn-color text-white btn-size">PLUS</a>
								</span>
							</div>
						</div>
					</div>
				@endforeach
                </div>
				<!--Pagination-->
				

				<div class="row row-pag">
					<div class="position-relative pag-pos mt-3 p-0">				
						<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active" aria-current="page">
									<a class="page-link" href="#">2</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Suivant</a>
								</li>
							</ul>
						</nav>
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
		</div>	
	</div>

</body>
</html>