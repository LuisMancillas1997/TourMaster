<h2 align="center">Iniciar sesion </h2>

<?php include("conexion.php"); ?>

<form action="<?php echo APP_URL; ?>plusbusiness/index.html" method="POST">
<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<p>
	    <label for="username">Username:</label>
		<input type="text" placeholder="&#50883; Username" name="username">
	</p>
	<p>
	    <label for="username">password:</label>
		<input type="password" placeholder="&#128477; password" name="password">
	</p>
	<p>
		<input type="submit" value="Login"  src="plusbusiness/index.html">
		<input type="submit" value="Registrarse" >

	</p>
</form>