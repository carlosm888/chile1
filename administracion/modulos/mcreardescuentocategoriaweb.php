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
   				 	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="material-icons">new_releases</i>Crear descuento</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">local_parking</i>Aplicar a productos</a>
    				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="material-icons">list</i>Aplicar a Categorias</a>
    				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact1" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="material-icons">vertical_split</i>Aplicar a SubCategorias</a>
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
				                		<th>Categoria con Descuento</th>
				                		<th>Valor</th>
				                		<th>Acción</th>
				            		</tr>
				        		</thead>
				        		<tbody>
				            		<tr>
				                		<td>001</td>
				                		<td class="text-left">Despensa</td>
				                		<td class="text-right">20%</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				               			<td>002</td>
				                		<td class="text-left">Licor</td>
				                		<td class="text-right">10%</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				                		<td>003</td>
				                		<td class="text-left">Lacteos</td>
				                		<td class="text-right">$1000</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				                		<td>004</td>
				                		<td class="text-left">Mascota</td>
				                		<td class="text-right">$200</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				        		</tbody>
				        		<tfoot>
				            		<tr>
				                		<th>Codigo</th>
				                		<th>Categoria con Descuento</th>
				                		<th>Valor</th>
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
 													<div class="form-group col-md-4">
												    	<label for="inputState">Categorias:</label>
												    	<select id="inputState" class="form-control">
												        	<option selected>Seleccionar:</option>
									  						<option value="Und">Despensa</option>
									  						<option value="Kg">Licor</option>
									  						<option value="Und">Aseo hogar</option>
									  						<option value="Kg">Mascota</option>
												      	</select>
												    </div>											
												    <div class="form-group col-md-2">
		      												<label for="inputCity">Descuento:</label>
		      												<input type="text" class="form-control input-despud" id="inputCity" value="10%" disabled="">
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
												    	<label for="inputState">Nombre Descuento:</label>
												     	<select id="inputState" class="form-control">
												        	<option selected>Seleccionar:</option>
									  						<option value="Und">Verano 10%</option>
									  						<option value="Kg">Navidad 20%</option>
												      	</select>
												    </div>
		 								 			<div class="form-row col-md-4">
												    		<label for="inputState">Estado:</label>
												     		<select id="inputState" class="form-control">
												      			<option selected>Seleccionar:</option>
											  					<option value="Und">Activado</option>
											  					<option value="Kg">Desactivado</option>
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
