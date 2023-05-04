<?php

$page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
$server_url = "http://" . $_SERVER["SERVER_NAME"] . "/";
$redirect_url = $_SERVER["REDIRECT_URL"];
$redirect_url_array = parse_url($redirect_url);
$end_of_path = strrchr($redirect_url_array["path"], "/");

switch(getenv("REDIRECT_STATUS"))
{
	# "400 - Bad Request"
	case 400:
	$error_code = "400 - Solicitud incorrecta";
	$explanation = "No se pudo entender la sintaxis de la URL enviada por su navegador. Verifica la dirección e inténtalo de nuevo.";
	$redirect_to = "";
	break;

	# "401 - Unauthorized"
	case 401:
	$error_code = "401 - Sin autorización";
	$explanation = "Esta sección requiere una contraseña o está protegida de otra manera. Si cree que ha llegado a esta página por error, vuelva a la página de inicio de sesión y vuelva a intentarlo, o comuníquese con el administrador del sitio web si continúa teniendo problemas.";
	$redirect_to = "";
	break;

	# "403 - Forbidden"
	case 403:
	$error_code = "403 - Prohibido";
	$explanation = "Esta sección requiere una contraseña o está protegida de otra manera. Si cree que ha llegado a esta página por error, vuelva a la página de inicio de sesión y vuelva a intentarlo, o comuníquese con el administrador del sitio web si continúa teniendo problemas.";
	$redirect_to = "";
	break;

	# "404 - Not Found"
	case 404:
	$error_code = "404 - No se encontró";
	$explanation = "El elemento solicitado '" . $page_redirected_from . "' no se pudo encontrar en este servidor. Verifica la dirección e inténtalo de nuevo.";
	break;
}
?>

<!DOCTYPE html>
<head>

	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
<?php
	if ($redirect_to != "")
	{
?>

	<meta http-equiv="Refresh" content="5; url='<?php print($redirect_to); ?>'">
<?php
	}
?>

	<title>Página no encontrada: <?php print ($redirect_to); ?></title>

</head>
<body>

<h1>Código de Error <?php print ($error_code); ?></h1>

<p>La <a href="https://en.wikipedia.org/wiki/URL">dirección o URL</a> solicitada, no ha sido encontrada. <?PHP echo($explanation); ?></p>

<!--<p><strong>Did you mean to type <a href="<?php //print ($redirect_to); ?>"><?php //print ($redirect_to); ?></a>?</strong> You will be automatically redirected there in five seconds.</p>-->

<p>También puedes intentar comenzar desde la página de inicio: <a href="<?php print ($server_url); ?>"><?php print ($server_url); ?></a></p>

<hr />

<p><i>¡Adiós!
<!--A project of <a href="<?php // print ($server_url); ?>"><?php //print ($server_url); ?></a>.</i>--></p>

</body>
</html>
