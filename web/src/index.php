<?php
    /**
 *   @author     Jordi Domenech
 *   @date       2022
 *   @brief      index.php
 *   @pre        Lee el README
 */
    include('../../API/src/conexion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <title>HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
        </head>
        <h2>Los datos son</h2>

        <?php
        /**
         * @brief llamamos a la funcion mostrarDato.php
         */
            include('../../API/src/mostrarDato.php');
        ?>
    <body>
  
    </body>
</html>

