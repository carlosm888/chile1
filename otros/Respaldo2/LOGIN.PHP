<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PagoZip - Pago comprimido</title>
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel='stylesheet' href='css/font-awesome.min.css'> 
  <link rel="stylesheet" href="css/loginstyles.css">
  <link rel="stylesheet" href="css/styles.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Form Module-->
<div class="modulel form-module">
  <div class="toggle"><i class="glyphicon glyphicon-plus fa-pencil"></i>
    <div class="tooltip">Registrar</div>
  </div>
  <div class="form">
    <section class="logologin"><a href="index.php"><img src="img/logo7.png"></a></section>
    <h2>Iniciar sesión</h2>
    <form>
      <input type="text" required placeholder="Nombre de usuario"/>
      <input type="password" required placeholder="Contraseña"/>
      <button>Entrar</button>
      <section class="crearcuenta"><a href="">¿Olvidaste tu contraseña?</a></section>
    </form>
  </div>
  <div class="form">
    <h2>Crear tu cuenta</h2>
    <form>
      <input type="text" required placeholder="Nombre de usuario"/>
      <input type="password" required placeholder="Contraseña"/>
      <input type="password" required placeholder="Repetir contraseña"/>
      <input type="text" required placeholder="Nombre y Apellido"/>
      <input type="number" required placeholder="Cedula de identidad"/>
      <input type="email" required placeholder="Correo electronico"/>
      <button>Registrar</button>
    </form>
  </div>
</div>
<?php   
    include("footer.php");
 ?>
<script src="js/loginjs.js"></script>
</body>
</html>