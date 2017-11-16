<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reto Divisible</title>
  </head>
  <body>
    <h1>Reto Divisible</h1>
    <h2>Usando modulo (%)</h2>
    <?php
      $numero1=$_POST["n1"];
      $numero2=$_POST["n2"];
      $modulo = $numero1 % $numero2;
    ?>
    <table border="2">
      <tr>
        <td>Numero 1: <?php echo  $numero1; ?></td>
        <td>Numero 2: <?php echo  $numero2; ?></td>
      </tr>
      <tr>
        <td colspan="2">
        <?php if ($modulo==0)
        {
          echo "Son divisibles, el residuo es 0";
        }
        else {
          echo "No son divisibles, el residuo es ".$modulo;
        }
        ?></td>
      </tr>
    </table>

  </body>
</html>
