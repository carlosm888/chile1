<!--INICIO DE CONTENIDO PRINCIPAL-->
    <!--INICIO DE CONTENIDO-->
    <div class="col-12">
      <div class="irap1">
        <div class="contenedorirpg">
          <ul class="menu-interno-irp">
            <li class="active-menuiirpc"><i class="material-icons active-menuiirpci">room</i>Direccion<i class="material-icons active-menuiirpci">date_range</i>Fecha<i class="material-icons active-menuiirpci">alarm</i>hora</li>
            <li class="active-menuiirpp"><i class="material-icons active-menuiirpci">payment</i>Metodo de pago</li>
            <li class="active-menuiirpd"><i class="material-icons">shopping_basket</i>Compra Finalizada</li>
          </ul>
          <div class="contenido-interno-irp">
            <div class="ciirp-flecha-volver">
              <a href=""><i class="material-icons">arrow_back</i>Volver</a>
            </div>
            <div class="ciirp-contenido">
              <div class="m1-dfhirp">
                <?php 
                  include("modulos/mirapcontenidodfh.php");
                ?> 
              </div>
              <div class="m2-mpirp">
                <?php 
                  include("modulos/mirapcontenidomp.php");
                ?> 
              </div>
              <div class="m3-pfirp">
                <?php 
                  include("modulos/mirapcontenidopf.php");
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
          include("modulos/mdetallecarritoirapagar.php");
      ?> 
    </div>
    <!--FIN DE CONTENIDO-->
<!--FIN DE CONTENIDO PRINCIPAL-->
</div>
