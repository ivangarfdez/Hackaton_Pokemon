<?php

	if(isset($_GET["equipo"])) {
	require('Model/datos.php');
	require('view/pages/header.php');
	require('view/pages/carousel.php');

//cargar 5 ultimsa noticias

$noticias=obtenerCincoUltimasNoticias();
foreach ($noticia => $noticias) {
	modeloNoticia($noticia.titulo,$noticia.imagen,$noticia.fecha,$noticia.categoria,$noticia.descripcion,$noticia.valoracion);
}
	require('view/pages/footer.php');
	}else {
		require('view/pages/inicio.php');
	}

?>
