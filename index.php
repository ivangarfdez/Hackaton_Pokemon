<?php
if (isset($_GET["equipo"])) {
    setcookie("equipo", $_GET["equipo"]);
    header("location: index.php");
}
if (isset($_COOKIE["equipo"])) {

    require('Model/datos.php');
    require('view/pages/header.php');
    require('view/pages/vistanoticia.php');

    if (isset($_GET["id"])) {
        $noticia = getNoticiaById($_GET["id"]);
        modeloNoticia($noticia["id"], $noticia["titulo"], $noticia["imagen"], $noticia["fecha"], $noticia["nombre"], $noticia["descripcion"], $noticia["valoracion"]);
        echo "<div classs ='relacionadas'>";
        $noticiasmini = getNoticiabyCategoria($noticia["nombre"]);
        foreach ($noticiasmini as $noticia2) {
          modeloMiniNoticia($noticia2["id"],$noticia2["titulo"],$noticia2["imagen"],$noticia2["fecha"],$noticia2["nombre"],$noticia2["descripcion"],$noticia2["valoracion"]);
        }
        echo "</div>";
    } else {
        //cargar 5 ultimsa noticias
        //require('view/pages/carousel.php');

        $noticias = obtenerNoticias();
        foreach ($noticias as $noticia) {
            modeloNoticia($noticia["id"], $noticia["titulo"], $noticia["imagen"], $noticia["fecha"], $noticia["nombre"], $noticia["descripcion"], $noticia["valoracion"]);
        }
    }
    require('view/pages/footer.php');
} else {
    require('view/pages/inicio.php');
}

?>
