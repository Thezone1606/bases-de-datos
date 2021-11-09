<!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form method="post">
		<h1>Suscribete</h1>
		<input type="tex" name="name" placeholder="Nombre Completo">
		<input type="email" name="email" placeholder="email">
		<input type="submit" name="register">
	</form>
	<?php 
	include("registrar.php");
	 ?>
</body>
</html>