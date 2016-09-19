<?php
function modeloNoticia($id,$titulo, $imagen, $fecha, $categoria, $cuerpo,$valoracion){
    $equipo=$_COOKIE["equipo"];
    echo"
    <div class='estructuraNoticia $categoria'>
    <a href='./index.php?id=$id&equipo=$equipo' style='color:black;text-decoration:none;'>
        <div class='noticiaIzquierda'>
          <img src='".$imagen."' alt='imagen no disponible' class='imgNoticia'/>
        </div>
        <div class='noticiaDerecha'>
          <h3 class='categoriaNoticia'>".$categoria."</h3>
          <h2 class='tituloNoticia'>".$titulo."</h2>
          <p class='fechaNoticia'>".$fecha."</p>
          <p class='cuerpoNoticia'>".$cuerpo."</p>
          <div class='valoracion'>";
    for($i=0;$i<5;$i++){
        if($i<$valoracion){
            echo"<span class='starSelected' >★</a>";
        }else{
            echo"<span class='starSelected' >☆</a>";
        }
    }
    echo "</div>
        </div>
        </a>
    </div>";
}
?>