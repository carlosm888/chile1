<div class="contenedor-escritorio-admin">
	<aside class="sub-menus-escritorio">
		<?php 
    		include("modulos/menus/menuproveedores.php");
		?>
	</aside>
	<div class="contenido-escritorio estilos-usuariosempresa">
		<h2><i class="material-icons">person</i>Usuario</h2>
		<div class="lista-usuariosempresa">
			<h2>Datos basicos de contacto:</h2>
			<form>
				<input type="text" name=""><button><i class="material-icons">search</i></button><button><i class="material-icons">clear</i></button>
				<table>
				  <tr>
				    <th>Codigo</th>
				    <th>Nombre</th>
				    <th>Apellido</th>
				    <th>Usuario</th>
				    <th>Acción</th>
				  </tr>
				  <tr>
				    <td>001</td>
				    <td>Carlos</td>
				    <td>Garcia</td>
				    <td>carlosm888</td>
				    <td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				  </tr>
				  <tr>
				    <td>002</td>
				    <td>Miguel</td>
				    <td>Villavicencio</td>
				    <td>miguel2019</td>
				    <td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
				  </tr>
				</table>
			</form>
		</div>
		<div class="agregar-usuariosempresa">
			<h2>Agregar Usuarios:</h2>
			<div class="datos-usuariosempresa">
				<fieldset>
				 	<legend>Datos basicos:</legend>
					<table>
						<tr>
							<th>Codigo:</td>
							<th>Tipo de Doc.:</th>
							<th>Nro. Documento:</th>
							<th>Nombre:</th>
							<th>Apellido:</th>
						</tr>
						<tr>
							<td><input type="text" name="" maxlength="6" size="6"></td>
							<td>
						    	<select>
			  						<option value="volvo">RUT</option>
			  						<option value="saab">Pasaporte</option>
			  						<option value="mercedes">DNI</option>
								</select>
						    </td>
							<td><input type="text" name="" maxlength="15" size=""></td>
							<td><input type="text" name="" maxlength="50" size=""></td>
							<td><input type="text" name="" maxlength="100" size=""></td>
						</tr>
					</table>
				</fieldset>
			</div>
			<div class="datos-sesion-usuariosempresa">
				<fieldset>
				 	<legend>Datos de sesion:</legend>
					<table>
						<tr>
							<th>Nombre de Usuario:</th>
							<th>Contraseña:</th>
							<th>Confirmar contraseña:</th>
						</tr>
						<tr>
							<td><input type="text" name="nombreusuempresa"></td>
							<td><input type="password" name="passworempresa"></td>
							<td><input type="password" name="rpasswordempresa"></td>
						</tr>
					</table>
				</fieldset>
			</div>
			<div class="datos-contacto-usuariosempresa">
				 <fieldset>
				 	<legend>Datos contacto:</legend>
					<table>
						<tr>
							<th>E-mail:</th>
							<th>Telefono:</th>
						</tr>
						<tr>
							<td><input type="text" name="" maxlength="50" size=""></td>
							<td><input type="text" name="" maxlength="20" size=""></td>
						</tr>
					</table>
				 </fieldset>
			</div>
			<div class="estado-usuariosempresa">
				<fieldset>
				 	<legend>Seguridad:</legend>
					<table>
						<tr>
							<th>Tipo:</th>
							<th>Estado:</th>
							<th>Cambiar Contraseña:</th>
						</tr>
						<tr>
							<td><select>
			  						<option value="volvo">Administrador</option>
			  						<option value="saab">Repartidor</option>
			  						<option value="saab">Unsuario N1</option>
			  						<option value="saab">Unsuario N2</option>
								</select>
							</td>
							<td><select>
			  						<option value="volvo">Activado</option>
			  						<option value="saab">Desactivado</option>
								</select>
							</td>
							<td><select>
			  						<option value="volvo">No</option>
			  						<option value="saab">Si</option>
								</select>
							</td>
						</tr>
					</table>
				</fieldset>
			</div>
			<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button> <button><i class="material-icons">clear</i>Cancelar</button></div>
		</div>
		<div class="tabla-resultadousuempresa">
			<table style="width:100%">
			  <tr>
			    <th>Codigo</th>
			    <th>tipo Doc</th>
			    <th>Nro Doc.</th>
			    <th>Nombre</th>
			    <th>Apellido</th>
			    <th>Usuario</th>
			    <th>Contraseña</th>
			    <th>Email</th>
			    <th>Teléfono</th>
			    <th>Tipo</th>
			    <th>Estado</th>
			    <th>C. Pass.</th>
			  </tr>
			  <tr>
			    <td>001</td>
			    <td>Rut</td>
			    <td>26571438-2</td>
			    <td>Carlos</td>
			    <td>Garcia</td>
			    <td>carlosm888</td>
			    <td>123456</t>
			    <td>carlosm888@gmail.com</td>
			    <td>959429632</td>
			    <td>Administrador</td>
			    <td>Activado</td>
			    <td>No</td>
			  </tr>
			  <tr>
			    <td>001</td>
			    <td>Pasaporte</td>
			    <td>086413415</td>
			    <td>Miguel</td>
			    <td>Villavicencio</td>
			    <td>miguel2019</td>
			    <td>123456</t>
			    <td>miguel@gmail.com</td>
			    <td>959429632</td>
			    <td>Usuario N1</td>
			    <td>Activado</td>
			    <td>Si</td>
			  </tr>
			</table>
		</div>
	</div>
</div>