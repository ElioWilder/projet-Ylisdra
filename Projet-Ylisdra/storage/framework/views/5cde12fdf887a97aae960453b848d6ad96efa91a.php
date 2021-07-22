<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>A propos</title>
	
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
	<link rel="stylesheet" type="text/css" href="/css/style-a-propos.css">
	
</head>
<body class="big-bg-color big-bg">
	<div class="container-fluid">
		<div class="col-12 p-0">
			<div class="row">
				<img src="/img/Pont-Monet.jpg" class="banner">
			</div>
			<div class="row">
				<div class="col-12 p-0">
					<nav class="navbar navbar-expand-lg bg-nav">

						<!--Logo Accueil-->
						<a class="navbar-brand nav-link active text-white" aria-current="page" href="<?php echo e(route('galeries.index')); ?>">Galerie</a>
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
									<a class="nav-link text-white pl-3" href="<?php echo e(route('galeries.more')); ?>">A Propos</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>

			<!--Contenu-->
		<div class="row">
			<div class="container">
				<div class="col-12 bg-white mt-4">
					<h1>A Propos de moi</h1>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, aliquid tempora quod nisi odit illo aspernatur? 
					Enim ad dolorem, labore praesentium suscipit impedit, fugiat at iusto molestiae quos ullam! Assumenda.
					</p>

					<h1>A propos de ce site</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aliquam impedit quas, eveniet provident repellendus! Labore, soluta? 
					Maxime sapiente eaque consectetur labore praesentium tempora porro iusto corrupti, ut cum voluptas?
					</p>

					<h1>Me contacter</h1>
					
					<form class=" p-3" method="POST" action="">
					<?php echo csrf_field(); ?>
  						<div class="form-group">
    						<label for="mail">Adresse Mail</label>
    						<input type="email" class="form-control" placeholder="exemple@exemple.com" name="mail">
  						</div>
  						<div class="form-group">
    						<label for="pseudo">Pseudo</label>
    						<input type="text" class="form-control" name="pseudo">
  						</div>
						<div class="form-group">
    						<label for="message">Message</label>
    						<textarea class="form-control" id="description" name ="message" rows="5"></textarea>
  						</div>
  						<div class="form-check">
    						<input type="checkbox" class="form-check-input" name="rgpd">
   							<label class="form-check-label" for="rgpd">J'accepte les conditions d'utilisations</label>
  						</div>
  						<button type="submit" class="btn btn-color">Valider</button>
					</form>
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
</html><?php /**PATH /home/ylisdra/projet/resources/views/galeries/more.blade.php ENDPATH**/ ?>