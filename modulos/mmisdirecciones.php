<!--INICIO DE CONTENIDO PRINCIPAL-->
<div class="container-fluid body3">
  <div class="usupanel"><!--INICIO DE CONTENIDO INTERNO GENERAL-->
    <div class="usupanel-menu"><!--INICIO DE MENU USUARIO-->
      <?php 
      include("modulos/menuusuario.php");
     ?>
    </div><!--FIN DE MENU USUARIO-->
    <div class="usupanel-cont"><!--INICIO DE MIS DIRECCIONES-->
      <div class="cont-item-pedi">
        <h2 class="miscomp">Mis direcciones:</h2>
        <div class="direc0">
                <div class="direc0-1">
                    <div class="direc1"><h2><i class="material-icons">room</i>Dirección principal:</h2></div>
                    <div class="direc2">
                    	<div class="direc2-1"><p><strong>Condominio Brisas de Matta</strong><span>-</span><span>Pedro Lagos 521</span><span>-</span><span>Depto. 118</span><span>-</span><span>Ñuñoa</span><span>-</span><span>R.M.</span><span>-</span><span>+56 959420632</span></p></div>
                    	<div class="direc2-2"><a href="editardirecciones.php"><i class="material-icons">create</i></a><a href="" data-toggle="modal" data-target="#eliminardirec"><i class="material-icons">delete</i></a></div>
                	</div>
                </div>
        </div>
      </div>
      <div class="odirec1">
      	<h3>Otras direcciones:</h3>
      	<div class="odirec1-1">
      		<div class="odirec1-2">
	      		<div class="odirec2-1"><p><strong>Trabajo</strong><span>-</span><span>Irarrazabal 4102</span><span>-</span><span>959420632</span></p></div><div class="odirec2-2"><a href="editardirecciones.php"><i class="material-icons">create</i></a><a href="" data-toggle="modal" data-target="#eliminardirec"><i class="material-icons">delete</i></a></div>
	      	</div>
	      	<div class="odirec1-2">
	      		<div class="odirec2-1"><p><strong>Polola</strong><span>-</span><span>Pedro Alessandri 170</span><span>-</span><span>959420632</span></p></div><div class="odirec2-2"><a href="editardirecciones.php"><i class="material-icons">create</i></a><a href="" data-toggle="modal" data-target="#eliminardirec"><i class="material-icons">delete</i></a></div>
	      	</div>
      	</div>
      	<a href="agregardirecciones.php" class="addodirec"><i class="material-icons">add</i>Agregar dirección</a>
      </div>
    </div><!--FIN DE MIS DIRECCIONES-->
  </div><!--FIN DE CONTENIDO INTERNO GENERAL-->
</div>
<!--FIN DE CONTENIDO PRINCIPAL-->