<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Salario</title>
  </head>
  <body>

    <?php 
      $salarioPorHora=$_POST["Ps_Sal"];//es un numero
      $cantidadHorasTrabajadas=$_POST["Qw_Hours"];//es un numero
     ?>

     <table border="2">
       <tr>
         <td>Salario por hora</td>
         <td>Horas trabajadas</td>
         <td>Total Salario</td>
         <td>Bono</td>
         <td>Total a pagar</td>
       </tr>
       <tr>
         <td><?php echo $salarioPorHora; ?></td>
         <td><?php echo $cantidadHorasTrabajadas; ?></td>
         <td>
           <?php
            $totalSalario = $salarioPorHora * $cantidadHorasTrabajadas;
            echo $totalSalario;
           ?>
        </td>
        <td>
          <?php
            $bono =0;
            if ($totalSalario<10000) {
              $bono=0;
            }
            if ($totalSalario>=10000 && $totalSalario<=20000)
            {
                $bono =1000;
            }
            if ($totalSalario>20000)
            {
                $bono =2000;
            }

            echo $bono;
           ?>
        </td>
        <td><?php echo $totalSalario + $bono; ?></td>
       </tr>

     </table>


  </body>
</html>
