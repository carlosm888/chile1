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
   				 	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="material-icons">visibility</i>Crear anuncio</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">visibility</i>Activar/Desactivar</a>
    				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="material-icons">visibility</i>xxxxxxxxxx</a>
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
				                		<th>Nombre Producto</th>
				                		<th>Precio V1</th>
				                		<th>Acción</th>
				            		</tr>
				        		</thead>
				        		<tbody>
				            		<tr>
				                		<td>001</td>
				                		<td class="text-left">Arrooz tucapel 900g</td>
				                		<td class="text-right">1200</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				               			<td>002</td>
				                		<td class="text-left">Arrooz tucapel 900g</td>
				                		<td class="text-right">1200</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				                		<td>003</td>
				                		<td class="text-left">Arrooz tucapel 900g</td>
				                		<td class="text-right">1200</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				            		<tr>
				                		<td>004</td>
				                		<td class="text-left">Arrooz tucapel 900g</td>
				                		<td class="text-right">1200</td>
				                		<td class="text-center"><button class="accion-table" all="Editar" title="Editar"><i class="material-icons">edit</i></button><button class="accion-table" all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				            		</tr>
				        		</tbody>
				        		<tfoot>
				            		<tr>
				                		<th>Codigo</th>
				                		<th>Nombre Producto</th>
				                		<th>Precio</th>
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
	    											<label for="inputPassword3" class="col-sm-2 col-form-label mpg-cont-label">Descripción:</label>
	    											<div class="col-sm-10">
	      												<input type="text" class="form-control" id="inputPassword3">
	    											</div>
	  											</div>
	  											<div class="form-group row">
	  												<label for="exampleFormControlSelect1" class="col-sm-2 col-form-label mpg-cont-label">Presentación:</label>
	  												<div class="col-sm-6 mpg-select-1">
	      												<input type="text" class="form-control" id="inputPassword3">
	    											</div>
	  												<div class="col-sm-4 mpg-select">
	      												<select class="form-control" id="exampleFormControlSelect1">
	      													<option selected>Seleccionar:</option>
										  					<option value="Und">Unidad</option>
										  					<option value="Kg">Kilogramo</option>
										  					<option value="g">Gramo</option>
										  					<option value="mg">Miligramo</option>
										  					<option value="L">Litro</option>
										  					<option value="ml">Mililitro</option>
										  					<option value="Gal">Galon</option>
										  					<option value="Barril">Barril</option>
										  					<option value="Oz">Onza</option>
	    												</select>
	    											</div>
	  											</div>
	  											<div class="form-group row">
	    											<label for="inputPassword3" class="col-sm-2 col-form-label mpg-cont-label">Cod. Barra:</label>
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
												    <div class="form-group col-md-4">
												    	<label for="inputState">Categoria</label>
												     	<select id="inputState" class="form-control">
												      		<option selected>Seleccionar:</option>
											  				<option value="Und">Despensa</option>
											  				<option value="Kg">Lacteos y huevos</option>
											  				<option value="g">Aseo del Hogar</option>
											  				<option value="mg">Bebidas</option>
											  				<option value="L">Licores</option>
											  				<option value="ml">Mascotas</option>
												      </select>
												    </div>
												    <div class="form-group col-md-4">
												    	<label for="inputState">Sub-categoria</label>
												    	<select id="inputState" class="form-control">
												        	<option selected>Seleccionar:</option>
									  						<option value="Und">Arroz</option>
									  						<option value="Kg">Aceites</option>
									  						<option value="g">Pastas</option>
									  						<option value="mg">Azucar</option>
									  						<option value="L">Harinas</option>
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
    										<div class="row">
    											<div class="col-9">
    												<form>
		  												<div class="form-row">
		    												<div class="form-group col-md-3">
		      													<label for="inputCity">Costo Neto:</label>
		      													<input type="text" class="form-control" id="inputCity">
		    												</div>
		    												<div class="form-group col-md-3">
		      													<label for="inputZip">IVA:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-3">
		      													<label for="inputZip">Iaba-Ila:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-3">
		      													<label for="inputZip">Costo Bruto:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		 								 				</div>
		 								 				<div class="form-row" style="margin-top: 7px !important;">
		    												<div class="form-group col-md-3">
		      													<label for="inputCity">Precio V1:</label>
		      													<input type="text" class="form-control" id="inputCity">
		    												</div>
		    												<div class="form-group col-md-3">
		      													<label for="inputZip">IVA:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-2">
		      													<label for="inputZip">Iaba-Ila:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-2">
		      													<label for="inputZip">Utilidad $:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-2">
		      													<label for="inputZip">Margen %:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		 								 				</div>
													</form>
    											</div>
    											<div class="col-3 mpg-g">
    												<table class="table">
 														<thead>
    														<tr>
      															<th scope="col">%</th>
      															<th scope="col">Descripción</th>
      															<th scope="col">Acción</th>
    														</tr>
 														</thead>
  														<tbody>
    														<tr>
      															<td>19</td>
     															<td>IVA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>0</td>
     															<td>IVA Excento</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>18</td>
     															<td>IABA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>10</td>
     															<td>IABA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>10</td>
     															<td>IABA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>10</td>
     															<td>IABA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
  														</tbody>
													</table>
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
												    <div class="form-group col-md-4">
												    	<label for="inputState">Estado:</label>
												     	<select id="inputState" class="form-control">
												      		<option selected>Seleccionar:</option>
											  				<option value="Und">Activado</option>
											  				<option value="Kg">Desactivado</option>
												      </select>
												    </div>
												    <div class="form-group col-md-4">
												    	<label for="inputState">Publicacion web:</label>
												    	<select id="inputState" class="form-control">
												        	<option selected>Seleccionar:</option>
									  						<option value="Und">Publicado</option>
									  						<option value="Kg">Despublicado</option>
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
    										<button type="button" class="btn btn-secondary"><i class="material-icons">clear</i>Cancelar</button>
										</div>
    								</div>
  								</div>
							</div>
	    				</div>
	    			</div>
  				</div>
  				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  					<div class="row">
		    			<div class="col-10 est-table-adp">
		    				<div>
		    				<table id="example" class="table table-striped table-bordered" style="width:100%">
					        	<thead>
					            	<tr>
					            		<th>Imagen</th>
					                	<th>Categoria</th>
					                	<th>Nombre Producto</th>
					                	<th>Unid</th>
					                	<th>Precio</th>
					                	<th>Descuento</th>
					                	<th>Estado</th>
					            	</tr>
					        	</thead>
					        	<tbody>
					            	<tr>
					                	<td class="text-center"><img src="img/arroztucapel.jpg"></td>
					                	<td>Despensa</td>
					                	<td>Arroz tucapel</td>
					                	<td class="text-center">900g</td>
					                	<td class="text-right">1200</td>
					                	<td class="text-center">25%</td>
					                	<td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
					            	</tr>
					            	<tr>
					                	<td class="text-center"><img src="img/aceitegirasol.jpg"></td>
					                	<td>Despensa</td>
					                	<td>Aceite Girasol</td>
					                	<td class="text-center">1L</td>
					                	<td class="text-right">900</td>
					                	<td class="text-center">No</td>
					                	<td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
					            	</tr>
					            	<tr>
					                	<td class="text-center"><img src="img/huevos.jpg"></td>
					                	<td>Huevos-Lacteo</td>
					                	<td>Huevos sol</td>
					                	<td class="text-center">30 und</td>
					                	<td class="text-right">2900</td>
					                	<td class="text-center">No</td>
					                	<td class="text-center"><button type="button" class="btn btn-danger"><i class="material-icons">visibility_off</i></button></td>
					            	</tr>
					            	<tr>
					                	<td class="text-center"><img src="img/yogurt.png"></td>
					                	<td>Hevos-Lacteos</td>
					                	<td>6 Pack yogurt soprole</td>
					                	<td class="text-center">54g</td>
					                	<td class="text-right">1250</td>
					                	<td class="text-center">10%</td>
					                	<td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
					            	</tr>
					            	<tr>
					                	<td class="text-center"><img src="img/volcanesdelsur.jpg"></td>
					                	<td>Licor</td>
					                	<td>Cerveza Volcanes del sur</td>
					                	<td class="text-center">900ml</td>
					                	<td class="text-right">1800</td>
					                	<td class="text-center">No</td>
					                	<td class="text-center"><button type="button" class="btn btn-danger"><i class="material-icons">visibility_off</i></button></td>
					            	</tr>
					            	<tr>
					                	<td class="text-center"><img src="img/redlaabel.jpg"></td>
					                	<td>Licor</td>
					                	<td>Wisky red label</td>
					                	<td class="text-center">75ml</td>
					                	<td class="text-right">13.000</td>
					                	<td class="text-center">No</td>
					                	<td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
					            	</tr>
					        	</tbody>
					        	<tfoot>
					            	<tr>
					                	<th>Imagen</th>
					                	<th>Categoria</th>
					                	<th>Nombre Producto</th>
					                	<th>Unid</th>
					                	<th>Precio</th>
					                	<th>Descuento</th>
					                	<th>Estado</th>
					            	</tr>
					        	</tfoot>
					    	</table>
		    				</div>
		    			</div>
		    		<div class="col-2 asidepweb">
		    			<div class="card" style="width:100%">
	  						<div class="card-header">
	    					Estado de Productos
	  						</div>
	  						<ul class="list-group list-group-flush">
	    						<li class="list-group-item">
	    							<div class="list-p1"><span class="btn btn-success"><i class="material-icons">visibility</i></span></div>
	    							<div class="list-p2"><p class="p-publi">Publicado</p><p class="nro-pyd">2000<span>Anuncios</span></p></div>
	    						</li>
	    						<li class="list-group-item">
	    							<div class="list-p1"><span class="btn btn-danger"><i class="material-icons">visibility_off</i></span></div>
	    							<div class="list-p2"><p class="p-desp">Despublicado</p><p class="nro-pyd-desp">50<span>Anuncios</span></p></div>
	    						</li>
	  						</ul>
						</div>
		    		</div>
	  				</div>
  				</div>
  				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  					<div class="row">
  						<div class="col-md-4 col-sm-6 asidecrearlocal tablas-resultado-izq">
	    					<table id="example" class="table table-striped table-bordered" style="width:100%">
				        		<thead>
				            		<tr>
				            			<th>Codigo</th>
				                		<th>Nombre Producto</th>
				                		<th>Precio V1</th>
				            		</tr>
				        		</thead>
				        		<tbody>
				            		<tr>
				                		<td>001</td>
				                		<td class="text-center">Arrooz tucapel 900g</td>
				                		<td class="text-right">1200</td>
				            		</tr>
				            		<tr>
				               			<td>002</td>
				                		<td class="text-center">Arrooz tucapel 900g</td>
				                		<td class="text-right">1200</td>
				            		</tr>
				            		<tr>
				                		<td>003</td>
				                		<td class="text-center">Arrooz tucapel 900g</td>
				                		<td class="text-right">1200</td>
				            		</tr>
				            		<tr>
				                		<td>004</td>
				                		<td class="text-center">Arrooz tucapel 900g</td>
				                		<td class="text-right">1200</td>
				            		</tr>
				        		</tbody>
				        		<tfoot>
				            		<tr>
				                		<th>Codigo</th>
				                		<th>Nombre Producto</th>
				                		<th>Precio</th>
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
	    											<label for="inputPassword3" class="col-sm-2 col-form-label mpg-cont-label">Descripción:</label>
	    											<div class="col-sm-10">
	      												<input type="text" class="form-control" id="inputPassword3">
	    											</div>
	  											</div>
	  											<div class="form-group row">
	  												<label for="exampleFormControlSelect1" class="col-sm-2 col-form-label mpg-cont-label">Presentación:</label>
	  												<div class="col-sm-6 mpg-select-1">
	      												<input type="text" class="form-control" id="inputPassword3">
	    											</div>
	  												<div class="col-sm-4 mpg-select">
	      												<select class="form-control" id="exampleFormControlSelect1">
	      													<option selected>Seleccionar:</option>
										  					<option value="Und">Unidad</option>
										  					<option value="Kg">Kilogramo</option>
										  					<option value="g">Gramo</option>
										  					<option value="mg">Miligramo</option>
										  					<option value="L">Litro</option>
										  					<option value="ml">Mililitro</option>
										  					<option value="Gal">Galon</option>
										  					<option value="Barril">Barril</option>
										  					<option value="Oz">Onza</option>
	    												</select>
	    											</div>
	  											</div>
	  											<div class="form-group row">
	    											<label for="inputPassword3" class="col-sm-2 col-form-label mpg-cont-label">Cod. Barra:</label>
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
												    <div class="form-group col-md-4">
												    	<label for="inputState">Categoria</label>
												     	<select id="inputState" class="form-control">
												      		<option selected>Seleccionar:</option>
											  				<option value="Und">Despensa</option>
											  				<option value="Kg">Lacteos y huevos</option>
											  				<option value="g">Aseo del Hogar</option>
											  				<option value="mg">Bebidas</option>
											  				<option value="L">Licores</option>
											  				<option value="ml">Mascotas</option>
												      </select>
												    </div>
												    <div class="form-group col-md-4">
												    	<label for="inputState">Sub-categoria</label>
												    	<select id="inputState" class="form-control">
												        	<option selected>Seleccionar:</option>
									  						<option value="Und">Arroz</option>
									  						<option value="Kg">Aceites</option>
									  						<option value="g">Pastas</option>
									  						<option value="mg">Azucar</option>
									  						<option value="L">Harinas</option>
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
    										<div class="row">
    											<div class="col-9">
    												<form>
		  												<div class="form-row">
		    												<div class="form-group col-md-3">
		      													<label for="inputCity">Costo Neto:</label>
		      													<input type="text" class="form-control" id="inputCity">
		    												</div>
		    												<div class="form-group col-md-3">
		      													<label for="inputZip">IVA:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-3">
		      													<label for="inputZip">Iaba-Ila:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-3">
		      													<label for="inputZip">Costo Bruto:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		 								 				</div>
		 								 				<div class="form-row" style="margin-top: 7px !important;">
		    												<div class="form-group col-md-3">
		      													<label for="inputCity">Precio V1:</label>
		      													<input type="text" class="form-control" id="inputCity">
		    												</div>
		    												<div class="form-group col-md-3">
		      													<label for="inputZip">IVA:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-2">
		      													<label for="inputZip">Iaba-Ila:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-2">
		      													<label for="inputZip">Utilidad $:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		    												<div class="form-group col-md-2">
		      													<label for="inputZip">Margen %:</label>
		      													<input type="text" class="form-control" id="inputZip">
		    												</div>
		 								 				</div>
													</form>
    											</div>
    											<div class="col-3 mpg-g">
    												<table class="table">
 														<thead>
    														<tr>
      															<th scope="col">%</th>
      															<th scope="col">Descripción</th>
      															<th scope="col">Acción</th>
    														</tr>
 														</thead>
  														<tbody>
    														<tr>
      															<td>19</td>
     															<td>IVA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>0</td>
     															<td>IVA Excento</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>18</td>
     															<td>IABA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>10</td>
     															<td>IABA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>10</td>
     															<td>IABA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
    														<tr>
      															<td>10</td>
     															<td>IABA</td>
      															<td><input class="" type="checkbox" value=""></td>
    														</tr>
  														</tbody>
													</table>
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
												    <div class="form-group col-md-4">
												    	<label for="inputState">Estado:</label>
												     	<select id="inputState" class="form-control">
												      		<option selected>Seleccionar:</option>
											  				<option value="Und">Activado</option>
											  				<option value="Kg">Desactivado</option>
												      </select>
												    </div>
												    <div class="form-group col-md-4">
												    	<label for="inputState">Publicacion web:</label>
												    	<select id="inputState" class="form-control">
												        	<option selected>Seleccionar:</option>
									  						<option value="Und">Publicado</option>
									  						<option value="Kg">Despublicado</option>
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
    										<button type="button" class="btn btn-secondary"><i class="material-icons">clear</i>Cancelar</button>
										</div>
    								</div>
  								</div>
							</div>
	    				</div>
	    			</div>
  					<div class="row">
  						<div class="clo-12">
  							<?php 
    			include("modulos/abc.php");
			?>
  						</div>
  					</div>
  					
  				</div>
			</div>
	  	</div>
	</div>
</div>
