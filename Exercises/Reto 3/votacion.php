<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reto Votación</title>
  </head>
  <body>
    <h1>Reto Votación</h1>
    <h2>Usando variables, sentencia if, aleatorio, substring en PHP</h2>

    <table border="2">
      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Departamento origen</td>
        <td>Departamento sugerido</td>
        <td>Habilitado</td>
      </tr>
      <tr>
        <td>
          <?php
          $id = $_POST["identidad"];
          echo $id;
         ?>
       </td>
        <td>
          <?php
          $nombre = $_POST["nombre"];
          echo $nombre;
            ?>
        </td>
        <td>
          <?php
          $idDepartamentoOrigen = substr($id,0,2);
          echo $idDepartamentoOrigen;
           ?>
        </td>
        <td>
          <?php
          $idDepartamentoSugerido = rand(1,18);
          echo $idDepartamentoSugerido;
          ?>
        </td>
        <td>
          <?php
            $edad = $_POST["edad"];
            if( $edad < 18 )
            {
              echo "NO";
            }
            else {
              echo "SI";
            }
          ?>
        </td>
      </tr>

    </table>
  </body>
</html>
