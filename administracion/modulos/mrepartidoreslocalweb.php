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
   				 	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-crepartidor" role="tab" aria-controls="nav-home" aria-selected="true"><i class="material-icons">motorcycle</i>Crear Repartidores</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-lrepartidor" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">list</i>Lista Repartidores</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-chorarios" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">alarm</i>Crear horarios</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-cregion" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">room</i>Región</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-ccomuna" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">room</i>Comuna</a>
  				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
  				<div class="tab-pane fade show active" id="nav-crepartidor" role="tabpanel" aria-labelledby="nav-home-tab">
  					<div class="row estilo-anc">
  						<div class="col-md-4 col-sm-6 asidecrearlocal tablas-resultado-izq">
	    					<table id="example" class="table table-striped table-bordered" style="width:100%">
				        		<thead>
				            		<tr>
				            			<th>Codigo</th>
				                		<th>Nombre Repartidor</th>
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
				                		<th>Nombre Repartidor</th>
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
	    											<div class="add-img"><button data-toggle="modal" data-target="#biblioteca-img"><i class="material-icons">perm_media</i><p>Agregar Imegen</p></button></div>
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
											  				<option value="Und">Repartidor</option>
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
    									<div class="border-cont-1">
    										<form>
 												<div class="form-row">
												    <div class="form-group col-md-2">
												    	<label for="inputState">Tipo de vehículo:</label>
												     	<select id="inputState" class="form-control">
												      		<option value="saab">Auto</option>
			  												<option value="volvo">Camioneta</option>
			  												<option value="saab">Furgon</option>
			  												<option value="saab">Camion</option>
			  												<option value="saab">Bicicleta</option>
			  												<option value="saab">Motocicleta</option>
												      </select>
												    </div>
												    <div class="form-group col-md-2">
												    	<label for="inputState">Marca:</label>
												    	<select id="inputState" class="form-control">
												        	<option value="saab">Seleccionar</option>
			  												<option value="volvo">KIA</option>
			  												<option value="saab">FIAT</option>
			  												<option value="saab">NISSAN</option>
			  												<option value="saab">CHERY</option>
			  												<option value="saab">CHEVROLET</option>
			  												<option value="volvo">FORD</option>
			  												<option value="saab">FOTON</option>
			  												<option value="saab">HYUNDAI</option>
			  												<option value="saab">JAC</option>
			  												<option value="saab">MAHINDRA</option>
			  												<option value="saab">SSANGYONG</option>
			  												<option value="saab">DONGFENG</option>
			  												<option value="saab">SUZUKI</option>
			  												<option value="saab">TOYOTA</option>
			  												<option value="saab">VOLVO</option>
			  												<option value="saab">VOLKSWAGEN</option>
			  												<option value="saab">YAMAHA</option>
			  												<option value="saab">KAWASAKI</option>
			  												<option value="saab">OTRO</option>
												      	</select>
												    </div>
												    <div class="col-md-2 mb-3">
	     										 		<label for="validationDefault02"></label>
	      												<input type="text" class="form-control" id="validationDefault02" value="" required>
	    											</div>
	    											<div class="col-md-2 mb-3">
	     										 		<label for="validationDefault02">Modelo:</label>
	      												<input type="text" class="form-control" id="validationDefault02" value="" required>
	    											</div>
												    <div class="form-group col-md-2">
												    	<label for="inputState">Año:</label>
												    	<select id="inputState" class="form-control">
												        	<option value="saab">2012</option>
			  												<option value="volvo">2013</option>
			  												<option value="saab">2014</option>
			  												<option value="saab">2015</option>
			  												<option value="saab">2016</option>
			  												<option value="saab">2017</option>
			  												<option value="volvo">2018</option>
			  												<option value="saab">2019</option>
			  												<option value="saab">2020</option>
			  												<option value="saab">2021</option>
												      	</select>
												    </div>
												    <div class="col-md-2 mb-3">
	     										 		<label for="validationDefault02">Color</label>
	      												<input type="text" class="form-control" id="validationDefault02" value="" required>
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
  				<div class="tab-pane fade" id="nav-lrepartidor" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  				<div class="tab-pane fade" id="nav-chorarios" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
  				<div class="tab-pane fade" id="nav-cregion" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
  				<div class="tab-pane fade" id="nav-ccomuna" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
			</div>
	  	</div>
	</div>
</div>
