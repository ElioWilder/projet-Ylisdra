<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Page</title>
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

	<link href="/css/style-edit.css" rel="stylesheet">
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
			<div class="container pt-4">
				<div class="row">
					<div class="col-12 bg-white">
						<h4>Editer un dessin</h4>
						<form method="POST" action="<?php echo e(route('home.update', $galerie->id)); ?>">
                        <?php echo csrf_field(); ?> 
                        <?php echo method_field("PUT"); ?>
							<div class="form-group">
								<label for="titre">Titre</label>
								<input type="text" class="form-control" id="titre" name="titre">
							</div>
							<div class="form-group">
								<label for="categorie">Catégories</label>
								<select class="form-control" id="categorie" name="categorie">
									<option>Dessins</option>
									<option>Peintures</option>
									<option>Croquis</option>
									<option>Projets</option>
								</select>
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="description" name ="description" rows="5"></textarea>
							</div>
							<div class="row ml-1">
								<button type="submit" class="btn btn-color text-white pos">Enregistrer</button>
							</div>
						</form>
						
						<a type="button" class="btn btn-color text-white" href="<?php echo e(route('home')); ?>">Retour</a>
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
				<p class="text-white m-2">Site developped by Laura Morvan</p>		
			</div>
		</div>
	</div>
</footer>
</body>
</html><?php /**PATH /home/ylisdra/projet/resources/views/galeries/edit.blade.php ENDPATH**/ ?>