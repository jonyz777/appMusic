<?php
   require ('header.php');
	session_start();
	$_SESSION['usuario'] = "flaqui";
	$_SESSION['contrasena'] = "flaqui";  
     
   ?>
   <?php require ('footer.php'); ?>
<script type="text/javascript">
function redireccionar(){
  window.location="home.php";
} 
setTimeout ("redireccionar()", 1000); //tiempo expresado en milisegundos
</script>
