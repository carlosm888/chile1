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
	  		<div class="row">
	    		<div class="col-10 est-table-adp">
	    			<h3><i class="material-icons">visibility</i>Ordenes:</h3>
	    			<table id="example" class="table table-striped table-bordered table-ordenes" style="width:100%">
				        <thead>
				            <tr>
				            	<th>Nro.</th>
				                <th>Cliente</th>
				                <th>Comuna</th>
				                <th>Dirección</th>
				                <th>Fecha E.</th>
				                <th>Hora E</th>
				                <th>Total $</th>
				                <th>Estatus</th>
				                <th>Detalle:</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-dark btn-detalle-orden-est ocpe">Pendiente</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden" data-toggle="modal" data-target="#detalle-ordenes-1"><i class="material-icons">assignment</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-warning btn-detalle-orden-est ocr">Recibida</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden"><i class="material-icons">assignment</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-Primary btn-detalle-orden-est ocpre">Preparando</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden"><i class="material-icons">assignment</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-primary btn-detalle-orden-est ocenv">Por enviar</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden"><i class="material-icons">assignment</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-danger btn-detalle-orden-est ocenc">En camino</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden"><i class="material-icons">assignment</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-success btn-detalle-orden-est">Entregado</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden"><i class="material-icons">assignment</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-danger btn-detalle-orden-est ocne">No entregado</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden"><i class="material-icons">assignment</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-warning btn-detalle-orden-est ocp">Problema</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden"><i class="material-icons">assignment</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">12000</td>
				                <td><span class="ord-cliente1">Carlosm888@gmail.com</span><span class="ord-cliente">+56959420632</span></td>
				                <td class="text-left">Ñuñoa</td>
				                <td class="text-left">Jose Pedro Alessandri 170  B 12345678 4567</td>
				                <td class="text-center">05/02/2020</td>
				                <td class="text-center">02:00pm-04:00pm</td>
				                <td class="text-right">$250.000</td>
				                
				                <td class="text-center"><button type="button" class="btn btn-success btn-detalle-orden-est ocfin">Finalizado</button></td>
				                <td class="text-center"><button type="button" class="btn btn-light btn-detalle-orden"><i class="material-icons">assignment</i></button></td>
				            </tr>
				        </tbody>
				        <tfoot>
				            <tr>
				                <th>Nro.</th>
				                <th>Cliente</th>
				                <th>Comuna</th>
				                <th>Dirección</th>
				                <th>Fecha E.</th>
				                <th>Hora E</th>
				                <th>Total $</th>
				                <th>Estatus</th>
				                <th>Detalle:</th>
				            </tr>
				        </tfoot>
				    </table>
	    		</div>
	    		<div class="col-2 asidepweb">
	    			<div class="card" style="width:100%">
  						<div class="card-header">
    					Estatus Ordenes
  						</div>
  						<ul class="list-group list-group-flush">
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-warning ocr"><i class="material-icons">move_to_inbox</i></span></div>
    							<div class="list-p2"><p class="p-publi">Recibida</p><p class="nro-pyd">2000<span>Ordenes</span></p></div>
    						</li>
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-primary ocpre"><i class="material-icons">sports_kabaddi</i></span></div>
    							<div class="list-p2"><p class="p-desp">Preparando</p><p class="nro-pyd-desp">50<span>Ordenes</span></p></div>
    						</li>
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-primary"><i class="material-icons">how_to_vote</i></span></div>
    							<div class="list-p2"><p class="p-desp">Por Enviar</p><p class="nro-pyd-desp">50<span>Ordenes</span></p></div>
    						</li>	
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-success"><i class="material-icons">assignment_turned_in</i></span></div>
    							<div class="list-p2"><p class="p-desp">Entregado</p><p class="nro-pyd-desp">50<span>Ordenes</span></p></div>
    						</li>
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-warning ocp"><i class="material-icons">warning</i></span></div>
    							<div class="list-p2"><p class="p-desp">Problema</p><p class="nro-pyd-desp">50<span>Ordenes</span></p></div>
    						</li>
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-danger ocne"><i class="material-icons">remove_shopping_cart</i></span></div>
    							<div class="list-p2"><p class="p-desp">No Entregado</p><p class="nro-pyd-desp">50<span>Ordenes</span></p></div>
    						</li>
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-success ocfin"><i class="material-icons">done_outline</i></span></div>
    							<div class="list-p2"><p class="p-desp">Finalizado</p><p class="nro-pyd-desp">50<span>Ordenes</span></p></div>
    						</li>
    						
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-danger ocenc"><i class="material-icons">motorcycle</i></span></div>
    							<div class="list-p2"><p class="p-desp">En camino</p><p class="nro-pyd-desp">50<span>Ordenes</span></p></div>
    						</li>
    						
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-dark ocpe"><i class="material-icons">pause</i></span></div>
    							<div class="list-p2"><p class="p-desp">Pendiente</p><p class="nro-pyd-desp">50<span>Ordenes</span></p></div>
    						</li>
  						</ul>
					</div>
	    		</div>
	  		</div>
	  		</div>
		</div>
	</div>
</div>