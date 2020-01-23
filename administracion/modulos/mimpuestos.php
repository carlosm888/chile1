<div class="contenedor-escritorio-admin">
	<div class="contenido-escritorio">
		<h2><i class="material-icons">iso</i>Configuracion de impuestos:</h2>
		<form>
			<div class="tabla-busquedapb conf-impuesto estilos-impuestos">
				<div class="tabla-lista-impuestos">
					<h2>Lista de impuestos agregados</h2>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Nombre de impuesto</th>
							<th>Valor %</th>
							<th>Acción:</th>
						</tr>
						<tr>
							<td>001</td>
							<td>IVA</td>
							<td>19%</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
					</table>
				</div>
				<div class="tabla-datosb">
					<h2>Agregar y editar impuesto</h2>
					<table>
					 	<tr>
						    <td><label>Codigo:</label></td>
						    <td><input type="search" name="codigoimpuesto" placeholder="Codigo" maxlength="20" size="20"><button><i class="material-icons">search</i>Buscar</button></td>
						</tr>
						<tr>
						    <td><label>Nombre:</label></td>
						    <td><input type="search" name="descripcionp" placeholder="Ejemplo: IVA" maxlength="50" size="20"><button><i class="material-icons">search</i>Buscar</button></td>
						</tr>
						<tr>
						    <td><label>Valor:</label></td>
						    <td><input type="text" name="valorimpuesto" value="" maxlength="20" size="20"></td>
						    <td><span class="pimpuesto">%</span></td>
						</tr>

					</table>
					<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button><button><i class="material-icons">delete</i>Eliminar</button><button><i class="material-icons">clear</i>Cancelar</button></div>
				</div>
			</div>
		</form>
	</div>
</div>