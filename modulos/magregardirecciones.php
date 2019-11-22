<!--INICIO DE CONTENIDO PRINCIPAL-->
<div class="container-fluid body3">
  <div class="usupanel"><!--INICIO DE CONTENIDO INTERNO GENERAL-->
    <div class="usupanel-menu"><!--INICIO DE MENU USUARIO-->
      <?php 
      include("modulos/menuusuario.php");
     ?>
    </div><!--FIN DE MENU USUARIO-->
    <div class="usupanel-cont"><!--INICIO DE MIS DIRECCIONES-->
      <div class="cont-item-pedi editdirec">
        <h2 class="miscomp">Agregar dirección:</h2>
        <div class="editdirec0">
          <div>
          <form>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label direcp" for="gridCheck">Establecer como direccion principal</label>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
              <label for="exampleInputEmail1">Alias:</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ejemplo: Condominio Ñuñoa">
              <small id="emailHelp" class="form-text text-muted">Nombre identificador de dirección.</small>
              </div>
              <div class="form-group col-md-8">
              <label for="exampleInputEmail1">Calle:</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej.: Irarrazabal">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Número:</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej.: 4100">
              </div>
              <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Depto./Casa</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej.: 170">
              </div>
              <div class="form-group col-md-5">
              <label for="exampleFormControlSelect1">Comuna:</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Ñuñoa</option>
              </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-5">
              <label for="exampleFormControlSelect1">Ciudad:</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Región Metropolitana</option>
              </select>
              </div>
              <div class="form-group col-md-5">
              <label for="exampleInputEmail1">Télefono de contacto</label>
              <input type="txt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej.: +56 9 59123456">
              </div>
            </div>
             <div class="form-group">
              <small id="emailHelp" class="form-text text-muted">*Disponible solo para la zonas habilitadas, Proximamente nuevas comunas.*</small>
            </div>
            <button type="submit" class="btn botonr">Guardar</button> <button type="submit" class="btn botonv">Cancelar</button>
          </form>
          </div>
        </div>
        <div class="editdirec1">
          sss
        </div>
    </div><!--FIN DE MIS DIRECCIONES-->
  </div><!--FIN DE CONTENIDO INTERNO GENERAL-->
</div>
<!--FIN DE CONTENIDO PRINCIPAL-->