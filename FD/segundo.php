<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body{
        color: red;
        height: 2000px;
      }
      h1{
        color: <?php echo "blue;"; ?>
      }
    </style>
  </head>
  <body>
    <?php
      $nombre = 'Juan';
      $apellido = 'Gonzalez';

      $edad = 18; //soy un cero
      $minEdad = 18;
      $casado = 'casado';
     ?>

     <h1>Condicionales</h1>

     <?php
       /*if( $edad>=18 ){
         if( $casado ){
            echo 'Es un Señor<br>';
         }

         echo 'Es mayor de edad<br>';

       }else{
         echo 'No es mayor de edad<br>';
       }
      ?>

      <?php
        if( $edad ){
          echo 'variable edad tiene como valor->'.$edad;
        }
        ?>

      <?php
        if( $edad != 18 ){
          echo '<br>La persona No tiene 18 años';
        }*/
    ?>
    <?php
      // if( $nombre != 'Juan' && $nombre != 'Carlos'){
      //   echo 'El usuario NO es juan carlos';
      // }
    ?>

    <?php
      //echo "El Usuario: {$nombre} ";
      //echo 'El Usuario: '.$nombre ;

      /*if($edad>18){
        echo ' Es Mayor de Edad';
      }else{
        echo ' No es Mayor de edad';
      }*/

      echo "El Usuario: {$nombre} "
        .( $edad>=$minEdad ?'Es':'No Es' )." Mayor de Edad "
        .( $casado ?? 'No es casado' );
    ?>




  </body>
</html>
