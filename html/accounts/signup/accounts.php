<?php
/* Pagina de registro para el administrador
 *Los nombres de los formularios para cada caja de texto son:
* Nmbres(s) -> nombres
* Apellidos -> apellidos
* Nombre de usuario -> username
* Correo electronico -> email
* Contraseña -> pass
* Confirmar Contraseña -> confpass
*/
?>
<?php include(HTML_DIR . 'overall/header.php'); ?>
<?php include(HTML_DIR . 'overall/topnav.php'); ?>

<style>
    .complements {
        background: #211919;
    }
</style>
<body>
    <div class="complements">
    <br><br><br>
    </div>

<br>

 <div class="container-fluid">   
<center><h1 class="text-info"><small>Crea tu cuenta de administrador</small></h1></center>
     <br>
     
    </div>
<div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <p><center><h5 class="text-muted"><small>Accede a todos los servicios solo con un nombre de usuario y una contraseña</small></h5>
              <br>
              <h4 class="text-muted">Siempre estara disponible</h4><br>
              <h6 class="text-muted">Cambia de dispositivo y continua desde la ultima accion que hayas realizado</h6></center><br>
          </p>
           <center> <img src="views/app/images/generales.png" width="350" height="200" >
          </center><br>
        </div>
          
        <div class="row">
          <div class="col-lg-4">

      <form class="form-signin">
        <label class="text-muted">Nombre*</label>
        <input type="name" id="nombres" class="form-control" placeholder="Nombre(s)" required="" autofocus="">
          <label class="text-muted">Apellidos*</label>
        <input type="name" id="apellidos" class="form-control" placeholder="Apellidos" required="" autofocus="">
          <label class="text-muted">Nombre de usuario*</label>
        <input type="name" id="username" class="form-control" placeholder="Nombre de usuario" required="" autofocus="">
        <label class="text-muted">dirección de correo electrónico</label>
        <input type="email" id="email" class="form-control" placeholder="Correo electronico" >
        <label class="text-muted">Contraseña*</label>
        <input type="password" id="pass" class="form-control" placeholder="Contraseña" required="">
          <label class="text-muted">confirmar Contraseña*</label>
        <input type="password" id="confpass" class="form-control" placeholder="Confirma tu contraseña" required=""><br>
        <button class="btn btn-lg btn-info " type="submit"><font><font>Crear Cuenta</font></font></button>
      </form>

    </div>
          
        </div>
         
      </div>
    </div>
    


  </body>
<?php include(HTML_DIR . 'overall/footer.php'); ?>
</html>