<?php  
	require_once 'core/init.php';

	if(!Session::exists("loginTrue") OR !Session::get("loginTrue") ){
		Session::logout();
		header("Location: login.php");
	}

	if(Session::exists("ok")){
		echo Session::flash("ok");
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pantalla de Inicio</title>
</head>
<body>
	<h1>Sistema ProyUtn</h1>
	<h2>Un ABM de Productos</h2>
	<a href="listar_productos.php">Listar Productos</a>
	<br>
	<a href="agregar_producto.php">Agregar Productos</a>
	<br>
	<a href="listar_usuarios.php">Listar Usuarios</a>
	<br>
	<a href="agregar_usuario.php">Agregar Usuarios</a>
	<br>
	<a href="salir.php">Salir</a>
</body>
</html>