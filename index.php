<?php
 require ('header.php');
	session_start();
	$_SESSION['usuario'] = "flaqui";
	$_SESSION['contrasena'] = "flaqui";  
     
     header('Location: home.php');
     require ('footer.php');
    ?>
