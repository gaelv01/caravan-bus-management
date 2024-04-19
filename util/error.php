<?php
session_name('caravan'); 
session_start();
function authError() 
{
	
	beginHtml('Error');
	showHeader('standalone');
	showMain('centered');
		echo '
		<div class="mensaje-error">
			<i class="fas fa-exclamation-triangle fa-shake"></i>
			<h1 class="mensaje-texto">Error: ¡Autorización fallida!</h1>
			<p>Volviendo a la pagina principal, espere.</p>
		</div>	
		';
		echo '<meta http-equiv="refresh" content="5;URL=index.php">';
	closeMain();
	showFooter();
	endHtml();
}
?>