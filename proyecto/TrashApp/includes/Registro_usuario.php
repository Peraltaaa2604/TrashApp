<?php include("includes/header.php");?>
	
	<!--CUERPO -->
        <div class="form-group" align="center">
            <h1>REGISTRO DE USUARIO</h1>
        </div>
        <div class="modal-dialog" align="center">
    	<div class="col-sm-10">
    		<div class="modal-content">
    			<div class="col-12">
    				<Img src="img/camion.GIF" width="180" height="120" ></Img>
    			</div>

                <!---------------------->
    			<form class="col-12" action="Agregar_usuario.php" method="POST">
    				<div class="form-group">
    					<input type="text" placeholder="Nombre(s)" name="nombre" required>	
    				</div>
                    <div class="form-group">
                        <input type="text" placeholder="Numero de Tarjeta Bancaria" name="t_bancaria" required>  
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Direccion" name="amaterno" required>    
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Telefono" name="telefono" required>
                    </div>
    				<div class="form-group">
    					<input type="password" placeholder="Contraseña" name="contraseña1" required>
    				</div>
    
                    <div class="form-group">
                        <input type="password" placeholder="Comprobar Contraseña" name="contraseña2" required>
                    </div>
                    <!------------------------>

    				<input type="submit" class="btn btn-primary" name="registrar" value="Registrar">
                    <input type="button" class="btn btn-secondary" name="cancelar" value="Cancelar" onClick="location.href='Login.php'"> 
    			</form>
                <div class="col-12">
                    <Img src="img/Homero_camion.GIF" width="300" height="200" ></Img>
                </div>
    		</div>
    	</div>
    </div>


<?php include("includes/footer.php"); ?>