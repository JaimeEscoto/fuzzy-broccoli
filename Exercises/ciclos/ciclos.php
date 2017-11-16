<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ciclo for</title>
  </head>
  <body>
    <h1>Usando ciclo for</h1>

    <h2>Imprimir numeros del 0 al 10</h2>
    <?php
      for ($i=0 ; $i<=10 ; $i++)
      {
          //code
          echo $i;
      }
     ?>
     <h2>Imprimir numeros del 0 al 10 de 2 en 2</h2>
     <?php
       for ($i=0 ; $i<=10 ; $i=$i+2)
       {
           //code
           echo $i;
       }
      ?>

      <h2>Imprimir numeros del 0 al 10 de 3 en 3</h2>
      <?php
        for ($i=0 ; $i<=10 ; $i=$i+3)
        {
            //code
            echo $i;
        }
       ?>
       <h2>Imprimir numeros pares del 0 al 10<h2>
       <?php
          for ($i=2 ; $i<=10 ; $i=$i+2)
          {
            //code
            echo $i;
          }
       ?>
       <h2>Imprimir numeros pares del n1 al n2<h2>
       <?php
          $inicio = 21; // $inicio = $_POST["n1"];
          $final = 29; // $inicio = $_POST["n2"];
          for ($i=$inicio ; $i<=$final ; $i++)
          {
            //code
            if($i%2 == 0)
            {
                echo $i." ";
            }
          }
       ?>
  </body>
</html>
