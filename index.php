<?php

	if(isset($_GET["equipo"])) {
	require('Model/datos.php');
	require('view/pages/header.php');
	require('view/pages/carousel.php');
	require('view/pages/vistanoticia.php');

//cargar 5 ultimsa noticias

$noticias=obtenerCincoUltimasNoticias();

foreach ($noticias as $noticia) {

modeloNoticia($noticia["titulo"],$noticia["imagen"],$noticia["fecha"],$noticia["nombre"],$noticia["descripcion"],$noticia["valoracion"]);
}
	require('view/pages/footer.php');
	}else {
		require('view/pages/inicio.php');
	}

?>
