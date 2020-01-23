<div class="contenedor-escritorio-admin">
	<aside class="sub-menus-escritorio">
		<?php 
    		include("modulos/menus/menuproveedores.php");
		?>
	</aside>
	<div class="contenido-escritorio estilos-proveedores">
		<h2><i class="material-icons">local_shipping</i>Proveedores</h2>
		<div class="lista-proveedores">
			<h2>Datos basicos de contacto:</h2>
			<form>
				<input type="text" name=""><button><i class="material-icons">search</i></button><button><i class="material-icons">clear</i></button>
				<table>
				  <tr>
				    <th>Codigo</th>
				    <th>Razon Social</th>
				    <th>Cuit/Rut/Nit</th>
				    <th>Acción</th>
				  </tr>
				  <tr>
				    <td>001</td>
				    <td>Tucapel Ltda</td>
				    <td>2234567-7</td>
				    <td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				  </tr>
				  <tr>
				    <td>002</td>
				    <td>Arco Alimento</td>
				    <td>18234567-7</td>
				    <td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				  </tr>
				</table>
			</form>
		</div>
		<div class="agregar-proveedores">
			<h2>Agregar Proveedor:</h2>
			<div class="datos-proveedor-prov">
				<fieldset>
				 	<legend>Datos basicos:</legend>
					<table>
						<tr>
							<th>Codigo:</td>
							<th>Cuit/Rut/Nit:</th>
							<th>Razon Social:</th>
							<th>Dirección:</th>
						</tr>
						<tr>
							<td><input type="text" name="" maxlength="6" size=""></td>
							<td><input type="text" name="" maxlength="15" size=""></td>
							<td><input type="text" name="" maxlength="50" size=""></td>
							<td><input type="text" name="" maxlength="100" size=""></td>
						</tr>
					</table>
				</fieldset>
			</div>
			<div class="datos-contacto-prov">
				 <fieldset>
				 	<legend>Datos contacto empresa:</legend>
					<table>
						<tr>
							<th>Contacto:</th>
							<th>Telefono:</th>
							<th>E-mail:</th>
							<th>Web:</th>
						</tr>
						<tr>
							<td><input type="text" name="" maxlength="50" size="25"></td>
							<td><input type="text" name="" maxlength="20" size="10"></td>
							<td><input type="text" name="" maxlength="60" size="25"></td>
							<td><input type="text" name="" maxlength="50" size="23"></td>
						</tr>
					</table>
				 </fieldset>
			</div>
			<div class="datos-vendedor-prov">
				<fieldset>
				 	<legend>Datos vendedor:</legend>
					<table>
						<tr>
							<th>Vendedor:</th>
							<th>Telefono:</th>
							<th>E-mail:</th>
						</tr>
						<tr>
							<td><input type="text" name=""></td>
							<td><input type="text" name=""></td>
							<td><input type="text" name=""></td>
						</tr>
					</table>
				</fieldset>
			</div>
			<div class="estado-datos-prov">
				<fieldset>
				 	<legend>Estatus del Proveedor:</legend>
					<table>
						<tr>
							<td>Estado:</td>
							<td><select>
			  						<option value="volvo">Activado</option>
			  						<option value="saab">Desactivado</option>
								</select>
							</td>
						</tr>
					</table>
				</fieldset>
			</div>
			<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button> <button><i class="material-icons">clear</i>Cancelar</button></div>
		</div>
	</div>
</div>