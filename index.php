<?php
if (isset($_GET["equipo"])) {
    setcookie("equipo", $_GET["equipo"]);
    header("location: index.php");
}
if (isset($_COOKIE["equipo"])) {

    require('Model/datos.php');
    require('view/pages/header.php');
    require('view/pages/carousel.php');
    require('view/pages/vistanoticia.php');

    if (isset($_GET["id"])) {
        $noticia = getNoticiaById($_GET["id"]);
        modeloNoticia($noticia["id"], $noticia["titulo"], $noticia["imagen"], $noticia["fecha"], $noticia["nombre"], $noticia["descripcion"], $noticia["valoracion"]);
        echo "<div classs ='relacionadas'>";
        modeloMiniNoticia($noticia["id"],$noticia["titulo"],$noticia["imagen"],$noticia["fecha"],$noticia["nombre"],$noticia["descripcion"],$noticia["valoracion"]);
        modeloMiniNoticia($noticia["id"],$noticia["titulo"],$noticia["imagen"],$noticia["fecha"],$noticia["nombre"],$noticia["descripcion"],$noticia["valoracion"]);
        echo "</div>";
    } else {
        //cargar 5 ultimsa noticias
        $noticias = obtenerCincoUltimasNoticias();
        foreach ($noticias as $noticia) {
            modeloNoticia($noticia["id"], $noticia["titulo"], $noticia["imagen"], $noticia["fecha"], $noticia["nombre"], $noticia["descripcion"], $noticia["valoracion"]);
        }
    }
    require('view/pages/footer.php');
} else {
    require('view/pages/inicio.php');
}

?>
