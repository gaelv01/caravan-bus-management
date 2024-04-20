<?php

include('../util/tags.php');

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
?>