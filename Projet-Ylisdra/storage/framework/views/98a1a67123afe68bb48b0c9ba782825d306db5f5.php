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
				<img src="img/Pont-Monet.jpg" class="banner">
			</div>
			<div class="row">
				<div class="col-12 p-0">
					<nav class="navbar navbar-expand-lg bg-nav">

						<!--Logo Accueil-->
						<a class="navbar-brand nav-link active text-white" aria-current="page" href="<?php echo e(route('home')); ?>">Retour au panel</a>
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
					</nav>
				</div>
			</div>


            <!--Contenu-->
			<div class="bg-white">
				<div class="row ml-4 mt-2">
					<div class="col-10 p-0">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Mail</th>
									<th scope="col">Pseudo</th>
									<th scope="col">Message</th>
								</tr>
							</thead>
                           
							<tbody>
								<tr>
									<th></th>
									<td></td>
									<td></td>
							</tr>
						</tbody>
                       
						</table>
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
</html><?php /**PATH /home/ylisdra/projet/resources/views/galeries/user.blade.php ENDPATH**/ ?>