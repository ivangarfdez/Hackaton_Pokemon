<?php

	if(isset($_GET["equipo"])) {
		setcookie("equipo",$_GET["equipo"] );
		require('Model/datos.php');
		require('view/pages/header.php');
		//require('view/pages/carousel.php');
		require('view/pages/vistanoticia.php');

		if(isset($_GET["id"])){
			$noticia=getNoticiaById($_GET["id"]);
			modeloNoticia($noticia["id"],$noticia["titulo"],$noticia["imagen"],$noticia["fecha"],$noticia["nombre"],$noticia["descripcion"],$noticia["valoracion"]);
		}else{
			//cargar 5 ultimsa noticias
			$noticias=obtenerCincoUltimasNoticias();
			foreach ($noticias as $noticia) {
				modeloNoticia($noticia["id"],$noticia["titulo"],$noticia["imagen"],$noticia["fecha"],$noticia["nombre"],$noticia["descripcion"],$noticia["valoracion"]);
			}
		}
		require('view/pages/footer.php');
	}else {
		require('view/pages/inicio.php');
	}

?>
