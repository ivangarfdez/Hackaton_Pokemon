<html>
	<head>
		<meta charset = "UTF-8"/>
	    <title>Pokémon DAW</title>
	    <link href='view/css/header.css' rel='stylesheet' type='text/css'>
	    <link href='view/css/footer.css' rel='stylesheet' type='text/css'>
	    <link href='view/css/login.css' rel='stylesheet' type='text/css'>
	   	<link href='view/css/carousel.css' rel='stylesheet' type='text/css'>
	   	
	</head>

	<body
		<?php
			switch ($_GET["equipo"]) {
				case 'rojo':
				echo "background ='View/img/rojo.png'>";
				break;
				case 'azul':
				echo "background ='View/img/azul.png'>";
				break;
				case 'amarillo':
				echo "background ='View/img/amarillo.png'>";
				break;
				default:
				echo "";
			}
		?>
		<div>

		  	<a href="index.php"><img class='logo' src='view/img/pokemonDAW.png' alt='logo'></a>
			<div class="menu">
				<nav>
					<ul>
						<li><a href="#">Hacks</a></li>
						<li><a href="#">Financiación</a></li>
						<li><a href="#">Smartwatch</a></li>
					</ul>
				</nav>
				<div id=conjuntoLogin>
					<h5 id="mostrar">Login</h5>
					<div id="modal" class="modal">

						<span class="close">x</span>

						<ul>
							<li id="btnlogin" class="activo">Login</li>
							<li id="btnregistrar" class="">registro</li></ul>

						<form action="asdg.php" id="login">
							<input type="text" placeholder="E-mail"><br/>
							<input type="text" placeholder="password"><br/>
							<input type="submit" name="login" value="Entrar">
						</form>

						<form action="asdg.php" id="registro">
							<input type="text" placeholder="nombre"><br/>
							<input type="text" placeholder="usuario"><br/>
							<input type="text" placeholder="password"><br/>
							<input type="text" placeholder="E-mail"><br/>
							<input type="text" placeholder="fecha nacimiento"><br/>
							<input type="submit" name="registrar" value="registrar">
						</form>

					</div>
				</div>
			</div>
		</div>
