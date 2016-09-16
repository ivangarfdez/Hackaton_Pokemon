<html>
	<head> 
		<meta charset = "UTF-8"/>
	    <title>Pokémon DAW</title>
	    <link href='view/css/header.css' rel='stylesheet' type='text/css'>
	    <link href='view/css/footer.css' rel='stylesheet' type='text/css'>
	    <link href='view/css/login.css' rel='stylesheet' type='text/css'>
	   	<link href='view/css/login.css' rel='stylesheet' type='text/css'>
	   	<link href='view/css/carousel.css' rel='stylesheet' type='text/css'>
	   	<link href='view/css/carousel.js' rel='stylesheet' type='text/css'>

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
						<li class="alex">Login<a href="#">  </a></li>
					</ul>
				</nav>
			</div>
		</div>

