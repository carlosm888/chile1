<div class="contenedor-escritorio-admin">
	<aside class="sub-menus-escritorio">
		<?php 
    		include("modulos/menus/menuproveedores.php");
		?>
	</aside>
	<div class="contenido-escritorio estilos-usuariosempresa estilos-repartidores">
		<h2><i class="material-icons">motorcycle</i>Repartidores</h2>
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
			<h2>Agregar Repartidores:</h2>
			<div class="datos-usuariosempresa img-repartidores">
				<fieldset>
				 	<legend>Fotografía:</legend>
					<table>
						<tr>
							<td><img src="img/fperfil.jpg"></td>
							<td><input type="file" name="myFile"></td>
						</tr>
					</table>
				</fieldset>
			</div>
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
			<div class="estado-usuariosempresa">
				<fieldset>
				 	<legend>Vehículos:</legend>
					<table>
						<tr>
							<th>Tipo:</th>
						</tr>
						<tr>
							<td><select>
									<option value="saab">Auto</option>
			  						<option value="volvo">Camioneta</option>
			  						<option value="saab">Furgon</option>
			  						<option value="saab">Camion</option>
			  						<option value="saab">Bicicleta</option>
			  						<option value="saab">Motocicleta</option>
								</select>
							</td>
						</tr>
					</table>
					<table>
						<tr>
							<th>Marca:</th>
							<th></th>
							<th>Modelo:</th>
							<th>Año:</th>
							<th>Color:</th>
						</tr>
						<tr>
							<td><select>
									<option value="saab">OTRO</option>
			  						<option value="volvo">KIA</option>
			  						<option value="saab">FIAT</option>
			  						<option value="saab">NISSAN</option>
			  						<option value="saab">CHERY</option>
			  						<option value="saab">CHEVROLET</option>
			  						<option value="volvo">FORD</option>
			  						<option value="saab">FOTON</option>
			  						<option value="saab">HYUNDAI</option>
			  						<option value="saab">JAC</option>
			  						<option value="saab">MAHINDRA</option>
			  						<option value="saab">SSANGYONG</option>
			  						<option value="saab">DONGFENG</option>
			  						<option value="saab">SUZUKI</option>
			  						<option value="saab">TOYOTA</option>
			  						<option value="saab">VOLVO</option>
			  						<option value="saab">VOLKSWAGEN</option>
			  						<option value="saab">YAMAHA</option>
			  						<option value="saab">KAWASAKI</option>
								</select>
							</td>
							<td><input type="text" name="rpatente"></td>
							<td><input type="text" name="rpatente"></td>
							<td><select>
			  						<option value="volvo">2012</option>
			  						<option value="saab">2013</option>
			  						<option value="saab">2014</option>
			  						<option value="saab">2015</option>
			  						<option value="saab">2016</option>
			  						<option value="volvo">2017</option>
			  						<option value="saab">2018</option>
			  						<option value="saab">2019</option>
			  						<option value="saab">2020</option>
			  						<option value="saab">2021</option>
								</select>
							</td>
							<td><input type="text" name="rcolor"></td>
						</tr>
					</table> 
				</fieldset>
			</div>
			<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button> <button><i class="material-icons">clear</i>Cancelar</button></div>
		</div>
	</div>
</div>