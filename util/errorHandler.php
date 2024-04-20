<?php

function authError() 
{
		$embeddedhtml = '
		<div class="mensaje-error">
			<i class="fas fa-exclamation-triangle fa-shake"></i>
			<h1 class="mensaje-texto">Error: ¡Autorización fallida!</h1>
			<p>Volviendo a la pagina principal, espere.</p>
		</div>	
		<meta http-equiv="refresh" content="5;URL=../src/index.php">';
		generateFullNotifier($embeddedhtml, 'Error de autorización');
}

function dbError(string $location)
{
	$embeddedhtml = "
    <div class='mensaje-error'>
        <i class='fas fa-exclamation-triangle fa-shake'></i>
        <h1 class='mensaje-texto'>Error: ¡Error en la base de datos!</h1>
        <p>Volviendo a la página inicial, espere.</p>
    </div>    
    <meta http-equiv='refresh' content='5;URL=../src/$location'>";
    generateFullNotifier($embeddedhtml, 'Error en la base de datos');
}

?>