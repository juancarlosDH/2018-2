<?php
//Podemos usar autoload o incluir las clases todas juntas
include_once('clases/Usuario.php');
include_once('clases/Posteo.php');
include_once('clases/Compartible.php');
include_once('clases/Video.php');
include_once('clases/Imagen.php');

//Creamos un usuario logueado para poder utilizarlo como "posteador"
$usuarioLogueado = new Usuario();
$usuarioLogueado->setNombre('Luis');
$usuarioLogueado->setEmail('luis@gmail.com');

//Creamos un usuario amigo para poder compartirle posteos
$usuAmigo = new Usuario();
$usuAmigo->setNombre('Diego');
$usuAmigo->setEmail('diego@gmail.com');

//Tomamos el archivo y buscamos su extension
$nombre = explode('.', $_FILES['archivo']['name']);
// var_dump($nombre);
// die;
$duracion = 120;
$ext = $nombre[1];


//Validamos la extension para saber si instanciar un posteo-video o un posteo-imagen
if( $ext == 'mp4' ){
  $primerPost = new Video($_POST['fecha'], $_POST['descripcion'], $usuarioLogueado, $duracion);
}else{
  $primerPost = new Imagen($_POST['fecha'], $_POST['descripcion'], $usuarioLogueado);
}

// $primerPost->setFecha($_POST['fecha']);
// $primerPost->setDescripcion($_POST['descripcion']);
// $primerPost->setUsuario($usuarioLogueado);
$primerPost->setRuta($_FILES['archivo']['name']);
//var_dump($primerPost);
echo $primerPost->crear();

$primerPost->compartir($usuarioLogueado, $usuAmigo);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver Post</title>
  </head>
  <body>
    <div style="width:500px;border:1px solid black;">
      <h3><?php echo $primerPost->getFecha(); ?></h3>
      <p><?php echo $primerPost->getDescripcion(); ?></p>
      <h4><?php echo $primerPost->getUsuario()->getNombre(); ?></h4>
    </div>
  </body>
</html>
