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
   				 	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="material-icons">person</i>Tipo de usuario</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">list</i>Lista cxxxx</a>
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
				                		<th>Horarios</th>
				                		<th>Días</th>
				                		<th>Acción</th>
				            		</tr>
				        		</thead>
				        		<tbody>
				            		<tr>
				                		<td>001</td>
				                		<td class="text-left">02:00pm-04:00pm</td>
				                		<td class="text-left">L-M-MI-J-V-S-D</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				                		<td>001</td>
				                		<td class="text-left">02:00pm-04:00pm</td>
				                		<td class="text-left">L-M-MI-J-V-S-D</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				                		<td>001</td>
				                		<td class="text-left">02:00pm-04:00pm</td>
				                		<td class="text-left">L-M-MI-J-V-S-D</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				        		</tbody>
				        		<tfoot>
				            		<tr>
				                		<th>Codigo</th>
				                		<th>Horarios</th>
				                		<th>Días</th>
				                		<th>Acción</th>
				            		</tr>
				        		</tfoot>
				    		</table>    			
	    				</div>
	    				<div class="col-md-8 col-sm-6 contendedorlocal">
							<div class="container cont-producto">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont-1">
    										<form>
 												<div class="form-row">
	    											<div class="col-md-2 mb-3">
	     										 		<label for="validationDefault02">Codigo:</label>
	      												<input type="text" class="form-control" id="validationDefault02" value="" required>
	    											</div>
												    <div class="form-group col-md-3">
												    	<label for="inputState">Hora inicio</label>
												    	<select id="inputState" class="form-control">
												        	<option value="saab">01:00</option>
			  												<option value="volvo">02:00</option>
			  												<option value="saab">03:00</option>
			  												<option value="saab">04:00</option>
			  												<option value="saab">05:00</option>
			  												<option value="saab">06:00</option>
			  												<option value="volvo">07:00</option>
			  												<option value="saab">08:00</option>
			  												<option value="saab">09:00</option>
			  												<option value="saab">10:00</option>
			  												<option value="saab">11:00</option>
			  												<option value="saab">12:00</option>
												      	</select>
												    </div>
												    <div class="form-group col-md-2">
												    	<label for="inputState">Am/Pm:</label>
												    	<select id="inputState" class="form-control">
												        	<option value="saab">am</option>
			  												<option value="volvo">pm</option>
												      	</select>
												    </div>
												    <div class="form-group col-md-3">
												    	<label for="inputState">Hora fin:</label>
												    	<select id="inputState" class="form-control">
												        	<option value="saab">01:00</option>
			  												<option value="volvo">02:00</option>
			  												<option value="saab">03:00</option>
			  												<option value="saab">04:00</option>
			  												<option value="saab">05:00</option>
			  												<option value="saab">06:00</option>
			  												<option value="volvo">07:00</option>
			  												<option value="saab">08:00</option>
			  												<option value="saab">09:00</option>
			  												<option value="saab">10:00</option>
			  												<option value="saab">11:00</option>
			  												<option value="saab">12:00</option>
												      	</select>
												    </div>
												    <div class="form-group col-md-2">
												    	<label for="inputState">Am/Pm:</label>
												    	<select id="inputState" class="form-control">
												        	<option value="saab">am</option>
			  												<option value="volvo">pm</option>
												      	</select>
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
      													<th scope="col">Día</th>
      													<th scope="col">Activado</th>
      													<th scope="col">Desactivado</th>
    												</tr>
  												</thead>
  												<tbody>
    												<tr>
      													<td>001</td>
      													<td>Lunes</td>
      													<td><label><input type="radio" name="gridRadios" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Martes</td>
      													<td><label><input type="radio" name="gridRadio4" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios4" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Miercoles</td>
      													<td><label><input type="radio" name="gridRadios5" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios5" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Jueves</td>
      													<td><label><input type="radio" name="gridRadios1" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios1" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Viernes</td>
      													<td><label><input type="radio" name="gridRadios2" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios2" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Sabado</td>
      													<td><label><input type="radio" name="gridRadios3" id="gridRadios2" value="option2"></label></td>
      													<td><label><input type="radio" name="gridRadios3" id="gridRadios2" value="option2"></label></td>
    												</tr>
    												<tr>
      													<td>001</td>
      													<td>Domingo</td>
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
