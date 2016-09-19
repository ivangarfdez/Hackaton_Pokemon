<?php
session_start();
	define('DB_SERVER','54.70.107.235');
	define('DB_DATABASE','DAWPOKEMONGO');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
	$mycorreo=mysqli_real_escape_string($db,$_POST['correo']);
	$mypassword=mysqli_real_escape_string($db,$_POST['pass']);
	$passwordSecure=md5($mypassword);
	$sql="SELECT id FROM Usuario WHERE email='$mycorreo' and password='$passwordSecure'";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active=$row['active'];
	$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{
		session_register("myusername");
		$_SESSION['login_user']=$myusername;

		header("location: index.php&equipo=amarillo");
	}
	else
	{
		$error="Your Login Name or Password is invalid";
	}
}
	if(isset($_GET["equipo"])){
		setcookie("equipo",$_GET["equipo"]);
		header("location: index.php");
	}
	if(isset($_COOKIE["equipo"])) {

		require('Model/datos.php');
		require('view/pages/header.php');
		require('view/pages/carousel.php');
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
