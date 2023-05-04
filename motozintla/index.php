<?php
	$containing_dir = basename(dirname(__FILE__));
	//include '../dbconnect.php';
	include '../head.php';
?>

	<main class="main" id="main">
		<!--<section class="banner full">
			+picture('home/home01', 'Pan con cafe La Cochera')<img src="/img/home/home01.jpg" alt="Pan con cafe La Cochera">
		</section>-->
		<section class="main-section container full">
			<center>
				<a class="active" href="/veracruz" data-index="0">Veracruz | </a>
				<a href="/caracol" data-index="1">Caracol | </a>
				<a href="/mezcla" data-index="2">Mezcla | </a>
				<a class="active" href="/motozintla" data-index="3">Chiapas Motozintla | </a>
				<a href="/batzil" data-index="4">Batzil Maya | </a>
				<a href="/colima" data-index="5">Colima | </a>
				<a href="/michoacan" data-index="6">Michoacán | </a>
				<a href="/descafeinado" data-index="7">Descafeinado | </a>
				<a href="/marago" data-index="8">Marago</a>
			</center>
		</section>

		<section class="container full">
			<div class="Inicio__grid">
				<div class="Inicio__img nomobile">
					<!--+picture('home/home02', 'Pan La Cochera')--><img src="./1.jpg" alt="Cafe">
				</div>
				<div class="Inicio__text">
					<h2 class="section-title">Chiapas Motozintla</h2>
						<p>Reconocido por su excelente calidad, encontramos en su fragancia y aroma, notas y toques cítricos intensos, se percibe alta acidez, su sabor es muy agradable y dulce, con poca astringencia, pero equilibrado con apreciable cuerpo.</p>
						<p>Tipo de tueste: Medio.<br><img src=/imagenes/tuestemedio.png></p>
				</div>
			</div>
		</section>
		<section class="banner right">
			<img src="./2.jpg" alt="Cafe">
		</section>
	</main>

<?php
	$containing_dir = basename(dirname(__FILE__));
	include '../fotter.php';
?>
