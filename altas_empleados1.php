<?php
session_name('deprag'); 
session_start(); 
require('conexiondeprag.php');
include('errores.php');
include('tags_html.php');

# Script que permite validar los datos ingresados en el alta de usuarios, para posteriormente ser agregados a la tabla. #

# Validar si la autorización del administrador es correcta.
if ($_SESSION['autorizacion'] == 1 and $_SESSION['tipo'] == 1)  {

    # Guardar los argumentos GET en variables para manipularse en la base de datos.
	$nombre = $_GET['nombre'];
    $id = $_GET['id'];
    $huella = $_GET['huella'];
    $huella1 = $_GET['huella1'];

	inicio_html();
	mostrarEncabezado(1);
	mostrarMain(false);

    # Validar si los argumentos seleccionados no están vacíos.
	if ($nombre == '' or $id == '' or $huella == '') {
		echo "<meta http-equiv='refresh' content='4;URL=altas_empleados.php'>";		/*meta para refrescar la pagina */
		echo '
			<span class="mensaje --error">
				<i class="fas fa-exclamation-triangle fa-shake" style="font-size: var(--tamano-3);"></i>
				<p>¡Debe de rellenar todos los campos! Volviendo...</p>
			</span>
			';
		cerrarMain();
		mostrarPiePagina();
		fin_html();
	}
	# De otro modo, guardar los argumentos a la base de datos.
	# Por definición, al dar de alta a un empleado nuevo, implicará que este ya sea activo por defecto.
	else {

		$sql = "INSERT INTO empleados (nombre, id, huella, huella1, status) 
				VALUES ('$nombre', $id, $huella, $huella1, 1)";
		$result = mysqli_query($enlace, $sql);
        
        # Notificar el éxito de la operación.
		echo '
			<span class="mensaje --salida">
				<i class="fa-sharp fa-solid fa-user-plus fa-beat-fade" style="font-size: var(--tamano-3);"></i>
				<p>Se ha agregado a '.$nombre.' exitosamente.<br> Espera un momento.</p>
			</span>	
		';
		echo "<meta http-equiv='refresh' content='2;URL=consultas_empleados.php'>";
	} 

	cerrarMain();
	mostrarPiePagina();
	fin_html();
}
# En dado caso de que la autorización sea violada, o no sea la adecuada, ejecutamos el error de autorización.
else {
	$_SESSION['autorizacion'] = 0;
	error_autorizacion();
} /*fin de else*/
?>