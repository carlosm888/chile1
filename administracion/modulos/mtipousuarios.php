<div class="contenedor-escritorio-admin">
	<div class="contenido-escritorio">
		<h2><i class="material-icons">person</i>Tipos de usuario:</h2>
		<form>
			<div class="tabla-busquedapb tipos-usuariosempresa">
				<div class="tabla-tiposusuariosempresa">
					<h2>Lista de tipos de usuario</h2>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Nombre de categoria</th>
							<th>Acción</th>
						</tr>
						<tr>
							<td>001</td>
							<td>Administrador</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
						<tr>
							<td>002</td>
							<td>Repartidor</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
						<tr>
							<td>003</td>
							<td>Usuario N1</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
						<tr>
							<td>004</td>
							<td>Usuario N2</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
					</table>
				</div>
				<div class="tabla-datosb tabla-privilegios">
					<h2>Agregar Tipo de Usuario</h2>
					<table>
					 	<tr>
						    <td><label>Codigo:</label></td>
						    <td><input type="text" name="codigodcategoria" placeholder="Codigo"></td>
						</tr>
						<tr>
						    <td><label>Nombre:</label></td>
						    <td><input type="text" name="nombredcategoria" placeholder="Ej.: Administrador"></td>
						</tr>
					</table>
					<table class="tabla-privilegios01">
						<h3>Privilegios segun tipo de usuario:</h3>
						<tr>
							<th>Privilegios</th>
							<th>Activado</th>
							<th>Desactivado</th>
						</tr>
						<tr>
							<td>Administacion Local Full</td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg1" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg1" value="male"></td>
						</tr>
						<tr>
							<td>Administacion Web Full</td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg2" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg2" value="male"></td>
						</tr>
						<tr>
							<td>Facturacion Electronica full</td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg3" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg3" value="male"></td>
						</tr>
						<tr>
							<td>Reportes full</td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg4" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg4" value="male"></td>
						</tr>
						<tr>
							<td>Configuraciones full</td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg5" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="pvg5" value="male"></td>
						</tr>
					</table>
					<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button><button><i class="material-icons">clear</i>Cancelar</button></div>
				</div>
			</div>
		</form>
	</div>
</div>