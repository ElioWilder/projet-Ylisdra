<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Page</title>
	
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
	<link rel="stylesheet" type="text/css" href="/css/style-create.css">
	
</head>
<body class="big-bg-color big-bg">
	<div class="container-fluid ">
		<div class="col-12 p-0">
			<div class="row">
				<img src="/img/Pont-Monet.jpg" class="banner">
			</div>

			<!--Navigation-->
			<div class="row">
				<div class="col-12 p-0">
					<nav class="nav bg-nav">
						<a class="nav-link text-white ml-2" href="#">Retour sur le site</a>
						<a class="nav-link text-white" href="#">Déconnexion</a>
					</nav>
				</div>
			</div>

			<!--Contenu-->
			<div class="row pt-4 pl-5">
				<div class="col-10 bg-white">
					<h3>Ajouter un dessin</h3>
					<form method="POST" action="{{route('home.store')}}" enctype="multipart/form-data">
                    @csrf
						<div class="form-group">
							<label for="titre">Titre</label>
							<input type="text" class="form-control" id="titre" name="titre" required>
						</div>
						<div class="form-group">
							<label for="categorie">Catégories</label>
							<select class="form-control" id="categorie" name="categorie" required>
								<option>Dessins</option>
								<option>Peintures</option>
								<option>Croquis</option>
								<option>Projets</option>
							</select>
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<textarea class="form-control" id="description" name="description" rows="5" required></textarea>
						</div>
						<div class="form-group">
							<label for="upload">Ajouter une image</label>
							<input type="file" class="form-control-file" id="upload" name="image">
						</div>
						<div class="row ml-1">
							<input type="submit" class="btn btn-color text-white pos" value="Enregistrer">
						</div>
					</form>
					<a type="button" href="{{route('home')}}" class="btn btn-color text-white">Retour</a>
				</div>
			</div>
		</div>
	</div>
<footer>
	<div class="container-fluid">
		<div class="col-12">
			<div class="row text-center">
				<a href="#" class="m-2 text-white">Conditions d'utilisations</a>
				<a href="#" class="m-2text-white">Plan du site</a>
				<p class="text-white m-2">Site developped by Laura Morvan</p>		
			</div>
		</div>
	</div>
</footer>
</body>
</html>