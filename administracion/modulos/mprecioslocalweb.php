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
	    			<h3><i class="material-icons">monetization_on</i> Cambio masivo de precios</h3>
	    			<table id="example" class="table table-striped table-bordered" style="width:100%">
				        <thead>
				            <tr>
				            	<th>Imagen</th>
				                <th>Categoria</th>
				                <th>Nombre Producto</th>
				                <th>Unid</th>
				                <th>Costo Neto</th>
				                <th>Utilidad $</th>
				                <th>Margen %</th>
				                <th>P. V1 anterior</th>
				                <th>P. V1 actual</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td class="text-center"><img src="img/arroztucapel.jpg"></td>
				                <td>Despensa</td>
				                <td>Arroz tucapel Arroz tucapel Arroz tucapel</td>
				                <td class="text-center">900g</td>
				                <td class="text-right">1000</td>
				                <td class="text-center">200</td>
				                <td class="text-center">10</td>
				                <td class="text-center">1309</td>
				                <td class="text-center">
      								<div class="col">
      <input type="text" class="form-control" placeholder="State">
    </div>
    							</td>
				                
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/aceitegirasol.jpg"></td>
				                <td>Despensa</td>
				                <td>Aceite Girasol</td>
				                <td class="text-center">900g</td>
				                <td class="text-right">1000</td>
				                <td class="text-center">200</td>
				                <td class="text-center">10</td>
				                <td class="text-center">1309</td>
				                <td class="text-center"><div class="">
      							
    							</td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/huevos.jpg"></td>
				                <td>Huevos-Lacteo</td>
				                <td>Huevos sol</td>
				                <td class="text-center">900g</td>
				                <td class="text-right">1000</td>
				                <td class="text-center">200</td>
				                <td class="text-center">10</td>
				                <td class="text-center">1309</td>
				                <td class="text-center"><div class="">
      							
    							</td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/yogurt.png"></td>
				                <td>Hevos-Lacteos</td>
				                <td>6 Pack yogurt soprole</td>
				                <td class="text-center">900g</td>
				                <td class="text-right">1000</td>
				                <td class="text-center">200</td>
				                <td class="text-center">10</td>
				                <td class="text-center">1309</td>
				                <td class="text-center"><div class="">
      							
    							</td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/volcanesdelsur.jpg"></td>
				                <td>Licor</td>
				                <td>Cerveza Volcanes del sur</td>
				                <td class="text-center">900g</td>
				                <td class="text-right">1000</td>
				                <td class="text-center">200</td>
				                <td class="text-center">10</td>
				                <td class="text-center">1309</td>
				                <td class="text-center"><div class="">
      							
    							</td>
				            </tr>
				            <tr>
				                <td class="text-center"><img src="img/redlaabel.jpg"></td>
				                <td>Licor</td>
				                <td>Wisky red label</td>
				                <td class="text-center">900g</td>
				                <td class="text-right">1000</td>
				                <td class="text-center">200</td>
				                <td class="text-center">10</td>
				                <td class="text-center">1309</td>
				                <td class="text-center"><div class="">
      							
    							</td>
				            </tr>
				        </tbody>
				        <tfoot>
				            <tr>
				                <th>Imagen</th>
				                <th>Categoria</th>
				                <th>Nombre Producto</th>
				                <th>Unid</th>
				                <th>Costo Neto</th>
				                <th>Utilidad $</th>
				                <th>Margen %</th>
				                <th>P. V1 anterior</th>
				                <th>P. V1 actual</th>
				            </tr>
				        </tfoot>
				    </table>
	    		</div>
	    		<div class="col-2 asidepweb">
	    			<div class="card" style="width:100%">
  						<div class="card-header">
    					Margenes de Precios
  						</div>
  						<ul class="list-group list-group-flush">
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-success"><i class="material-icons">monetization_on</i></span></div>
    							<div class="list-p2"><p class="p-publi">Sobre 20%</p><p class="nro-pyd">2000<span>Productos</span></p></div>
    						</li>
    						<li class="list-group-item">
    							<div class="list-p1"><span class="btn btn-danger"><i class="material-icons">monetization_on</i></span></div>
    							<div class="list-p2"><p class="p-desp">Bajo 20%</p><p class="nro-pyd-desp">50<span>Productos</span></p></div>
    						</li>
  						</ul>
					</div>
	    		</div>
	  		</div>
	  		</div>
		</div>
	</div>
</div>