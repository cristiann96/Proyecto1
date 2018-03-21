<?php
	session_start();
?>

<?php
	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "";
	$db_name = "prueba";
	$tbl_name = "usuari";

	$conexion= mysqli_connect($host_db, $user_db, $pass_db, $db_name);

		if (!$conexion) { //la exclamacion es para negar, es decir para hacer un if not
				echo "Error: No se puedo conectar a MYSQL." . PHP_EOL;
				echo "Errno de depuracion: " . mysqli_connect_errno() . PHP_EOL;
				echo "Error de depuracion. " . mysqli_connect_error() . PHP_EOL;
				exit;
			}
	$usuario = $_GET['username'];
	$password = $_GET['password'];
	$nombre = $_GET['firstname'];
	$apellido = $_GET['lastname'];
	$email = $_GET['email'];
	$telefono = $_GET['phone'];
	$direccion = $_GET['address'];
	//$password = md5($password);


	if (isset($_GET["usuario"]))
		{
		$sql = "SELECT * FROM `usuari` WHERE `nom_usuari` = '".$usuario."'";
		$sqlusuario = mysqli_query($conexion, $sql);
		$filas=mysqli_num_rows($sqlusuario);
		$row=mysqli_fetch_array($sqlusuario);
			$queryAlta="INSERT INTO `usuari` (`u_nom_usuari`,`u_contrasenya`,`u_nom`,`u_cognom`.`u_mail`,`u_direccio`,`u_telefon`) 
			VALUES ('$usuario','$password','$nombre','$apellido', '$email','$direccion','$telefono')";
			echo "$queryAlta </br>";
			$insertusuarios=mysqli_query($conexion,$queryAlta);
			if (!$insertusuarios){
				echo "El usuario que has introducido ya existe"; //. mysqli_error($conexion) . PHP_EOL;
				echo "</br>Error Numero: " . mysqli_errno($conexion) . PHP_EOL;
				echo "</br> <a href='formregistro.html'>Haz clic aqui para registrarte</a>";
				echo "</div>";
				exit;
			}

			echo "Gracias por registrarte.";

		 	header('Location:bicis_robadas.php');

		}

	mysqli_close($conexion);

?>