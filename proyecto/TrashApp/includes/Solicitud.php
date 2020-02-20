<?php include("includes/header.php");?>
	
	<!--CUERPO -->
        <div class="form-group" align="center">
            <h1>REGISTRO DE SOLICITUD</h1>
        </div>
        <div class="modal-dialog" align="center">
    	<div class="col-sm-10">
    		<div class="modal-content">
    			<div class="col-12">
    				<Img src="img/botes.JFIF" width="180" height="120" ></Img>
    			</div>

                <!---------------------->
    			<form class="col-12" action="Agregar_usuario.php" method="POST">
    				<div class="form-group">
    					<input type="text" placeholder="Ubicacion" name="ubicacion" required>	
    				</div>
                    <div class="form-group">
                        <input type="text" placeholder="$00.00" name="precio" required>   
                    </div>
                    <div>
                        <label>Tiempo Estimado </label>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="00:00 hrs" name="tiempo" required>   
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Estado" name="estado" required>   
                    </div>
                    <!------------------------>

    				<input type="submit" class="btn btn-primary" name="registrar" value="Solicitar UberTrash">
                    <input type="button" class="btn btn-secondary" name="cancelar" value="Cancelar" onClick="location.href='Login.php'"> 
    			</form>
    		</div>
    	</div>
    </div>


<?php include("includes/footer.php"); ?>