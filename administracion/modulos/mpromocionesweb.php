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
	    			<h3><i class="material-icons">visibility</i> Activar y desactivar promociones:</h3>
	    			<table id="example" class="table table-striped table-bordered" style="width:100%">
				        <thead>
				            <tr>
				            	<th>Imagen</th>
				                <th>Categoria</th>
				                <th>Nombre de promociones</th>
				                <th>Unid</th>
				                <th>Precio</th>
				                <th>Estado</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td class="text-center"><img src="img/arroztucapel.jpg"></td>
				                <td>Promocion</td>
				                <td>Arroz tucapel</td>
				                <td class="text-center">900g</td>
				                <td class="text-right">1200</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/aceitegirasol.jpg"></td>
				                <td>Promocion</td>
				                <td>Aceite Girasol</td>
				                <td class="text-center">1L</td>
				                <td class="text-right">900</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/huevos.jpg"></td>
				                <td>Promocion</td>
				                <td>Huevos sol</td>
				                <td class="text-center">30 und</td>
				                <td class="text-right">2900</td>
				                <td class="text-center"><button type="button" class="btn btn-danger"><i class="material-icons">visibility_off</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/yogurt.png"></td>
				                <td>Promocion</td>
				                <td>6 Pack yogurt soprole</td>
				                <td class="text-center">54g</td>
				                <td class="text-right">1250</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/volcanesdelsur.jpg"></td>
				                <td>Promocion</td>
				                <td>Cerveza Volcanes del sur</td>
				                <td class="text-center">900ml</td>
				                <td class="text-right">1800</td>
				                <td class="text-center"><button type="button" class="btn btn-danger"><i class="material-icons">visibility_off</i></button></td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/redlaabel.jpg"></td>
				                <td>Promocion</td>
				                <td>Wisky red label</td>
				                <td class="text-center">75ml</td>
				                <td class="text-right">13.000</td>
				                <td class="text-center"><button type="button" class="btn btn-success"><i class="material-icons">visibility</i></button></td>
				            </tr>
				        </tbody>
				        <tfoot>
				            <tr>
				                <th>Imagen</th>
				                <th>Categoria</th>
				                <th>Nombre de promociones</th>
				                <th>Unid</th>
				                <th>Precio</th>
				                <th>Estado</th>
				            </tr>
				        </tfoot>
				    </table>
	    		</div>
	    		<div class="col-2 asidepweb">
	    			<div class="card" style="width:100%">
  						<div class="card-header">
    					Estado de Promociones
  						</div>
  						<ul class="list-group list-group-flush">
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-success"><i class="material-icons">visibility</i></span></div>
    							<div class="list-p2"><p class="p-publi">Publicado</p><p class="nro-pyd">100<span>Promo</span></p></div>
    						</li>
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-danger"><i class="material-icons">visibility_off</i></span></div>
    							<div class="list-p2"><p class="p-desp">Despublicado</p><p class="nro-pyd-desp">2<span>Promo</span></p></div>
    						</li>
  						</ul>
					</div>
	    		</div>
	  		</div>
	  		</div>
		</div>
	</div>
</div>