<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/stylemodtransf.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/normalize.min.css">
<title>PagoZip - Pago comprimido</title>
</head>
<body>
<header>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php"><img class="logonav" src="img/logo7.png"></a>
          <a class="navbar-brand letralogonav" href="index.php">PagoZip.<span class="comstilenav">com</span></a>
          <p class="text-centeres">
            <a class="saldonav"><span>1000</span><span class="mobilmonedanav">BsS</span></a>
          </p>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#">Recargar saldo</a></li>
            <li><a href="#">Retirar saldo</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transaciones <span class="caret"></span></a>
              <ul class="dropdown-menu">
              	<li><a href="index.php">Movimientos</a></li>
                <li><a href="modtransf.php">Tansferir saldo</a></li>
                <li><a href="#">Realizar Pago</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header"><span class="glyphicon glyphicon-briefcase spacecomerciante"></span>Comerciante</li>
                <li><a href="#">Inventario</a></li>
              </ul>
            </li>
            <li class="saldonavoriginal"><a href="#"><span class="saldonav">BsS</span><span>1000</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/"><span class="glyphicon glyphicon-check navmenuicon"></span>Registro</a></li>
            <li class="active"><a href="login.php"><span class="glyphicon glyphicon-lock navmenuicon"></span>Iniciar sesión <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/"><span class="glyphicon glyphicon-question-sign navmenuicon"></span>Ayuda</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>