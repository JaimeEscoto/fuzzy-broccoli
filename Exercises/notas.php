<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicio Notas</title>
  </head>
  <body>
    <h1>Ejercicio Notas</h1>
    <h2>Usando variables y la sentencia if en PHP</h2>
    <?php
      $notaAcumulado=$_POST["notaAcumulado"];
      $notaExamen=$_POST["notaExamen"];
      $notaFinal=$notaAcumulado+$notaExamen;
    ?>
    <table border="2">
      <tr>
        <td>Nota Acumulado</td>
        <td>Nota Examen</td>
        <td>Nota Final</td>
        <td>Observación</td>
      </tr>
      <tr>
        <td><?php echo $notaAcumulado ?></td>
        <td><?php echo $notaExamen ?></td>
        <td><?php echo $notaFinal ?></td>
        <td>
          <?php
              /*
              Si la $notaFinal es >= que 60  -> imprime Aprobado
              Si la $notaFinal es < 60       -> imprime Reprobado
              */
              if ($notaFinal>=60) {
                echo "Aprobado";
              }
              else {
                echo "Reprobado";
              }
          ?>
        </td>
      </tr>
    </table>
  </body>
</html>
