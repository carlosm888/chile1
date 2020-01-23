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
   				 	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="material-icons">visibility</i>Crear productos</a>
    				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="material-icons">visibility</i>Crear productos</a>
    				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="material-icons">visibility</i>Crear productos</a>
  				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
  				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  					<div class="row estilo-anc">
	    				<div class="col-md-12 col-sm-6 contendedorlocal">
	    					<div class="container cont-producto">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont-1">
    										<div class="row">
    											<div class="col-6 mpg-cont">
    												<div class="">
													</div>
    											</div>
    											<div class="col-6 mpg-cont">
    												<div class="">
    													<form>
 												<div class="form-row">
												    <div class="form-group col-md-4">
												     	<select id="inputState" class="form-control">
												      		<option selected>Seleccione Local</option>
											  				<option value="Und">Local 1</option>
											  				<option value="Kg">Local 2</option>
												      </select>
												    </div>
												    <div class="form-group col-md-4">
												    	<select id="inputState" class="form-control">
												        	<option selected>Seleccione Bodega</option>
									  						<option value="Und">Bodega 1</option>
									  						<option value="Kg">Bodega 2</option>
												      	</select>
												    </div>
												</div>
											</form>
													</div>
    											</div>
  											</div>
										</div>
    								</div>
  								</div>
							</div>
	    					<div class="container cont-producto">
  								<div class="row">
    								<div class="col-6 mpg-cont estilos-comp-1">
    									<div class="border-cont-1">
	    									<form>
	    										<label>Proveedores:</label>
	    										  <div class="form-row">
    												<div class="form-group col-md-3">
		      											<label for="inputCity">Codigo:</label>
		      											<input type="text" class="form-control" id="inputCity">
		    										</div>
    												<div class="form-group col-md-9">
    												  <label for="inputZip">Nombre:</label>
    												  <input type="text" class="form-control input-b" id="inputEmail3"><button type="button" class="btn btn-secondary btn-table1"><i class="material-icons">search</i></button>
    												</div>
  												</div>
  												<div class="form-group row compra-prov-btn">
	    											<div class="col-sm-10">
	      												<button type="button" class="btn btn-secondary btn-table1">Ordenes de compras pendientes</button>
	    											</div>
	  											</div>
											</form>
										</div>
    								</div>
    								<div class="col-6 mpg-cont estilos-comp-1">
    									<div class="border-cont-1">
	    									<form>
	    										<label>Datos de factura:</label>
	    										<div class="form-group row compra-fact-btn">
	    											<div class="col-sm-6 rest-btn-fact">
	      												<button type="button" class="btn btn-secondary btn-table1">Guardar Borrador</button>
	    											</div>
	    											<div class="col-sm-6 rest-btn-fact">
	      												<button type="button" class="btn btn-success btn-table1">Restaurar Borrador</button>
	    											</div>
	  											</div>
	    										<div class="form-row">
    												<div class="form-group col-md-3">
		      											<label for="inputCity">Costo Neto:</label>
		      											<input type="text" class="form-control" id="inputCity">
		    										</div>
    												<div class="form-group col-md-3">
      													<label for="inputState">Tipo:</label>
      													<select id="inputState" class="form-control">
        													<option selected>Factura</option>
        													<option>Nota de Credito</option>
        													<option>Guia de Despacho</option>
      													</select>
    												</div>
    												<div class="form-group col-md-3">
    												  <label for="inputZip">PV:</label>
    												  <input type="text" class="form-control" id="inputZip">
    												</div>
    												<div class="form-group col-md-3">
    												  <label for="inputZip">Número:</label>
    												  <input type="text" class="form-control" id="inputZip">
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
    										<label>Producto:</label>
    										<div class="row">
    											<div class="col-6 mpg-cont estilos-comp-1">
    												<div class="form-row">
    												<div class="form-group col-md-3">
		      											<label for="inputCity">Codigo:</label>
		      											<input type="text" class="form-control" id="inputCity">
		    										</div>
    												<div class="form-group col-md-9">
    												  <label for="inputZip">Nombre:</label>
    												  <input type="text" class="form-control input-b" id="inputEmail3"><button type="button" class="btn btn-secondary btn-table1"><i class="material-icons">search</i></button>
    												</div>
  												</div>
    											</div>
    											<div class="col-6 mpg-cont estilos-comp-1">
    												<div class="">
    													<form>
    														<div class="form-row">
    															<div class="form-group col-md-3">
		      														<label for="inputCity">Cantidad:</label>
		      														<input type="text" class="form-control cant-prod" id="inputCity"><span>x</span>
		    													</div>
    															<div class="form-group col-md-3">
		      														<label for="inputCity">Presentación:</label>
		      														<input type="text" class="form-control cant-prod" id="inputCity"><span>=</span>
		    													</div>
    															<div class="form-group col-md-3">
    												  				<label for="inputZip">Cantidad Total:</label>
    												  				<input type="text" class="form-control cant-prod" id="inputZip">
    															</div>
    															<div class="form-group col-md-3">
    												  				<label for="inputZip">Stock actual:</label>
    												  				<input type="text" class="form-control cant-prod" id="inputZip">
    															</div>
  															</div>
														</form>
													</div>
    											</div>
  											</div>
  											<div class="row">
    											<div class="col-7 mpg-cont estilos-comp-1">
    												<div class="">
    													<form>
    														<div class="form-row">
    															<div class="form-group col-md-3">
		      														<label for="inputCity">Neto base unitario:</label>
		      														<input type="text" class="form-control cant-prod" id="inputCity"><span>x</span>
		    													</div>
    															<div class="form-group col-md-3">
		      														<label for="inputCity">Descuento total $:</label>
		      														<input type="text" class="form-control cant-prod" id="inputCity"><span>=</span>
		    													</div>
    															<div class="form-group col-md-3">
    												  				<label for="inputZip">Subtotal:</label>
    												  				<input type="text" class="form-control cant-prod" id="inputZip">
    															</div>
    															<div class="form-group col-md-3">
    												  				<label for="inputZip">Neto:</label>
    												  				<input type="text" class="form-control cant-prod" id="inputZip">
    															</div>
  															</div>
														</form>
													</div>
    											</div>
    											<div class="col-5 mpg-cont estilos-comp-1">
    												<div class="">
    													<form>
    														<div class="form-row">
    															<div class="form-group col-md-4">
		      														<label for="inputCity"><br></label>
		      														<button type="button" class="btn btn-secondary btn-table2"><i class="material-icons">add</i>Cargar</button>
		    													</div>
		    													<div class="form-group col-md-4">
		      														<label for="inputCity"><br></label>
		      														<button type="button" class="btn btn-secondary btn-table2"><i class="material-icons">clear</i>Cancelar</button>
		    													</div>
		    													<div class="form-group col-md-4">
		      														<label for="inputCity"><br></label>
		      														<button type="button" class="btn btn-secondary btn-table2"><i class="material-icons">delete_forever</i>Eliminar</button>
		    													</div>  	
  															</div>
														</form>
													</div>
    											</div>
  											</div>
										</div>
    								</div>
  								</div>
							</div>
							<div class="container cont-producto">
  								<div class="row">
    								<div class="col-12 mpg-cont">
    									<div class="border-cont-1 estilos-comp-1 h-tabla-compra">
    										<form>
 												<table class="table">
  													<thead>
    													<tr>
      														<th scope="col">Código</th>
      														<th scope="col">Descricón</th>
      														<th scope="col">Cantidad</th>
      														<th scope="col">Unidad</th>
      														<th scope="col">Descuento</th>
      														<th scope="col">Prec. Unitario</th>
      														<th scope="col">Total Neto</th>
    													</tr>
  													</thead>
  													<tbody>
    													<tr>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
    													</tr>
    													<tr>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
    													</tr>
    													<tr>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
    													</tr>
    													<tr>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
    													</tr>
    													<tr>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
      														<td>0</td>
    													</tr>
  													</tbody>
												</table>
											</form>
										</div>
    								</div>
  								</div>
							</div>
							<div class="container cont-producto">
  								<div class="row">
    								<div class="col-6 mpg-cont estilos-comp-1">
    									<div class="border-cont-1 h-dimp-2">
	    									<div class="row">
    											<div class="col-4 mpg-cont estilos-comp-1">
    												<div class="border-cont-1 estilos-comp-1 ">
	    												<form>
	    												<button type="button" class="btn btn-dark btn-imps">Detalle Impuestos</button>	
														</form>
													</div>
    											</div>
    											<div class="col-8 mpg-cont estilos-comp-1">
    												<div class="border-cont-1 h-tabla-compra1">
	    												<form>
	    													<table class="table">
  																<thead>
    																<tr>
      																	<th scope="col">%</th>
      																	<th scope="col">Descricón</th>
      																	<th scope="col">Importe</th>
    																</tr>
  																</thead>
  																<tbody>
    																<tr>
      																	<td>0</td>
      																	<td>0</td>
      																	<td>0</td>
    																</tr>
    																<tr>
      																	<td>0</td>
      																	<td>0</td>
      																	<td>0</td>
    																</tr>
    																<tr>
      																	<td>0</td>
      																	<td>0</td>
      																	<td>0</td>
    																</tr>
    																<tr>
      																	<td>0</td>
      																	<td>0</td>
      																	<td>0</td>
    																</tr>
    																<tr>
      																	<td>0</td>
      																	<td>0</td>
      																	<td>0</td>
    																</tr>
    																<tr>
      																	<td>0</td>
      																	<td>0</td>
      																	<td>0</td>
    																</tr>
  																</tbody>
															</table>
														</form>
  													</div>
    											</div>
  											</div>
										</div>
    								</div>
    								<div class="col-6 mpg-cont estilos-comp-1">
    									<div class="border-cont-1 h-dimp-2">
	    									<form>
	    										<div class="form-row h-dimp-3">
    												<div class="form-group col-md-3">
		      											<label for="inputCity">Cantidad Total:</label>
		      											<input type="text" class="form-control" id="inputCity">
		    										</div>
    												<div class="form-group col-md-3">
		      											<label for="inputCity">Subtotal $:</label>
		      											<input type="text" class="form-control" id="inputCity">
		    										</div>
    												<div class="form-group col-md-3">
    												  <label for="inputZip">Descuento $:</label>
    												  <input type="text" class="form-control" id="inputZip">
    												</div>
    												<div class="form-group col-md-3">
    												  <label for="inputZip">Total Neto $:</label>
    												  <input type="text" class="form-control" id="inputZip">
    												</div>
  												</div>
											</form>
  										</div>
    								</div>
  								</div>
							</div>
							<div class="container cont-producto">
  								<div class="row">
    								<div class="col-8 mpg-cont">
    									<div class="border-cont-1 btn-cp">
    										<button type="button" class="btn btn-secondary"><i class="material-icons">save</i>Guardar</button>
    										<button type="button" class="btn btn-secondary"><i class="material-icons">clear</i>Cancelar</button>
    										<button type="button" class="btn btn-secondary"><i class="material-icons">print</i>Imprimir y Guardar</button>
    										<button type="button" class="btn btn-secondary"><i class="material-icons">block</i>Salir</button>
										</div>
    								</div>
    								<div class="col-4 mpg-cont total-comp-01">
    									<div class="border-cont-1 btn-cp">
    										<form>
    											<div class="form-group row">
    												<label for="inputEmail3" class="col-sm-4 col-form-label">TOTAL $:</label>
    												<div class="col-sm-8">
      													<input type="text" class="form-control" id="inputEmail3">
    												</div>
  												</div>
    										</form>
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
