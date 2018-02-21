<?php
    require("connect.php");

    $mensaje=$_POST['mensaje'];
    $id_paciente=$_POST['id_paciente'];
    $sql = "insert into messages values (" + $_SESSION['id'] + ", '" + $mensaje+ "', "+ $id_paciente+")";

    mysqli_query($mysqli,"SELECT * FROM users WHERE email='$username'");

    
