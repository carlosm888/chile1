<div class="contenedor-escritorio-admin">
	<div class="contenido-escritorio">
		<h2><i class="material-icons">store</i>Locales:</h2>
		<form>
			<div class="tabla-busquedapb conf-impuesto estilos-local">
				<div class="tabla-lista-impuestos">
					<h2>Lista de locales agregados</h2>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Dirección:</th>
							<th>Acción:</th>
						</tr>
						<tr>
							<td>001</td>
							<td>Nunoa 1</td>
							<td>Irarrazabal 4102</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
						<tr>
							<td>002</td>
							<td>Nunoa 2</td>
							<td>Jose Pedro Alessandri 140</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
					</table>
				</div>
				<div class="tabla-datosb">
					<div>
						<h2>Agregar Locales:</h2>
						<table>
							<tr>
								<th>Codigo:</th>
								<th>Nombre:</th>
								<th>Dirección:</th>
							</tr>
							<tr>
							    <td><input type="text" name="codigolocal" placeholder="Codigo" maxlength="100" size="6"></td>
							    <td><input type="text" name="nombrelocal" placeholder="Ej.: Nunoa 1"></td>
							    <td><input type="text" name="direccionlocal" placeholder="Ej.: Irarrazaval 4102"></td>
							</tr>
						</table>
						<table>
							<tr>
								<th>Responsable:</th>
								<th>Teléfono:</th>
								<th>E-mail:</th>
							</tr>
							<tr>
							    <td><input type="text" name="responsablelocal" placeholder="Carlos Garcia"></td>
							    <td><input type="text" name="telefonolocal" placeholder="Ej.: 959420632"></td>
							    <td><input type="text" name="emaillocal" placeholder="Ej.: carlosm888@gmail.com"></td>
							</tr>
						</table>
						<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button><button><i class="material-icons">clear</i>Cancelar</button></div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
