<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio Edades</title>
  </head>
  <body>
    <h1>Ejercicio Edades</h1>
    <h2>Usando variables y la sentencia if en PHP</h2>
    <?php
        $edadPedro = $_POST["edadPedro"];
        $edadMaria = $_POST["edadMaria"];
        ?>
<table border="2">
  <tr>
    <td>Edad de Pedro</td>
    <td>Edad de Maria</td>
  </tr>
  <tr>
    <td><?php echo $edadPedro; ?></td>
    <td><?php echo $edadMaria; ?></td>
  </tr>

</table>
    <h3>
      <?php
        if ($edadPedro > $edadMaria) {
          $diferencia= $edadPedro-$edadMaria;
          echo "Pedro es ".$diferencia." años mayor que Maria";
        }
        if ($edadPedro < $edadMaria) {
          $diferencia= $edadMaria-$edadPedro;
          echo "Pedro es ".$diferencia." años menor que Maria";
        }
        if ($edadPedro == $edadMaria) {
          $diferencia= $edadPedro-$edadMaria;
          echo "Pedro tiene la misma edad que Maria";
        }
     ?>
   </h3>

  </body>
</html>
