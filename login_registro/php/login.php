<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['loginn'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];
$message='';

// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$sql = "SELECT * FROM login WHERE usuario = '$usuario' and password = '$contrasena'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		// Inicio de sesión exitoso
		echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
		header('location: ../../navs/index.html');
	} else {
		// Credenciales inválidas
		echo '<br><div class="alert alert-danger">Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña </div>';
	
		//echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
