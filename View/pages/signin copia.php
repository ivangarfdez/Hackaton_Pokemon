<!DOCTYPE html>
<html>
<head>
<title>registro</title>
<link rel="stylesheet" type="text/css" href="./Css/styleModal.css">
</head>

<body>

	<button id="mostrar">Open Modal</button>

	<div id="modal" class="modal">
		<span class="close">x</span>

		<form action="asdg.php" id="registro">
			<input type="text" placeholder="nombre"><br/>
			<input type="text" placeholder="usuario"><br/>
			<input type="text" placeholder="password"><br/>
			<input type="text" placeholder="E-mail"><br/>
			<input type="text" placeholder="fecha nacimiento"><br/>
			<input type="submit" name="registrar" value="registrar">
		</form>

		<form action="asdg.php" id="login">
			<input type="text" placeholder="E-mail"><br/>
			<input type="text" placeholder="password"><br/>
			<input type="submit" name="login" value="Entrar">
		</form>
	</div>
	<script src="./Js/modal.js"></script>
</body>
</html>