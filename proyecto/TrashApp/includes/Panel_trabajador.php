<?PHP include'includes/header_trabajador.php' ?>

<!----------termino nav bar----------------->
  <div class="conteiner">
  <section class="main row">
    <article class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, a ipsam incidunt consectetur dolores illum animi nobis veniam ducimus harum temporibus vel suscipit non sed modi voluptatum quisquam ipsa sit.
      </p>
    </article>
    <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-3">
      <div align="center">
        <Img src="IMG/avatar.png"></Img>
      </div>
      <div class="dropdown" align="center">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Bienvenido 
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <h6 class="dropdown-header"><?php echo $_SESSION['Email']?></h6>
            <a class="dropdown-item" href="Editar_perfil.php">Editar perfil</a>
            <a class="dropdown-item" href="#">Cambiar foto</a>
            <a class="dropdown-item" href="logout.php">Cerrar Sesion</a>
          </div>
        </div>      
    </div>
  </section>    
</div>
<div class="container" align="center"> 
  <div class="row">
    <div class="col-md-6">
      <a href=""><h3>Solicitudes</h3></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias laboriosam reprehenderit corporis ullam sunt velit facilis odio, accusamus optio expedita vero alias ad fugiat, quisquam. Odio, soluta modi illo necessitatibus.</p>
    </div>
    <div class="col-md-6">
      <a href=""><h3>Pendientes</h3></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi odio fuga delectus fugit, aperiam tempora dolorum cumque. Fuga facilis numquam ducimus velit, quia laboriosam quisquam dolores accusantium repellendus asperiores, consequatur!</P>
    </div>
  </div>
</div>
<!-- --------------------------------------------------------------------------------------------------------------------------- -->

<?php include'includes/footer.php'?>