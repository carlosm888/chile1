<div class="container-fluid body3">
  <div class="usupanel"><!--INICIO DE CONTENIDO INTERNO GENERAL-->
    <div class="usupanel-menu"><!--INICIO DE MENU USUARIO-->
      <?php 
      include("modulos/menuusuario.php");
      ?>
    </div><!--FIN DE MENU USUARIO-->
    <div class="usupanel-cont"><!--INICIO DE NOTIFICACIONES-->
      <div class="cont-item-pedi notif">
        <h2 class="miscomp">Notificaciones:</h2>
        <div class="alert alert-success" role="alert">
            <p class="notif-fh">Notificación Nro.: <span>00003</span><span>||</span>Fecha: <span>10/04/2019</span><span>-</span>Hora: <span>22:00</span></p>
            <p class="notif-nomb">Hola: <span>Carlos Garcia</span></p>
            <p class="notif-cont">Nos complace informarte que tu pedido Número <span>00123</span> fue <span>ENTREGADO</span> con exito a la dirección: <span>Pedro Lagos 521 Dpto 118</span>.</p>
            <p>Gracias por confiar en nosotros.</p>
            <p class="notif-vuel">Vuelve Pronto.!</p>
        </div>
        <div class="alert alert-danger" role="alert">
            <p class="notif-fh">Notificación Nro.: <span>00002</span><span>||</span>Fecha: <span>10/04/2019</span><span>-</span>Hora: <span>23:00</span></p>
            <p class="notif-nomb">Hola: <span>Carlos Garcia</span></p>
            <p class="notif-cont">Lamentamos informarte que tu pedido Número <span>00123</span> con dirección: <span>Pedro Lagos 521 Dpto 118</span>. fue <span>ANULADO</span>.</p>
            <p class="notif-vuel">Vuelve Pronto.!</p>
        </div>
        <div class="alert alert-warning" role="alert">
            <p class="notif-fh">Notificación Nro.: <span>00002</span><span>||</span>Fecha: <span>10/04/2019</span><span>-</span>Hora: <span>18:00</span></p>
            <p class="notif-nomb">Hola: <span>Carlos Garcia</span></p>
            <p class="notif-cont">Su pedido Número <span>00123</span> con dirección: <span>Pedro Lagos 521 Dpto 118</span> presento inconvenientes y <span>No pudo ser entregado.</span></p>
            <p class="notif-cont">Motivo: <span>No se encontro la dirección.</span></p>
            <p>Le invitamos a veificar su dirección, si esta correcta comunicate por modulo de atencion al cliente. En el caso de existir algun error en su dirección modifiquela y reprograme la entrega.</p>
            <p>Gracias por confiar en nosotros.</p>
            <p class="notif-vuel">Vuelve Pronto.!</p>
        </div>
      </div>
    </div><!--FIN DE NOTIFICACIONES-->
  </div><!--FIN DE CONTENIDO INTERNO GENERAL-->
</div>
<!--FIN DE CONTENIDO PRINCIPAL-->