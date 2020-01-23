<div class="contenedor-escritorio-admin">
	<div class="contenido-escritorio">
		<h2><i class="material-icons">alarm</i>Horarios:</h2>
		<form>
			<div class="tabla-busquedapb conf-impuesto estilos-horarios">
				<div class="tabla-lista-impuestos">
					<h2>Lista de horarios agregadas</h2>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Horario</th>
							<th>Dias</th>
							<th>Acción</th>
						</tr>
						<tr>
							<td>001</td>
							<td>02:00pm - 04:00pm</td>
							<td>L-M-MI-J-V-S-D</td>
							<td class="td-botones"><button all="Editar" title="Editar"><i class="material-icons">edit</i></button><button all="Eliminar" title="Eliminar"><i class="material-icons">delete</i></button></td>
						</tr>
					</table>
				</div>
				<div class="tabla-datosb horarios-reparto">
					<h2>Agregar Horarios</h2>
					<table>
						<tr>
							<th>Codigo</th>
							<th>Hora inicio</th>
							<th>AM/PM</th>
							<th>Hora fin</th>
							<th>AM/PM</th>
						</tr>
					 	<tr>
						    <td><input type="text" name="codigohora" placeholder="Ej.:Codigo" size="7" maxlength="20"></td>
						    <td>
						    	<select>
			  						<option value="volvo">01:00</option>
			  						<option value="volvo">02:00</option>
			  						<option value="volvo">03:00</option>
			  						<option value="volvo">04:00</option>
			  						<option value="volvo">05:00</option>
			  						<option value="volvo">06:00</option>
			  						<option value="volvo">07:00</option>
			  						<option value="volvo">08:00</option>
			  						<option value="volvo">09:00</option>
			  						<option value="volvo">10:00</option>
			  						<option value="volvo">11:00</option>
			  						<option value="volvo">12:00</option>
								</select>
						    </td><td>
						    	<select>
			  						<option value="volvo">am</option>
			  						<option value="volvo">pm</option>
								</select>
						    </td><td>
						    	<select>
			  						<option value="volvo">01:00</option>
			  						<option value="volvo">02:00</option>
			  						<option value="volvo">03:00</option>
			  						<option value="volvo">04:00</option>
			  						<option value="volvo">05:00</option>
			  						<option value="volvo">06:00</option>
			  						<option value="volvo">07:00</option>
			  						<option value="volvo">08:00</option>
			  						<option value="volvo">09:00</option>
			  						<option value="volvo">10:00</option>
			  						<option value="volvo">11:00</option>
			  						<option value="volvo">12:00</option>
								</select>
						    </td><td>
						    	<select>
			  						<option value="volvo">am</option>
			  						<option value="volvo">pm</option>
								</select>
						    </td>
						</tr>
					</table>
					<table>
						<tr>
							<th>Dia</th>
							<th>Activado</th>
							<th>Desactivado</th>
						</tr>
						<tr>
							<td>Lunes</td>
							<td class="centrar-radio-tabla"><input type="radio" name="lunes" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="lunes" value="male"></td>
						</tr>
						<tr>
							<td>Martes</td>
							<td class="centrar-radio-tabla"><input type="radio" name="martes" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="martes" value="male"></td>
						</tr>
						<tr>
							<td>Miercoles</td>
							<td class="centrar-radio-tabla"><input type="radio" name="miercoles" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="miercoles" value="male"></td>
						</tr>
						<tr>
							<td>Jueves</td>
							<td class="centrar-radio-tabla"><input type="radio" name="jueves" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="jueves" value="male"></td>
						</tr>
						<tr>
							<td>Viernes</td>
							<td class="centrar-radio-tabla"><input type="radio" name="viernes" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="viernes" value="male"></td>
						</tr>
						<tr>
							<td>Sabado</td>
							<td class="centrar-radio-tabla"><input type="radio" name="sabado" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="sabado" value="male"></td>
						</tr>
						<tr>
							<td>Domingo</td>
							<td class="centrar-radio-tabla"><input type="radio" name="domingo" value="male"></td>
							<td class="centrar-radio-tabla"><input type="radio" name="domingo" value="male"></td>
						</tr>
					</table>
					<div class="boton-tabla-ag"><button><i class="material-icons">save</i>Guardar</button><button><i class="material-icons">clear</i>Cancelar</button></div>
				</div>
			</div>
		</form>
	</div>
</div>