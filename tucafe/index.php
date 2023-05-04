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
				<a href="/motozintla" data-index="3">Chiapas Motozintla | </a>
				<a href="/batzil" data-index="4">Batzil Maya | </a>
				<a href="/colima" data-index="5">Colima | </a>
				<a href="/michoacan" data-index="6">Michoacán | </a>
				<a href="/descafeinado" data-index="7">Descafeinado | </a>
				<a href="/marago" data-index="8">Café Marago</a>
			</center>
		</section>

	<section class="container full" itemscope itemtype="http://schema.org/WebPage">
		<article class="Nosotros__grid" itemtype="about">
			<div class="text-wrapper">
				<h2 class="section-title">Notas de Interés</h2>
				<p>EL MÉTODO DESCAFEINADO SE LOGRA remojando los granos de la variedad de café arábica que suelen tener un menor contenido en cafeína. se empapan primero en agua y después en un disolvente, generalmente cloruro de metileno o acetato de etilo. La cafeína es extraída por el solvente. por medio del calor se hace evaporar el cloruro y se lavan los granos con agua para eliminar cualquier resto. Después se seca el café con aire caliente.</p>
				<p>El acetato de etilo, por su parte, es un éter natural de la fruta, generalmente hecho de ácido acético, el componente básico del vinagre (tiene un olor dulce distintivo).</p>
			</div>
			<div class="text-wrapper">
				<h2 class="section-title">Clasificaciones del Café</h2>
				<p>Conocemos como café lavado a todo aquel café que al momento de cosecharlo en color rojo cereza se despulpa (se le quita la cáscara y la pulpa) y se lava para ponerlo después a secar.</p>
				<p>Este proceso lo utilizan mucho en Veracruz, Chiapas y Oaxaca</p>
				<p>Su sabor es más ácido y más ligero, es ideal para quién desea tomar una taza de café americano o filtrado.</p>
			</div>
			<div class="text-wrapper">
				<h2 class="section-title">Café Natural</h2>
				<img src="/imagenes/tucafe.jpg">
			</div>
			<div class="text-wrapper">
				<h2><br><br><br><br><br></h2>
				<p>La semilla ya madura en color rojo cereza se recolecta y se deja secar en el patio del productor o en una cama de malla para que la semilla absorba las mieles del café y logre sabores más profundos parecidos a la miel, a los frutos negros y a las mermeladas. </p>
				<p>Este proceso lo utilizan los productores de Colima ,Oaxaca y Michoacán</p>
				<p>Las notas del café natural nos gusta relacionarlo con el ponche de frutas, a las mieles y a los frutos rojos. si te gusta tomar el café espresso o con leche este café es el ideal para ti.</p>
			</div>
			<div>
				<h2 class="section-title">Calidades de Café en México</h2>
				<p>El café obtiene una clasificación de acuerdo a la altura en la que los granos son cosechados:</p>
				<p>
					1. Estrictamente altura de 1250 a 1350 msnm<br>
                	2. Alturas mayores a 950 msnm<br>
					3. Extra prima, lavado de 800 a 900 msnm<br>
					4. Prima, lavado de 600 a 950 msnm<br>
					5. Bueno, lavado de 250 a 600 msnm<br>
					6. Lavado a menos de 600 msnm
				</p>
				<p>Por lo tanto la altura tiene un impacto directo en el tamaño, forma y sabor del café que se va a consumir.</p>
			</div>
			<div class="text-wrapper">
				<h2><br><br><br><br><br></h2>
				<img src="/imagenes/altitud.jpg">
			</div>
			<div class="text-wrapper">
				<h2 class="section-title">El Molido</h2>
				<img src="/imagenes/molido.jpg">
			</div>
			<div class="text-wrapper">
				<h2><br><br><br><br><br></h2>
				<p>¡Elige con nosotros el mejor molido para tu café!</p>
				<p>Garantizamos que tu café te lo llevarás fresco, recién tostado y recién molido, encontrarás calidad en tu taza.</p>
			</div>
		</article>
	</section>
	</main>

<?php
	$containing_dir = basename(dirname(__FILE__));
	include '../fotter.php';
?>
