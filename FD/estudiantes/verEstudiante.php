<pre><?php
  include('estudiantes.php');

//aqui veo el detalle del alumno

//var_dump($_GET);
$nombre = $_GET['nombre'];
//var_dump( $notas[ $nombre ] );

echo '<h2>El estudiante es: '.$nombre.'</h2>';

echo '<h3>Las notas son:</h3>';
echo '<ul>';

foreach ( $notas[$nombre] as $key => $value) {
  echo '<li>'.$key.' : '.$value.'</li>';
}


echo '</ul>';

//de donde me traigo el array? uso include para no tener que copiar y pegar los arrays.

//busco


//muestro las notas.


 ?>
