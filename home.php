<?php
require ('header.php');
session_start();


require ('conexion.php');

$result = mysql_query("SELECT * FROM canciones  ");

?>
<div class='container'>
	<div class="table-responsive">
    	<table class="table table-hover">
         <tr>
         	<td>Nombre</td>
         	<td>Artista</td>
         	<td>Estado</td>
         	<td>Categoria</td>
         	<td>Autor</td>
         </tr>
<?php
while ($data = mysql_fetch_array($result))
{
    for ($i=0; $i <count($data) ; $i++) { 
    	$titulo = $data['titulo'];
    	$categoria = $data['categoria'];
    	$url = $data['direccion'];
    	$artista = $data['artista'];
    	$autor = $data['usuario'];
    	//echo $titulo . "<br />" . $categoria. "<br />" . $direccion . "<br />" . $artista. "<br />" . $autor;
    	?>
    	
         <tr>
         	<td><?php echo $titulo; ?></td>
         	<td><?php echo $artista; ?></td>
         	<td><?php echo "$estado"; ?></td>
         	<td><?php echo $categoria; ?></td>
         	<td><?php echo $autor; ?></td>
         </tr>
    	<?php
    	break;
    }
    //echo '<hr />';
}

?>
  </table>
 </div>
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
</div>
<?php require ('footer.php'); ?>