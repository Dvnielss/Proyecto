<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$apellido=$_POST['apellido'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$direccion=$_POST['direccion'];
	require("../conexion/connect.php");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$apellido','$pass','$mail','$direccion')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='../view/login.php'</script>";
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>