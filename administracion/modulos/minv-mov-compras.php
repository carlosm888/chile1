<div class="contenedor-escritorio-admin">
	<aside class="sub-menus-escritorio">
		<?php 
    		include("modulos/menus/menuinv-movimientos.php");
		?>
	</aside>
	<div class="contenido-escritorio">
		<div class="ventanas-inventario">
			<div class="encabezadov-inv">
				<div class="operador-inv">
					<table>
						<tr>
							<td>Operador: <span>CARLOS GARCIA</span></td>
						</tr>
					</table>
				</div>
				<div class="ubicacionf-inv">
					<table>
						<tr>
							<td>Local:</td>
							<td><select>
			  						<option value="volvo">Local 01</option>
			  						<option value="saab">Local 02</option>
			  						<option value="mercedes">Local 03</option>
								</select>
							</td>
							<td>Bodega:</td>
							<td><select>
			  						<option value="volvo">Bodega 1</option>
			  						<option value="saab">Bodega 2</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="datos-basicosv-inv">
				<div class="datos-proveedor-inv">
					<h3>Proveedores</h3>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
						</tr>
						<tr>
							<td><input type="text" name="codigoprov" value="1" maxlength="8" size="8"></td>
							<td><input type="search" name="nombreprov" value="1"><button><i class="material-icons">search</i>Buscar</button></td>
						</tr>
						<tr>
							<td>O.Compras</td>
							<td><button>Ordenes de compras pendientes</button></td>
						</tr>

					</table>
				</div>
				<div class="datos-factura-inv">
					<h3>Datos de factura</h3>
					<table>
						<tr><td><button>Guardar Borrador</button><button>Restaurar Borrador</button></td>
						</tr>
					</table>
					<table>
						<tr>
							<th>Fecha</th>
							<th>Tipo</th>
							<th>PV</th>
							<th>Número</th>
						</tr>
						<tr>
							<td><input type="date" name="nombreprov" value="1" maxlength="40" size="40"></td>
							<td>
								<select>
									  <option value="0">Factura</option>
									  <option value="Und">Nota de credito</option>
									  <option value="Kg">Guia de despacho</option>
								</select>
							</td>
							<td><input type="text" name="preffactprov" value="1" maxlength="8" size="8"></td>
							<td><input type="text" name="numerofacturaprov" value="1" maxlength="20" size="20"></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="detallesv-inv">
				<div class="cant-productov-inv">
					<h3>Producto</h3>
					<table>
						<tr>
							<th>Código</th>
							<th>Description</th>
							<th>Cantidad</th>
							<th></th>
							<th>Presentación</th>
							<th></th>
							<th>Cantidad Total</th>
							<th>Stock Actual</th>
						</tr>
						<tr>
							<td><input type="text" name="" value="" maxlength="10" size="10"></td>
							<td><input type="search" name="" value="" maxlength="100" size="50"><button><i class="material-icons">search</i>Buscar</button></td>
							<td><input type="text" name="" value="" maxlength="15" size="15"></td>
							<td>x</td>
							<td><input type="text" name="" value="" maxlength="15" size="15"></td>
							<td>=</td>
							<td><input type="text" name="" value="" maxlength="15" size="15"></td>
							<td><input type="text" name="" value="" maxlength="15" size="15"></td>
						</tr>
					</table>
					<table>
						<tr>
							<th>Neto base unitario</th>
							<th>Descuento total $</th>
							<th>Subtotal</th>
							<th>Neto</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td><input type="text" name="" value="" maxlength="50" size="15"></td>
							<td><input type="text" name="" value="" maxlength="50" size="20"></td>
							<td><input type="text" name="" value="" maxlength="50" size="20"></td>
							<td><input type="text" name="" value="" maxlength="50" size="20"></td>
							<td><button class="btn-mcargafact"><i class="material-icons">add</i>Cargar</button></td>
							<td><button class="btn-mcargafact"><i class="material-icons">clear</i>Cancelar</button></td>
							<td><button class="btn-mcargafact"> <i class="material-icons">delete_forever</i>Eliminar</button></td>
						</tr>
					</table>
				</div>
				<div class="detalles-productov-inv">
					<table>
						<tr>
							<th>Código</th>
							<th>Descripción</th>
							<th>Cantidad</th>
							<th>Unidad</th>
							<th>Descuento</th>
							<th>Prec. Unitario</th>
							<th>Total neto</th>
						</tr>
						<tr>
							<td>	</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="finalv-inv">
				<div class="detalles-impuestosv-inv">
					<div class="botones-di-inv"><button>Detalle Impuestos</button></div>
					<div class="tabla-di-inv">
						<table>
						<tr>
							<th>%</th>
							<th>Descripción</th>
							<th>Importe</th>
						</tr>
						<tr>
							<td>19</td>
							<td>Iva</td>
							<td>190</td>
						</tr>
						<tr>
							<td>19</td>
							<td>Iva</td>
							<td>190</td>
						</tr>
						<tr>
							<td>19</td>
							<td>Iva</td>
							<td>190</td>
						</tr>
						<tr>
							<td>19</td>
							<td>Iva</td>
							<td>190</td>
						</tr>
						</table>
					</div>
				</div>
				<div class="detalles-totales-inv">
					<table>
						<tr>
							<th>Cantidad Total:</th>
							<th>Subtotal $:</th>
							<th>Descuento$:</th>
							<th>Total neto $:</th>
						</tr>
						<tr>
							<td><input type="text" name=""></td>
							<td><input type="text" name=""></td>
							<td><input type="text" name=""></td>
							<td><input type="text" name=""></td>
						</tr>
					</table>
				</div>
				<div class="botones-inventariov-inv">
					<div class="finalv-btn-inv">
						<button>Guardar</button>
						<button>Cancelar</button>
						<button>Imprimir y Guardar</button>
						<button>Salir</button>
					</div>
					<div class="finalv-total-inv">
						<table>
							<tr>
								<td>TOTAL $:</td>
								<td><input type="text" name=""value="5000"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>