<?php 
	$x= $_SESSION['id'];
	$titulo=$_POST['titulo'];
	$texto=$_POST['comentario'];
	//$fecha= $_POST['fecha'];
	require("../conexion/connect.php");


//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	
			mysqli_query($mysqli,"INSERT INTO publicaciones VALUES('','$x','$titulo','$texto',NOW())");
			echo "<script>location.href='../view/index2.php'</script>";	
 ?>
