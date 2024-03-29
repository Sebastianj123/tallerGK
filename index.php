<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NEW DOLLS</title>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>

	<style>
		.carousel {
			height: 100%;
		}
	</style>
</head>
<body>
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-xs hidden-sm">TALLER GINA Y KATA </span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="vistas/productos.php">Productos</a></li>
				<li><a href="vistas/loguin.php">Login</a></li>
			</ul>
		</nav>
		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>
	<!--======================================== taller ========================================-->
	<section class="full-reset font-cover" style="background-image: url(assets/img/font-index.jpg);">
		<div class="full-reset" style="height: 100%; background-color: rgba(255,255,255,.6); padding: 60px 0;">
			<h1 class="text-center titles">Taller Gina y Kata </h1>
			<figure class="Logo-Ins-Index">
				<img src="assets/img/logo.jpg" alt="Logo" class="img-responsive">
			</figure>
			<p class="lead text-center">
				
			</p>
		</div>
	</section>
	<div class="divider-general"></div>
	<!--======================================== Video corto & carrusel========================================-->
	<section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
		<div class="container">
			<h1 class="text-center titles">fotos</h1>
			<br><br>
			<!--======================================== Carrusel ========================================-->
			<section class="awSlider position-relative d-flex justify-content-center align-items-center" style="height: 80vh; padding:2rem;">
				<div  class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target=".carousel" data-slide-to="0" class="active"></li>
					<li data-target=".carousel" data-slide-to="1"></li>
					<li data-target=".carousel" data-slide-to="2"></li>
					<li data-target=".carousel" data-slide-to="3"></li>
				  </ol>
			  
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner d-flex justify-content-center align-items-center" role="listbox" style="height: 100%;">

					<div class="item active d-flex justify-content-center align-items-center" style="height: 100%;">
					  <img src="assets/img/virgen.png" class="container-fluid">
					</div>

					<div class="item d-flex justify-content-center align-items-center" style="height: 100%;">
					  <img src="assets/img/muñecos.jpg" class="container-fluid">
					</div>

					<div class="item d-flex justify-content-center align-items-center" style="height: 100%;">
					  <img src="assets/img/papa noel.png" class="container-fluid">
					</div>

					<div class="item d-flex justify-content-center align-items-center" style="height: 100%;">
					  <img src="assets/img/cortinero.png.jpeg" class="container-fluid">
					</div>

				  </div>
			  
				  <!-- Controls -->
				  <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Geri</span>
				  </a>
				  
				  <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">İleri</span>
				  </a>
				</div>
			</section>
		</section>
			
	<!--======================================== Pie de pagina ========================================-->
<?php
	require('vistas/elemets/footer.php');
?>
</body>
</html>