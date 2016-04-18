<?php
session_start();


require ('conexion.php');

$result = mysql_query("SELECT * FROM canciones  ");

while ($data = mysql_fetch_array($result))
{
    for ($i=0; $i <count($data) ; $i++) { 
    	$titulo = $data['titulo'];
    	$categoria = $data['categoria'];
    	$direccion = $data['direccion'];
    	$direccion = $data['artista'];
    	$autor = $data['usuario'];
    	echo $titulo . "<br />" . $categoria. "<br />" . $direccion. "<br />" . $artista. "<br />" . $autor;
    	break;
    }
    echo '<hr />';
}

?>


<form method="POST" action="crearcancion.php">
	<label>Nombre cancion</label>
	<input type='text' name='titulo'>
	<label>Artista</label>
	<input type='text' name='artista'>
	<label>categoria</label>
	,<select name='categoria'>
		<option value='Adoracion'>Adoracion</option>
		<option value='jubilo'>jubilo</option>
	</select>
	<label>Direccion</label>
	<input type='text' name='direccion'>
	<input type='submit' value='Agregar'>
</form>