<div class="contenedor-escritorio-admin">
	<div class="contenido-escritorio">
		<h2><i class="material-icons">room</i>Comunas</h2>
		<form>
			<div class="tabla-busquedapb conf-impuesto">
				<div class="tabla-lista-impuestos">
					<h2>Lista de comunas</h2>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Region raiz</th>
							<th>Acción</th>
						</tr>
						<tr>
							<td>001</td>
							<td>Nuñoa</td>
							<td>Región Metropolitana</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
						<tr>
							<td>002</td>
							<td>La Reina</td>
							<td>Región Metropolitana</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
					</table>
				</div>
				<div class="tabla-datosb">
					<h2>Agregar Comunas</h2>
					<table>
					 	<tr>
						    <td><label>Codigo:</label></td>
						    <td><input type="text" name="codigocomuna" placeholder="Codigo"></td>
						</tr>
						<tr>
							<td><label>Región raíz:</label></td>
							<td>
						    	<select>
			  						<option value="volvo">Región Metropolitana</option>
								</select>
						    </td>
						</tr>
						<tr>
						    <td><label>Nombre:</label></td>
						    <td><input type="text" name="nombresubcategoria" placeholder="Ej.: Ñuñoa"></td>
						</tr>

					</table>
					<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button><button><i class="material-icons">delete</i>Eliminar</button><button><i class="material-icons">clear</i>Cancelar</button></div>
				</div>
			</div>
		</form>
	</div>
</div>