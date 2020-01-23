<!--INICIO DE CONTENIDO PRINCIPAL-->
<div class="container-fluid body3">
  <div class="usupanel"><!--INICIO DE CONTENIDO INTERNO GENERAL-->
    <div class="usupanel-menu"><!--INICIO DE MENU USUARIO-->
     <?php 
      include("modulos/menuusuario.php");
     ?>
    </div><!--FIN DE MENU USUARIO-->
    <div class="usupanel-cont"><!--INICIO DE DATOS-->
      <div class="cont-item-pedi mdatos">
        <h2 class="miscomp">Mis Datos:</h2>
        <div class="imgdatos">
          <div class="imgmovilmd">
           <img src="img/fperfil.jpg">
          </div>
           <div class="nddatos">
            <span class="cbfdatos"><a href="">Cambiar foto</a></span>
            <br>
            <span class="nombdatos">Carlos Garcia</span>
            <br>
            <span class="mtdatos">carlosm888@gmail.com</span><span>|</span><span>+56-959420632</span>
           </div>
        </div>
        <div class="infpersonal">
          <h2><i class="material-icons">perm_identity</i>Información Personal</h2>
          <form>
            <div class="form-group col-md-5">
              <label for="exampleInputEmail1">Nombre:</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej.: Carlos">
            </div>
            <div class="form-group col-md-5">
              <label for="exampleInputEmail1">Apellido:</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej.: Garcia">
            </div>
            <div class="form-group col-md-5">
              <label for="exampleInputEmail1">Correo Electrónico:</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej.: nombre@gmail.com">
            </div>
            <div class="form-group col-md-5">
              <label for="exampleInputEmail1">Teléfono:</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej.: 959420632">
            </div>
            <!--<button type="submit" class="btn btn-primary">Guardar Cambios</button>-->
          </form>
        </div>
        <div class="dseguridad">
          <h2><i class="material-icons">lock</i>Seguridad</h2>
          <div class="dseguridad1">
            <div class="dseguridad1p"><i class="material-icons">vpn_key</i><a href="">Cambiar Contraseña</a></div>
            <!--
            <?php 
              include("modulos/mcambiarcontrasena.php");
            ?>-->
          <div class="dseguridad1p"><i class="material-icons">mail_outline</i><a href="">Cambiar Correo Electrónico</a></div>
            <!--
            <?php 
              include("modulos/mcambiarcorreo.php");
            ?>-->
          <div class="dseguridad1p"><i class="material-icons">call</i><a href="">Cambiar Teléfono</a></div>
            <!--
            <?php 
              include("modulos/mcambiartelefono.php");
            ?>-->
          </div>       
        </div>
      </div>
    </div><!--FIN DE DATOS-->
  </div><!--FIN DE CONTENIDO INTERNO GENERAL-->
</div>
<!--FIN DE CONTENIDO PRINCIPAL-->