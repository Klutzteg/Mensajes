<?php
 	$link =mysqli_connect("localhost","root","");
 	if ($link) {
 		mysqli_select_db("db",$link);
 	}
 ?>