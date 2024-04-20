<?php
session_name('caravan');
session_start(); 

function beginHtml(string $title){
	echo "
	<!DOCTYPE html>
	<html lang='es'>
	<head>
  		<meta charset='UTF-8'>
  		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
  		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
  		<title>$title</title>
  		<script src='https://kit.fontawesome.com/cf7ee57364.js' crossorigin='anonymous'></script>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0' />
		<script type='text/javascript' language='JavaScript' src='../js/reloj.js'></script>
		<script type='text/javascript' language='JavaScript' src='js/funciones.js'></script>
  		<link rel='stylesheet' href='../css/estilo_general.css'>
		  <link rel='stylesheet' href='../css/map.css'>
			
	</head>
	<body onload='mostrarTiempo();'>
		<div class='contenedorPrincipal'>
	";
}

function showHeader(string $type)
{

	if ($type == 'standalone') 
	{
		echo '
		<header class="header">
      		<img src="../img/logo.png" alt="Logo" class="header_img">
     		 <p class="header_p">Caravan: Stressless bus management</p>
			  <span id="tiempo"></span>
    	</header>';
	}
	else if ($type == 'full')
	{
		if ($_SESSION['tipo'] == 1) {
			$cargo = '<i class="fa-sharp fa-solid fa-crown fa-fade" style="color: #f8e45c; font-size: var(--tamano-2);"></i>'."Administrador";
		} else {
			$cargo = '<i class="fa-solid fa-user fa-fade" style="font-size: var(--tamano-2);></i>'."Usuario";
		}
		echo '
		<header class="header">
      		<img src="../img/logo.png" alt="Logo" class="header_img">
     		 <p class="header_p">Caravan: Stressless bus management</p>
			 <span id="tiempo"></span>';
		echo '
			 <span class="tipo_usuario">'.$cargo.'</span>
    	</header>
	';
	}
	
}


function showMain(string $position)
{
	if ($position == 'default') {
		echo '<main class="main --default">';
	} else if ($position == 'centered'){
		echo '<main class="main --centered">';
	}
	
}

function closeMain()
{
	echo '</main>';
}

function showFooter()
{
	echo '

		<footer class="footer">
      		<p>The CHaVeCORP Company, 2024</p>
    	</footer>
	';
}


function endHtml()
{
	// Div del contenedorPrincipal
	echo '</div>';
	echo '</body>';
	echo '</html>';
}


function rellenar_html()
{

	echo '<div onload="mostrarTiempo();">';
	echo '<script type="text/javascript" language="JavaScript" src="js/reloj.js"></script>';
}



function mostrarEncabezadoDatos()
{
	echo '<header class="encabezado">';
	echo '<img src="contenidos/imagenes/britanialogo.gif" alt="Logo" class="encabezado__img">';
	echo '<p class="encabezado__texto">DEPRAG MACHINES UNLIMITED</p>';
	echo '<div class="tiempo-y-rol">';
	if ($_SESSION['tipo'] == 1) {
		echo "<div class='tipo-usuario'><img src='contenidos/imagenes/corona.png' class='tipo-usuario__img'> Administrador</div>";
	} else {
		echo "<div class='tipo-usuario'><img src='contenidos/imagenes/corona.png' class='tipo-usuario__img'> Usuario</div>";
	}
	echo '<div id="tiempo"></div>';
	echo '</div>';

	echo '</header>';
}

function showMenu()
{
	echo '
	<ul class="menu__lista-princ">
				<li class="menu__opcion"><a href="main_panel.php" class="menu__link --inicio"><i class="fa-sharp fa-solid fa-home" style="font-size: var(--tamano-2); padding-right: var(--tamano-med);"></i>Inicio</a></li>
				
				<li class="menu__opcion"><a href="" class="menu__link"><i class="fa-sharp fa-solid fa-bus" style="font-size: var(--tamano-1); padding-right: var(--tamano-med);"></i>Camiones</a>
					<ul class="submenu__opcion"><a href="../src/addBus.php" class="menu__link">Alta</a></ul>
					<ul class="submenu__opcion"><a href="../src/deleteBus.php" class="menu__link">Baja</a></ul>
					<ul class="submenu__opcion"><a href="../src/modifyBus.php" class="menu__link">Modificar</a></ul>	
					<ul class="submenu__opcion"><a href="../src/viewBus.php" class="menu__link">Consultar</a></ul>	
				</li>

				<li class="menu__opcion"><a href="" class="menu__link"><i class="fa-sharp fa-solid fa-id-card-clip" style="font-size: var(--tamano-1); padding-right: var(--tamano-med);"></i>Conductores</a>
					<ul class="submenu__opcion"><a href="../src/addDriver.php" class="menu__link">Alta</a></ul>
					<ul class="submenu__opcion"><a href="../src/deleteDriver.php" class="menu__link">Baja</a></ul>
					<ul class="submenu__opcion"><a href="../src/modifyDriver.php" class="menu__link">Modificar</a></ul>
					<ul class="submenu__opcion"><a href="../src/viewDriver.php" class="menu__link">Consultar</a></ul>
				</li>

				<li class="menu__opcion"><a href="" class="menu__link"><i class="fa-sharp fa-solid fa-route" style="font-size: var(--tamano-1); padding-right: var(--tamano-med);"></i>Rutas</a>
					<ul class="submenu__opcion"><a href="../src/addRoute.php" class="menu__link">Alta</a></ul>	
					<ul class="submenu__opcion"><a href="../src/deleteRoute.php" class="menu__link">Baja</a></ul>
					<ul class="submenu__opcion"><a href="../src/modifyRoute.php" class="menu__link">Modificar</a></ul>		
					<ul class="submenu__opcion"><a href="../src/viewRoutes.php" class="menu__link">Ver rutas</a></ul>		
				</li>

				<li class="menu__opcion"><a href="" class="menu__link"><i class="fa-sharp fa-solid fa-crown" style="font-size: var(--tamano-1); padding-right: var(--tamano-med);"></i>Administradores</a>
					<ul class="submenu__opcion"><a href="../src/addAdmin.php" class="menu__link">Alta</a></ul>	
					<ul class="submenu__opcion"><a href="../src/deleteAdmin	.php" class="menu__link">Baja</a></ul>	
					<ul class="submenu__opcion"><a href="../src/modifyAdmin.php" class="menu__link">Modificar</a></ul>	
					<ul class="submenu__opcion"><a href="../src/viewAdmin.php" class="menu__link">Consultar</a></ul>		
				</li>

				<li class="menu__opcion"><a href="../util/logout.php" class="menu__link --cerrar">Cerrar sesión</a></li>
	</ul>
	';
}

function showArea()
{
	echo '<div class="area-trabajo">';
}

function closeArea()
{
	echo '</div>';
}

function scriptCopyTable(){
	echo '
	<script>
		document.getElementById("copiarTabla").addEventListener("click", function() {
		var tabla = document.getElementById("tabla");
		var range = document.createRange();
		range.selectNode(tabla);
		window.getSelection().removeAllRanges();
		window.getSelection().addRange(range);
		document.execCommand("copy");
		window.getSelection().removeAllRanges();
		
		alert("Tabla copiada al portapapeles.");
		});
	</script>
	';
}

function generatePage(string $embeddedHtml, string $title){
	beginHtml($title);
	showHeader('standalone');
	showMain('default');
	showMenu();
	showArea();

	echo $embeddedHtml;

	closeArea();
	closeMain();
	showFooter();
	endHtml();
}

function generateFullNotifier(string $embeddedHtml, string $htmlTitle){
	beginHtml($htmlTitle);
	showHeader('standalone');
	showMain('centered');

	echo $embeddedHtml;

	closeMain();
	showFooter();
	endHtml();
}

?>