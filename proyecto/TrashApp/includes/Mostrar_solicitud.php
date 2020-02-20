<?php
include("includes/header_trabajador.php");
include 'Conexion.php';
if ($con->connect_error){
	die("La conexion falló: " . $con->connect_error);
}
?>
<br>
<div class="col-12">
   	<div class="modal-content" >
        <div class="form-group" align="center">
            <h1>Solicitudes</h1>
        </div>    
    </div>
</div>
<form action="Mostrar_solicitudes.php" method="POST">
<table align="center" border="1">
	<tr>	
		<td>Ubicacion</td>
		<td>Costo</td>
		<td>Tiempo</td>
		<td>Estado</td>
		<td>Usuario</td>
		<td>Acciones</td>
		<td>Acciones</td>
		<td>Acciones</td>
	</tr>
<?php 

	$sql =  "SELECT *
        FROM solicitud";

		$result = mysqli_query($con, $sql);
		while($row = mysqli_fetch_assoc($result)) {
?>
	<tr>		  
		<td><?php echo $row["ubicacion"] ?></td>
		<td><?php echo $row["Costo"] ?></td>
		<td><?php echo $row["Tiempo"] ?></td>
		<td><?php echo $row["Estado"] ?></td>
		<td><?php echo $row["Cliente"] ?></td>
		

	
		

		<td><a class="link_edit" href="Buscar_patente.php?variable=<?php echo $row["Id_patente"];?>">Aceptar</a></td>
		<td><a color="red" href="Buscar_patente.php?variable=<?php echo $row["Id_patente"];?>">Rechazar</a></td>
		<td><a class="link_edit" href="Estado_patente.php?variable=<?php echo $row["Id_patente"];?>">Regresar</a></td>

	</tr>

<?php
}
?>
</table>
</form>
</br>

<?php include("includes/footer.php"); 
?>