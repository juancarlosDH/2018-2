<?php
include('peliculas.php');

//var_dump($_GET);

echo 'Por get->'.$_GET['titulo'].'<br>';

foreach ($peliculas as $value) {
  if($_GET['titulo'] == $value['title']){
    echo $value['title'].'<br>';
    break;
  }
}

 ?>
