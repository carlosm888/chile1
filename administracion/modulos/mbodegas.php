<div class="contenedor-escritorio-admin">
	<div class="contenido-escritorio">
		<h2><i class="material-icons">home_work</i>Bodegas:</h2>
		<form>
			<div class="tabla-busquedapb conf-impuesto estilos-bodega">
				<div class="tabla-lista-impuestos">
					<h2>Lista de Bodegas</h2>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Nombre Bodega</th>
							<th>Local Raiz</th>
							<th>Acción:</th>
						</tr>
						<tr>
							<td>001</td>
							<td>Bodega 1</td>
							<td>Nunoa 1</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
					</table>
				</div>
				<div class="tabla-datosb">
					<h2>Agregar Bodegas</h2>
					<table>
							<tr>
								<th>Codigo:</th>
								<th>Nombre:</th>
								<th>Local Raíz:</th>
							</tr>
							<tr>
							    <td><input type="text" name="codigobodega" placeholder="Codigo" maxlength="100" size="6"></td>
							    <td><input type="text" name="nombrebodega" placeholder="Ej.: Nunoa 1"></td>
							    <td><select>
			  						<option value="volvo">Nunoa 1</option>
			  						<option value="saab">Nunua 2</option>
			  						<option value="mercedes">Nunoa 3</option>
								</select>
							</td>
							</tr>
						</table>
						<table>
							<tr>
								<th>Responsable:</th>
								<th>Teléfono:</th>
								<th>E-mail:</th>
							</tr>
							<tr>
							    <td><input type="text" name="responsablebodega" placeholder="Carlos Garcia"></td>
							    <td><input type="text" name="telefonobodega" placeholder="Ej.: 959420632"></td>
							    <td><input type="text" name="emailbodega" placeholder="Ej.: carlosm888@gmail.com"></td>
							</tr>
						</table>
					<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button><button><i class="material-icons">clear</i>Cancelar</button></div>
				</div>
			</div>
		</form>
	</div>
</div>