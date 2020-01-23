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
	    			<h3><i class="material-icons">alarm</i> Activar y desactivar horarios:</h3>
	    			<table id="example" class="table table-striped table-bordered" style="width:100%">
				        <thead>
				            <tr>
				            	<th>Franja</th>
				                <th>Lunes</th>
				                <th>Martes</th>
				                <th>Miercoles</th>
				                <th>Jueves</th>
				                <th>Viernes</th>
				                <th>Sabado</th>
				                <th>Domingo</th>
				                <th>Estado</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td class="text-center">02:00 - 04:00</td>
				       			<td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">02:00 - 04:00</td>
				       			<td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center"><button type="button" class="btn btn-danger"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">02:00 - 04:00</td>
				       			<td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">02:00 - 04:00</td>
				       			<td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center"><button type="button" class="btn btn-danger"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">04:00 - 06:00</td>
				       			<td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">06:00 - 08:00</td>
				       			<td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">No</td>
				                <td class="text-center">No</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center">08:00 - 10:00</td>
				       			<td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">Si</td>
				                <td class="text-center">No</td>
				                <td class="text-center">No</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				        </tbody>
				        <tfoot>
				            <tr>
				                <th>Franja</th>
				                <th>Lunes</th>
				                <th>Martes</th>
				                <th>Miercoles</th>
				                <th>Jueves</th>
				                <th>Viernes</th>
				                <th>Sabado</th>
				                <th>Domingo</th>
				                <th>Estado</th>
				            </tr>
				        </tfoot>
				    </table>
	    		</div>
	    		<div class="col-2 asidepweb">
	    			<div class="card" style="width:100%">
  						<div class="card-header">
    					Estado de horarios
  						</div>
  						<ul class="list-group list-group-flush">
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-success"><i class="material-icons">visibility</i></span></div>
    							<div class="list-p2"><p class="p-publi">Publicado</p><p class="nro-pyd">5<span>Franja</span></p></div>
    						</li>
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-danger"><i class="material-icons">visibility_off</i></span></div>
    							<div class="list-p2"><p class="p-desp">Despublicado</p><p class="nro-pyd-desp">2<span>Franja</span></p></div>
    						</li>
  						</ul>
					</div>
	    		</div>
	  		</div>
	  		</div>
		</div>
	</div>
</div>