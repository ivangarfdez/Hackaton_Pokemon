<html>
<head>
    <meta charset = "UTF-8"/>
    <title>Pokémon DAW</title>
    <link href='view/css/header.css' rel='stylesheet' type='text/css'>
    <link href='view/css/footer.css' rel='stylesheet' type='text/css'>
    <link href='view/css/login.css' rel='stylesheet' type='text/css'>
    <link href='view/css/carousel.css' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <?php
    if(isset($_GET["id"])){
        echo"<link href='view/css/styleNoticiaDetalle.css' rel='stylesheet' type='text/css'>";
        echo"<link href='view/css/styleMiniNoticiaDetalle.css' rel='stylesheet' type='text/css'>";

    }else{
        echo"<link href='view/css/styleEstructuraNoticia.css' rel='stylesheet' type='text/css'>";
    }
    ?>

</head>

	<body
		<?php
        session_start();
        if(isset($_COOKIE["equipo"])){
            $fondo=$_COOKIE["equipo"];
        }else{
            $fondo="null";
        }
			switch ($fondo) {
				case 'rojo':
				echo "background ='View/img/back_rojo.png'";
				break;
				case 'azul':
				echo "background ='View/img/back_azul.png'";
				break;
				case 'amarillo':
				echo "background ='View/img/back_amarillo.png'";
				break;
				default:
				echo "background ='View/img/amarillo.png'";
			}
		?>
>
		<div>
            <div class="menu">
                <nav>
                    <ul>
                        <li class="imagen"><a href="index.php"><img class='logo' src='View/img/pokemonDAW.png' alt='logo'></a></li>
                        <li class="texto"  onclick="mostrarSoloCategoria('categoria1')">categoria1</li>
                        <li class="texto"  onclick="mostrarSoloCategoria('categoria2')">categoria2</li>
                        <li class="texto"  onclick="mostrarSoloCategoria('categoria3')">categoria3</li>
                    </ul>
                </nav>
                <div id=conjuntoLogin>
                    <?php
                    if (isset($_SESSION['login_user'])){
                        echo "<h5 id=\"sesionModal\">Bienvenido: $_SESSION[login_user]</h5>";
                    }else{
                        echo "<h5 id=\"mostrar\">Login</h5>
                    <div id=\"modal\" class=\"modal\">

                        <span class=\"close\">x</span>

                        <ul>
                            <li id=\"btnlogin\" class=\"activo\">Login</li>
                            <li id=\"btnregistrar\" class=\"\">registro</li>
                        </ul>
						<form action=\"Controller/logueado.php\" id=\"login\" method='post'>
							<input type=\"text\" name=\"correo\" placeholder=\"E-mail\"><br/>
							<input type=\"password\" name=\"pass\" placeholder=\"password\"><br/>
							<input type=\"submit\" name=\"login\" value=\"Entrar\">
						</form>

						<form  action=\"Controller/login.php\" id=\"registro\" method=\"post\">
							<input type=\"text\" name=\"name\" placeholder=\"nombre\"><br/>
							<input type=\"password\" name=\"password\" placeholder=\"password\"><br/>
							<input type=\"text\" name=\"email\" placeholder=\"E-mail\"><br/>
							<input type=\"submit\" name=\"registrar\" value=\"Registrar\">
						</form>";
                    }
                    ?>


					</div>
				</div>
			</div>
		</div>
