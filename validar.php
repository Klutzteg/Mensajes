<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	
	$sql2=mysqli_query($mysqli,"SELECT * FROM users WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		// if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['tipo']=$f2['tipo'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='enviar.html'</script>";
		
		// }
	}



?>