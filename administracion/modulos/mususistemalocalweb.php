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
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">visibility</i>Tipos Usuarios</a>
    				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="material-icons">visibility</i>xxx</a>
  				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
  				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  					<div class="row estilo-anc">
  						<div class="col-md-4 col-sm-6 asidecrearlocal tablas-resultado-izq">
	    					<table id="example" class="table table-striped table-bordered" style="width:100%">
				        		<thead>
				            		<tr>
				            			<th>Codigo</th>
				                		<th>Nombre</th>
				                		<th>Rut</th>
				                		<th>Acción</th>
				            		</tr>
				        		</thead>
				        		<tbody>
				            		<tr>
				                		<td>001</td>
				                		<td class="text-left">Carlos Garcia</td>
				                		<td class="text-left">12543267-2</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				               			<td>002</td>
				                		<td class="text-left">Ilayaly Castillo</td>
				                		<td class="text-left">9543678-2</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				        		</tbody>
				        		<tfoot>
				            		<tr>
				                		<th>Codigo</th>
				                		<th>Nombre</th>
				                		<th>Rut</th>
				                		<th>Acción</th>
				            		</tr>
				        		</tfoot>
				    		</table>    			
	    				</div>
	    				<div class="col-md-8 col-sm-6 contendedorlocal">
	    					<div class="container cont-producto">
  								<div class="row">
    								<div class="col-6 mpg-cont">
    									<div class="border-cont">
	    									<form>
	  											<div class="form-group row">
	    											<label for="inputEmail3" class="col-sm-2 col-form-label mpg-cont-label">Codigo:</label>
	    											<div class="col-sm-10">
	      												<input type="text" class="form-control" id="inputEmail3">
	    											</div>
	  											</div>
	  											<div class="form-group row">
	    											<label for="inputPassword3" class="col-sm-2 col-form-label mpg-cont-label">Rut:</label>
	    											<div class="col-sm-10">
	      												<input type="text" class="form-control" id="inputPassword3">
	    											</div>
	  											</div>
	  											<div class="form-group row">
	    											<label for="inputPassword3" class="col-sm-2 col-form-label mpg-cont-label">Nombre:</label>
	    											<div class="col-sm-10">
	      												<input type="text" class="form-control" id="inputPassword3">
	    											</div>
	  											</div>
	  											<div class="form-group row">
	    											<label for="inputPassword3" class="col-sm-2 col-form-label mpg-cont-label">Apellido:</label>
	    											<div class="col-sm-10">
	      												<input type="text" class="form-control" id="inputPassword3">
	    											</div>
	  											</div>
											</form>
										</div>
    								</div>
    								<div class="col-6 mpg-cont">
    									<div class="border-cont">
	    									<div class="row">
	    										<div class="col-6 mpg-cont1">
	    											<div class="img-qrp"><img src="img/qr.png"></div>
	    										</div>
	    										<div class="col-6 mpg-cont1">
	    											<div class="add-img"><button><i class="material-icons">perm_media</i><p>Agregar Imegen</p></button></div>
	    										</div>
	  										</div>
  										</div>
    								</div>
  								</div>
							</div>
							<div class="container cont-producto">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont-1">
	    									<form>
	  											 <div class="form-row">
	    											<div class="col-md-4 mb-3">
	      												<label for="validationDefault02">Usuario:</label>
	      												<input type="text" class="form-control" id="validationDefault02" value="" required>
	    											</div>
	    											<div class="col-md-4 mb-3">
	     										 		<label for="validationDefault02">Contaseña:</label>
	      												<input type="password" class="form-control" id="validationDefault02" value="" required>
	    											</div>
	    											<div class="col-md-4 mb-3">
	     										 		<label for="validationDefault02">Confirmar Contaseña:</label>
	      												<input type="password" class="form-control" id="validationDefault02" value="" required>
	    											</div>
	  											</div>
											</form>
										</div>
    								</div>
  								</div>
							</div>
							<div class="container cont-producto">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont-1">
	    									<form>
	  											 <div class="form-row">
	    											<div class="col-md-6 mb-3">
	      												<label for="validationDefault02">Teléfono</label>
	      												<input type="text" class="form-control" id="validationDefault02" value="" required>
	    											</div>
	    											<div class="col-md-6 mb-3">
	     										 		<label for="validationDefault02">E-mail</label>
	      												<input type="email" class="form-control" id="validationDefault02" value="" required>
	    											</div>
	  											</div>
											</form>
										</div>
    								</div>
  								</div>
							</div>
							<div class="container cont-producto">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont-1">
    										<form>
 												<div class="form-row">
												    <div class="form-group col-md-4">
												    	<label for="inputState">Tipo:</label>
												     	<select id="inputState" class="form-control">
												      		<option selected>Seleccionar:</option>
											  				<option value="Und">Administrador</option>
											  				<option value="Kg">Repartidor</option>
											  				<option value="Kg">Usuario n1</option>
											  				<option value="Kg">Usuario n2</option>
												      </select>
												    </div>
												    <div class="form-group col-md-4">
												    	<label for="inputState">Estado:</label>
												    	<select id="inputState" class="form-control">
												        	<option selected>Seleccionar:</option>
									  						<option value="Und">Activado</option>
									  						<option value="Kg">Desactivado</option>
												      	</select>
												    </div>
												    <div class="form-group col-md-4">
												    	<label for="inputState">Cambiar Contraseña:</label>
												    	<select id="inputState" class="form-control">
												        	<option selected>Seleccionar:</option>
									  						<option value="Und">Si</option>
									  						<option value="Kg">No</option>
												      	</select>
												    </div>
												</div>
											</form>
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
