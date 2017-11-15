<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reto Hospital</title>
  </head>
  <body>
    <h1>Reto Hospital</h1>
    <h2>Usando variables y la sentencia if en PHP</h2>
    <?php
      $estado=$_GET["estado"];
      $nivel=$_GET["nivel"];
    ?>
    <table border="2">
      <tr>
        <td>Estado</td>
        <td>Nivel</td>
      </tr>
      <tr>
        <td><?php echo $estado; ?></td>
        <td><?php echo $nivel; ?></td>
      </tr>
    </table>

  </body>
</html>
