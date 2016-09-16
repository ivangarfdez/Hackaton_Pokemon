<?php

	if(isset($_GET["equipo"])) {

	require('view/pages/header.php');
	require('view/pages/carousel.php');
	
	require('view/pages/footer.php');

	}else {
		require('view/pages/inicio.php');

	}

?>
