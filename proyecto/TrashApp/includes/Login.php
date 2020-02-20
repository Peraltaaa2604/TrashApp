
<script language="javascript">
        function direcciona(opc){
            if(document.forms[0].email.value.length < 1){
                 alert("Proporcione Correo");
            }else if(document.forms[0].contraseña.value.length < 1){
                 alert("Proporcione Contraseña");
            }
             else {
                switch (opc) {
                    case 1: document.forms[0].action = "User.php";
                            break;
                }
                document.forms[0].submit();
            }
        }
    </script>
<?php include("includes/header.php"); ?>	
	<!--CUERPO -->
    <div class="modal-dialog" align="center">
    	<div class="col-sm-8">
    		<div class="modal-content">
    			<div class="col-12">
    				<Img src="IMG/tenor.GIF">
    			</div>
                <!-------------------->
    			<form class="col-12 " action="Login.php" method="POST">
    				<div class="form-group">
    					<input type="email" placeholder="Nombre de Usuario" name="nombre" required>	
    				</div>
    				<div class="form-group">
    					<input type="password" placeholder="Contraseña" name="contraseña" required>
    				</div>
                <!-------------------->    
                    <input type="button" class="btn btn-primary" name="Iniciar" onclick="direcciona(1)" value="Iniciar">
                    <input type="button" class="btn btn-secondary" name="registrar" value="Registrar" onClick="location.href='Registro_usuario.php'">
                     
    			</form>
    		</div>
    	</div>
    </div>
    


<?php include("includes/footer.php"); ?>