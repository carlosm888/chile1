<div class="contenedor-escritorio-admin">
	<aside class="sub-menus-escritorio">
		<?php 
    		include("modulos/menus/menuproductos.php");
		?>
	</aside>
	<div class="contenido-escritorio">
		<h2>Agergar Productos:</h2>
		<form>
			<div class="tabla-busquedapb">
				<div class="tabla-datosb">
					<table>
					 	<tr>
						    <td><label>Codigo:</label></td>
						    <td><input type="search" name="codigop" placeholder="Codigo"readonly="readonly"></td>
						</tr>
						<tr>
						    <td><label>Descripción</label></td>
						    <td><input type="search" name="descripcionp" placeholder="Nombre del Producto"><button><i class="material-icons">search</i>Buscar</button></td>
						</tr>
						<tr>
						    <td><label>Presentación:</label></td>
						    <td><input type="text" name="unidadmp" value="1">
									<select>
									  <option value="0">Seleccionar:</option>
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
							</td>
						</tr>
						<tr>
							<td><label>Codigo de Barra</label></td>
						    <td><input type="search" name="codigobp" placeholder="Codigo de Barra"><button><i class="material-icons">search</i>Buscar</button></td>
						</tr>
					</table>
				</div>
				<div class="tabla-imgb">
					<div class="tabla-imgb-1"><img src="img/qr.png"></div>
					<div class="tabla-imgb-2"><img src="img/arroztucapel.jpg"><br><input type="file" name="myFile"></div>
				</div>
			</div>
			<div class="table-addcategoriap">
				<table>
					<tr>
						<td><label>Departamento:</label></td>
						<td>
									<select>
									  <option value="0">Seleccionar:</option>
									  <option value="Und">Despensa</option>
									  <option value="Kg">Lacteos y huevos</option>
									  <option value="g">Aseo del Hogar</option>
									  <option value="mg">Bebidas</option>
									  <option value="L">Licores</option>
									  <option value="ml">Mascotas</option>
									</select>
						</td>
						<td><label>Sub-departamento:</label></td>
						<td>
									<select>
									  <option value="0">Seleccionar:</option>
									  <option value="Und">Arroz</option>
									  <option value="Kg">Aceites</option>
									  <option value="g">Pastas</option>
									  <option value="mg">Azucar</option>
									  <option value="L">Harinas</option>
									</select>
						</td>
					</tr>
				</table>
			</div>
			<div class="tabla-costob">
				<div class="tabla-costosb01">
					<table>
						<tr>
							<th>Costo Neto:</th>
							<th>IVA:</th>
							<th>Iaba-Ila:</th>
							<th>Costo Bruto:</th>
						</tr>
						<tr>
							<td><input type="text" name="costonetop" placeholder="Costo neto"></td>
							<td><input type="text" name="ivaneto" placeholder="IVA" readonly="readonly"></td>
							<td><input type="text" name="iaba-ilaneto" placeholder="IABA -ILA" readonly="readonly"></td>
							<td><input type="text" name="costobrutop" placeholder="Costo Bruto" readonly="readonly"></td>
						</tr>
						<tr>
							<th>Precio V1:</th>
							<th>Utilidad $:</th>
							<th>Margen %:</th>
							<th>IVA</th>
							<th>Imp.</th>
						</tr>
				 		<tr>
					    	<td><input type="text" name="preciov1p" placeholder="Precio de Venta 1"></td>
					    	<td><input type="text" name="utilidadpv1p" placeholder="Utilidad $" readonly="readonly"></td>
					    	<td><input type="text" name="margenpv1p" placeholder="Margen %" readonly="readonly"></td>
					    	<td><input type="text" name="ivapv1p" placeholder="Iva" readonly="readonly"></td>
					    	<td><input type="text" name="impv1p" placeholder="Impuestos" readonly="readonly"></td>
						</tr>
						<tr>
							<th>Estado:</th>
							<th>Activar en Web</th>
						</tr>
						<tr>
							<td>
								<select>
			  						<option value="volvo">Activado</option>
			  						<option value="saab">Desactivado</option>
								</select>
							</td>
							<td>
								<select>
			  						<option value="volvo">Activado</option>
			  						<option value="saab">Desactivado</option>
								</select>
							</td>
						</tr>				
					</table>
				</div>
				<div class="tabla-costob-impuestos">
					<table>
						<tr>
							<th>%</th>
							<th>Descripción:</th>
							<th>Acción:</th>
						</tr>
						<tr>
							<td>19</td>
							<td>IVA</td>
							<td> <input type="checkbox" name="vehicle" value="Car" checked></td>
						</tr>
						<tr>
							<td>0</td>
							<td>IVA excento</td>
							<td> <input type="checkbox" name="vehicle" value="Car"></td>
						</tr>
						<tr>
							<td>18</td>
							<td>IABA</td>
							<td> <input type="checkbox" name="vehicle" value="Car"></td>
						</tr>
						<tr>
							<td>10</td>
							<td>IABA</td>
							<td> <input type="checkbox" name="vehicle" value="Car"></td>
						</tr>
					</table>
				</div>
				
			</div>
			<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button> <button><i class="material-icons">clear</i>Cancelar</button></div>
		</form>
		<div class="tabla-resultadob">
			<table style="width:100%">
			  <tr>
			    <th>Codigo</th>
			    <th>Descripcion</th>
			    <th>Presentacion</th>
			    <th>Codigo de Barra</th>
			    <th>Costo Neto</th>
			    <th>IVA Neto</th>
			    <th>Iaba-Ila</th>
			    <th>Costo Bruto</th>
			    <th>Precio V1</th>
			    <th>Utilidad PV1</th>
			    <th>Marg % PV1</th>
			    <th>IVA</th>
			    <th>Imp.</th>
			    <th>Dpto.</th>
			    <th>Sub. Dpto.</th>
			    <th>Estado</th>
			    <th>QR</th>
			  </tr>
			  <tr>
			    <td>001</td>
			    <td>Arroz Tucapel Carozzi importado españa</td>
			    <td>2 Kg</td>
			    <td>0102030405</td>
			    <td>1000</td>
			    <td>190</td>
			    <td>0</td>
			    <td>2000</td>
			    <td>200</td>
			    <td>30</td>
			    <td>1500</td>
			    <td>150</td>
			    <td>30</td>
			    <td>Despensa</td>
			    <td>Arroz</td>
			    <td>Activado</td>
			    <td>0102030405</td>
			  </tr>
			  <tr>
			    <td>002</td>
			    <td>Aceite Lider</td>
			    <td>1 L</td>
			    <td>0202030405</td>
			    <td>2000</td>
			    <td>380</td>
			    <td>2380</td>
			    <td>3000</td>
			    <td>200</td>
			    <td>30</td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td>Activado</td>
			    <td>0202030405</td>
			  </tr>
			  <tr>
			    <td>003</td>
			    <td>Huevos Campos</td>
			    <td>30 Unid</td>
			    <td>0302030405</td>
			    <td>1000</td>
			    <td>190</td>
			    <td>1190</td>
			    <td>2000</td>
			    <td>200</td>
			    <td>30</td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td>Desactivado</td>
			    <td>0302030405</td>
			  </tr>
			</table>
		</div>
	</div>
</div>