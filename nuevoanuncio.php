<!DOCTYPE html>
<html>
	<head>
		<title>Nuevo Anuncio</title>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<div>
			<h2>Nuevo anuncio</h2>
			<?php
			$conexion = mysqli_connect ('localhost', 'root', '', 'projecte1_bis');
			if (!$conexion) {
				echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
				echo "Errno de depuración: " . mysqli_connect_errno () . PHP_EOL;
				echo "Error de depuración: " . mysqli_connect_error () . PHP_EOL;
				exit;
			}
			// Variables recogidas del archivo FormularioAnuncio
			$titulo = $_POST["anu_titol"];
			$fecha_robo = $_POST["anu_data_robatori"];
			$ubicacion_robo=$_POST["anu_ubicacio_robatori"];
			$descripcion_robo=$_POST["anu_descripcio_robatori"];
			$marca_bici=$_POST["anu_marca"];
			$modelo_bici=$_POST["anu_model"];
			$color_bici=$_POST["anu_color"];
			$antiguedad_bici=$_POST["anu_antiguitat"];
			$descripcion = nl2br($_POST["anu_descripcio"]);
			$numero_serie=$_POST["anu_numero_serie"];
			$compensacion=$_POST["anu_compensacio"];
			
			// Si se ha subido la imagen entonces la guarda en la carpeta C:\xampp\htdocs\Bikingpoint\img
			if (isset($_FILES['foto']['name'])){

				// Ruta completa destino del servidor Apache
				$dir_subida="C:/xampp/htdocs/Bikingpoint/img/";

				// Ruta completa+archivo 
				$nom_foto=$dir_subida.basename($_FILES['foto']['name']);
				
				// Carpeta img+archivo
				$foto="img/".basename($_FILES['foto']['name']);

				//Creamos una query para insertar en la tabla anunci un anuncio nuevo
				$queryAnuncio="INSERT INTO `anunci` (`anu_titol`,`anu_data_robatori`,`anu_ubicacio_robatori`,`anu_descripcio_robatori`,`anu_marca`,`anu_model`,`anu_color`,`anu_antiguitat`,`anu_descripcio`,`anu_numero_serie`,`anu_foto`,`anu_compensacio`)
				VALUES ('$titulo','$fecha_robo','$ubicacion_robo','$descripcion_robo','$marca_bici','$modelo_bici','$color_bici','$antiguedad_bici','$descripcion','$numero_serie','$foto','$compensacion')";
				
				echo "</br>";
				// Visualizamos la consulta
				echo $queryAnuncio;
				// Lanzamos la query
				$respuestaqueryAnuncio=mysqli_query($conexion,$queryAnuncio);
				if(move_uploaded_file($_FILES['foto']['tmp_name'],$nom_foto)) {
					if(isset($nom_foto)){
						echo "</br>";
						echo '<img src="'.$foto.'" alt="No hay foto" width="20%"';		
					} else {
						echo "Ha habido un error durante el proceso.";
						echo $_FILES['foto']['error'];			
					}

				} else {

				}

			} else {

			}	

			// Creamos una query para buscar el id del anuncio creado anteriormente
			$queryselect="SELECT `anu_id` FROM `anunci` WHERE `anu_titol`='$titulo'";
			$ejecutarselect=mysqli_query($conexion,$queryselect);
			// echo $queryselect;
			// Lanzamos la query
			$queryfetchselect=mysqli_fetch_array($ejecutarselect);
			// La siguiente linea muestra el id_juego del anuncio recién insertado
			echo $queryAnuncio;
			echo "Anuncio numero: $queryfetchselect[0]";
			echo "</br>";

			echo "Anuncio: $titulo</br>"; 
			echo "Descripcion: $descripcion</br>"; 
			echo "Fecha robo: $fecha_robo</br>"; 
			echo "ubicacion robo: $ubicacion_robo</br>";
			echo "</br></br>";
			echo "<a href=formulario_anuncio.php><button type=button>Crear un nuevo anuncio</button></a>";
			header('Location:bicis_robadas.html');
			?>
		</div>
	</body>
</html>