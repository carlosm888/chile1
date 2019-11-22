<?php 
  include("header.php");
 ?>
<main class="container">
<section class="bordercajon">
<section class="row cajon">
  <h1>Saldo</h1>
  <section class="col-md-6 fontstatus">
    <section class="text-cajon1">Total</section>
    <section class="text-cajon2">1000 <span>BsS</span></section>
  </section>
  <section class="col-md-6 fontstatus">
    <section class="text-cajon3">Pendiente</section>
    <section class="text-cajon4">0 <span>BsS</span></section>
  </section>
</section>
<section class="row cajontable">
  <section id="fecha" class="fechacajon"><span class="spacefechacajon">Fecha</span><input id="date2" type="date" /><input type="button" value="Buscar" /></section>
  <h2>Movimientos</h2>
  <section class="table-responsive">
    <table class="table table-striped textcentertable">
    <dl>
      <tr>
        <th>Referencia</th>
        <th>Descripcion</th>
        <th>Monto</th>
        <th>Saldo + -</th>
      </tr>
      <tr>
        <td>00001</td>
        <td>
          <section>05-12-2018</section>
          <section class="fontusercajon"><a>@cristiangv</a></section>
        </td>
        <td>+5000BsS</td>
        <td>5000BsS</td>
      </tr>
      <tr>
        <td>00002</td>
        <td>
          <section>05-12-2018</section>
          <section class="fontusercajon"><a>@frantasa</a></section>
        </td>
        <td>-1000BsS</td>
        <td>4000BsS</td>
      </tr>
      <tr>
        <td>00003</td>
        <td>
          <section>05-12-2018</section>
          <section class="fontusercajon"><a>@frantasa</a></section>
        </td>
        <td>-2000BsS</td>
        <td>3000BsS</td>
      </tr>
      <tr>
        <td>00004</td>
        <td>
          <section>05-12-2018</section>
          <section class="fontusercajon"><a>@frantasa</a></section>
        </td>
        <td>-2000BsS</td>
        <td>2000BsS</td>
      </tr>
      <tr>
        <td>00005</td>
        <td>
          <section>05-12-2018</section>
          <section class="fontusercajon"><a>@frantasa</a></section>
        </td>
        <td>-2000BsS</td>
        <td>2000BsS</td>
      </tr>
    </dl>
    </table>
  </section>
</section>
</section>
</main>
<?php 
  include("footer.php");
 ?>