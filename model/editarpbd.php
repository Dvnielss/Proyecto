<?php
extract($_POST);	//extraer todos los valores del metodo post del formulario 
	require("../conexion/connect.php");
	$sentencia="update publicaciones set titulo='$titulo', texto='$texto' where id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location:../view/index2.php");
		
		echo "<script>location.href='../view/index2.php'</script>";
	}else {
		echo '<script>("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../view/index2.php'</script>";

		
	}
?>
