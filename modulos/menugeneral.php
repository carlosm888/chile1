<!--inicio del menu geberal-->
	<nav class="menugpe"> 
			<div class="logope">
				<a href=""><img src="img/logo1.jpg" height="40" class="d-inline-block align-top"alt=""></a>
			</div>
			<div class="buscadorpe"> 
				<div class="buscadorpe1"> 
					<input type="search" name="" placeholder="Buscar..." id="inputBusqueda"> <i class="material-icons icbuscare">search</i> 
				</div> 
				<!--inicio de tabla de busqueda-->
 					<?php 
  						include("modulos/tabladebusqueda.php");
 					?>
 				<!--inicio de tabla de busqueda--> 
			</div> 
			<div class="iconospe"> 
				<div class="iniciars"> 
					<a href="">
						<div class="botonismg">
							<div class="iniciarsico">
								<i class="material-icons">person</i>
							</div> 
							<div class="iniciarstxt"> 
								<span>Bienvenid@</span>
								<span>Iniciar Sesíon  <i class="material-icons iscerrado">expand_more</i><i class="material-icons isabierto">expand_less</i></span>
							</div> 
						</div>
					</a> 
				</div> 
				<div class="carritoc">
					<div class="contenidocarmenu">
						<div class="carmenu-1"><i class="material-icons">shopping_cart</i><small>1</small></div>
						<div class="carmenu-2"><span><strong>Total:</strong></span><span>$100.000</span></div>
					</div>
				</div> 
			</div> 
	</nav>
 <!--fin del menu geberal--> 