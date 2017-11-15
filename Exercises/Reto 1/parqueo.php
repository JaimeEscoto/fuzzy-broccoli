<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reto Parqueo</title>
  </head>
  <body>
    <h1>Reto Parqueo</h1>
    <h2>Usando variables y la sentencia if en PHP</h2>

    <?php
      $cantidadMinutos=$_POST["cantidadMinutos"];
      $horasCompletas=floor($cantidadMinutos/60); //Obteniendo horas
      $fraccion= ($cantidadMinutos/60) - $horasCompletas; //Si fraccion es mayor que 0, entonces hay fraccion

      $cobroHorasCompletas=0;
      $cobroFraccion=0;

      if ($horasCompletas>1) {
        $cobroHorasCompletas = ($horasCompletas-1)*20;
      }
      if($fraccion>0 and $horasCompletas>0)
      { $cobroFraccion=10;}

      $totalCobro=$cobroHorasCompletas+$cobroFraccion;
     ?>
     <table border="2">
       <tr>
         <td>Cantidad minutos</td>
         <td>Cobro por horas</td>
         <td>Cobro por fracción</td>
         <td>Total</td>
       </tr>
       <tr>
         <td><?php echo $cantidadMinutos ?></td>
         <td><?php echo $cobroHorasCompletas ?></td>
         <td><?php echo $cobroFraccion ?></td>
         <td><?php echo $totalCobro ?></td>
       </tr>
     </table>
  </body>
</html>
