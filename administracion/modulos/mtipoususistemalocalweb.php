<div class="container-fluid">
	<div class="menu-panelweb">
		<div class="header-menu">
			sssss
		</div>
		<div class="perfil-menu">
			<div class="imgperfil-menuweb">
				<img src="img/fperfil.jpg">
			</div>
			<div class="infoperfil-menuweb">
				<span class="infopmw-nombre">Carlos Garcia</span>
				<span class="infopmw-correo">carlosm888@gmail.com</span>
			</div>
			<div class="btnperfil-menuweb">
				<button type="button" class="btn btn-dark"><i class="material-icons">settings_applications</i>Perfil</button>
				<button type="button" class="btn btn-dark"><i class="material-icons">power_settings_new</i>Salir</button>
			</div>
		</div>
		<div class="contenedor-menu">
			<?php 
    			include("modulos/menus/menupweb.php");
			?>
		</div>
	</div>
	<div class="contenedor-panelweb">
		<div class="header-contenidopweb">
			<div class="cont-headerpweb">
				<ul>
					<li><span class="horasispw" title="Último ingreso"><i class="material-icons">restore</i><span>20/12/2019</span>-<span>20:00</span></span></li>
					<li><span class="horasispw-1"><i class="material-icons">notifications_active</i><span class="badge badge-secondary">6</span></span></li>
				</ul>
			</div>
		</div>
		<div class="container contenedor-internopweb">
	  		<nav>
  				<div class="nav nav-tabs" id="nav-tab" role="tablist">
   				 	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="material-icons">person</i>Crear Usuario Sistema</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">lock</i>Tipos Usuarios</a>
    				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="material-icons">visibility</i>xxx</a>
  				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
  				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  					<div class="row estilo-imp">
  						<div class="col-md-4 col-sm-6 asidecrearlocal tablas-resultado-izq">
	    					<table id="example" class="table table-striped table-bordered" style="width:100%">
				        		<thead>
				            		<tr>
				            			<th>Codigo</th>
				                		<th>Privilegio</th>
				                		<th>Acción</th>
				            		</tr>
				        		</thead>
				        		<tbody>
				            		<tr>
				                		<td>001</td>
				                		<td class="text-left">Administrador</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				                		<td>002</td>
				                		<td class="text-left">Repartidor</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				                		<td>002</td>
				                		<td class="text-left">Usuario n1</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				        		</tbody>
				        		<tfoot>
				            		<tr>
				                		<th>Codigo</th>
				                		<th>Privilegio</th>
				                		<th>Acción</th>
				            		</tr>
				        		</tfoot>
				    		</table>    			
	    				</div>
	    				<div class="col-md-8 col-sm-6 contendedorlocal">
	    					<div class="container cont-producto estilo-imp">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont">
	    									<form>
	  											<div class="form-group row">
	    											<label for="inputEmail3" class="col-sm-1 col-form-label mpg-cont-label">Codigo:</label>
	    											<div class="col-sm-10">
	      												<input type="text" class="form-control" id="inputEmail3"><button type="button" class="btn btn-secondary btn-table1"><i class="material-icons">search</i></button>
	    											</div>
	  											</div>
	  											<div class="form-group row">
	    											<label for="inputPassword3" class="col-sm-1 col-form-label mpg-cont-label">Nombre:</label>
	    											<div class="col-sm-10">
	      												<input type="text" class="form-control" id="inputPassword3"><button type="button" class="btn btn-secondary btn-table1"><i class="material-icons">search</i></button>
	    											</div>
	  											</div>
											</form>
										</div>
    								</div>
  								</div>
							</div>
							<div class="container cont-producto estilo-imp">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont-1">
	    									<table class="table table-tipo-usu">
  												<thead>
    												<tr>
      													<th scope="col">Codigo</th>
      													<th scope="col">Privilegio</th>
      													<th scope="col">Activado</th>
      													<th scope="col">Desactivado</th>
    												</tr>
  												</thead>
  												<tbody>
    												<tr>
      													<td>001</td>
      													<td>Administacion Local Full</td>
      													<td><label><input type="radio" name="gridRadios" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Administacion local Full</td>
      													<td><label><input type="radio" name="gridRadio4" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios4" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Administacion web Full</td>
      													<td><label><input type="radio" name="gridRadios5" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios5" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Facturacion eléctronica full</td>
      													<td><label><input type="radio" name="gridRadios1" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios1" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Reportes full</td>
      													<td><label><input type="radio" name="gridRadios2" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios2" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Configuracion full</td>
      													<td><label><input type="radio" name="gridRadios3" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios3" id="gridRadios2" value="option2"></label></td>
    												</tr>
  												</tbody>
											</table>
										</div>
    								</div>
  								</div>
							</div>
							<div class="container cont-producto">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont-1 btn-cp">
    										<button type="button" class="btn btn-secondary"><i class="material-icons">save</i>Guardar</button>
    										<button type="button" class="btn btn-secondary"><i class="material-icons">save</i>Eliminar</button>
    										<button type="button" class="btn btn-secondary"><i class="material-icons">clear</i>Cancelar</button>
										</div>
    								</div>
  								</div>
							</div>
	    				</div>
	    			</div>
  				</div>
  				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
			</div>
	  	</div>
	</div>
</div>
