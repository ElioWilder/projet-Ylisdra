<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Panel administrateur</title>
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
	<script type="text/javascript">
		function ValidRequest() {
			 let conf = confirm(Voulez-vous vraiment supprimer cette image ?);
			 if(conf == true){
				 alert ("image supprimée");
			 } else {
				 alert ("ok");
			 }
			}
	</script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/style-crud.css">
	
</head>

<body class="big-bg-color big-bg">
	<div class="container-fluid">
		<div class="col-12 p-0">
			<div class="row">
				<img src="/img/Pont-Monet.jpg" class="banner">
			</div>

			<!--Navigation-->
			<div class="row">
				<div class="col-12 p-0">
					<nav class="nav bg-nav">
						<a class="nav-link text-white ml-2" href="">Retour sur le site</a>
						<a class="nav-link text-white" href="<?php echo e(route('home.msg')); ?>">Messages d'utilisateurs</a>
						<a class="nav-link text-white" href="#">Déconnexion</a>
						
					</nav>
				</div>
			</div>

			<!--Contenu-->
			<div class="bg-white">
				<div class="row mt-4 ml-4">
					<div class="col-12 p-0">
						<a class="ml-4 mt-2" href="<?php echo e(route('home.create')); ?>"><h2>Ajouter un nouveau dessin</h2></a>
					</div>
				</div>
				<div class="row ml-4 mt-2">
					<div class="col-10 p-0">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Titre</th>
									<th scope="col" class="d-none d-md-block">Description</th>
									<th scope="col">Catégorie</th>
									<th scope="col">Actions</th>
								</tr>
							</thead>
                            <?php $__currentLoopData = $galeries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galerie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tbody>
								<tr>
									<th><?php echo e($galerie->titre); ?></th>
									<td class="d-none d-md-block"><?php echo e($galerie->description); ?></td>
									<td><?php echo e($galerie->categorie); ?></td>
									<td><a href="<?php echo e(route('home.edit', [$galerie->id])); ?>"><span><svg class="icon-size" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
										<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
									</svg></span></a>
									<form method="POST" action="<?php echo e(route('home.destroy', [$galerie->id])); ?>">
									<?php echo csrf_field(); ?>
									<?php echo method_field("DELETE"); ?>
										
										<button type="submit" class="icon-button" onclick="ValidRequest()"><svg class="icon-size" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
									</svg></button>
									</form>
								</td>
							</tr>
						</tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
					</div>
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
<?php /**PATH /home/ylisdra/projet/resources/views/home.blade.php ENDPATH**/ ?>