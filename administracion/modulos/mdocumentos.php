<div class="contenedor-escritorio-admin">
	<div class="contenido-escritorio">
		<h2><i class="material-icons">assignment</i>Documentos:</h2>
		<form>
			<div class="tabla-busquedapb conf-impuesto estilos-documentos">
				<div class="tabla-lista-impuestos">
					<h2>Lista de documentos agregados</h2>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Nombre de impuesto</th>
							<th>Acción:</th>
						</tr>
						<tr>
							<td>001</td>
							<td>Factura</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
						<tr>
							<td>002</td>
							<td>Nota de Credito</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
						<tr>
							<td>003</td>
							<td>Guia de despacho</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
					</table>
				</div>
				<div class="tabla-datosb">
					<h2>Agregar Documentos:</h2>
					<table>
					 	<tr>
						    <th>Codigo:</th>
						    <th>Nombre:</th>						    
						</tr>
						<tr>
						    <td><input type="text" name="codigodocumento" placeholder="Codigo" maxlength="100" size="4"></td>
						    <td><input type="text" name="nombredocumento" placeholder="Ej.: Factura"></td>
						</tr>

					</table>
					<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button><button><i class="material-icons">clear</i>Cancelar</button></div>
				</div>
			</div>
		</form>
	</div>
</div>