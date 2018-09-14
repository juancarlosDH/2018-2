<!DOCTYPE html>
<?php
include('estudiantes.php');

$errorNombre = $errorDni = $errorCorreo = $errorFoto = $errorGenero ='';

//es aqui donde verificamos que se enviaron los datos
if( $_POST ){
  //aqui empiezo las validaciones

  // echo 'Promedio->';
  // var_dump($_POST['promedio']);
  // var_dump(is_numeric($_POST['promedio']));
  // var_dump(is_float( $_POST['promedio'] + 0 ));

  //echo (float)$_POST['promedio'];
  //echo $_POST['promedio']+0;

  $_POST['nombre']=trim( $_POST['nombre'] );
  $_POST['dni']=trim( $_POST['dni'] );
  $_POST['correo']=trim( $_POST['correo'] );

  if( empty($_POST['nombre']) ){
    $errorNombre = 'Debe ingresar el nombre';
  }else if( strlen( $_POST['nombre'] )<2 ){
    $errorNombre = 'El Nombre debe tener al menos 2 letras';
  }

  if( empty($_POST['dni']) ){
    $errorDni = 'Debe ingresar el DNI';
  }else if( is_numeric($_POST['dni'])===false ){
    $errorDni = 'El DNI es inválido';
  }

  if( empty($_POST['correo']) ){
    $errorCorreo = 'Debe ingresar el Correo';
  }else if (filter_var( $_POST['correo'] , FILTER_VALIDATE_EMAIL )===false) {
    $errorCorreo = 'El Correo es inválido';
  }

  if( isset( $_POST['genero'] ) ===false){
    $errorGenero = 'Debe seleccionar un genero';
  }

  if( empty($errorNombre) && empty($errorDni) && empty($errorCorreo)){

    $nombreFoto = '';
    if( $_FILES['foto']['error'] === UPLOAD_ERR_OK ){
      //echo 'voy a mover el archivo';
      $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
      $nombreFoto = 'fotos/'.$_POST['dni'].'.'.$ext;
      if( $ext == 'jpg' ||  $ext == 'png' ){
        move_uploaded_file($_FILES['foto']['tmp_name'], $nombreFoto);
      }else{
        $errorFoto = 'El Formato es inválido';
      }
    }

    if( empty( $errorFoto) ){
      //generamos el string para escribir en el disco
      $est = '$estudiantes[] = ["nombre" => "'.$_POST['nombre'].'", "dni" => "'.$_POST['dni'].'","foto"=> "'.$nombreFoto.'"];';
      //guardamos en el archivo
        file_put_contents('estudiantes.php', $est.PHP_EOL, FILE_APPEND);
      //redirigimos a algun sitio
        header("Location:peliculas.php");


         if( empty($errorFoto) ){
              $nombreImagen = str_replace(' ', '_', $_POST[title]);
              $imagen = 'posters/' . $nombreImagen . '.' . $ext;
              $guardar = '$nuevaPelicula[] = ["title" => "'. $_POST['title']. '", "image" => "'. $imagen . '" , "genre" => "'. $_POST['genre'] .', "rating" =>"' .  $_POST['rating'] .', "release_date" =>"' . $_POST['release_date'] .', "awards" =>"' . $_POST['awards'] .', "length" =>"' . $_POST['length']. '" ];';
              file_put_contents('guardarDatos.php', $guardar.PHP_EOL, FILE_APPEND);

          }


    }

  }

}


 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Estudiantes de la clase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
      .error{
        color:red;
        font-size: 10px;
      }
    </style>
  </head>
  <body>

    <div class="container">


    <h1>Nuevo Estudiante</h1>

    <form class="row" action="nuevoEstudiante.php" method="post" enctype="multipart/form-data">

      <div class="form-group col-md-4 col-sm-6">
        <label for="">
          Nombre:
          <input class="form-control" type="text" name="nombre" value="<?php echo $_POST['nombre']??'' ;?>" placeholder="Nombre del Estudiante">
          <span class="error">
            <?php echo $errorNombre; ?>
          </span>
        </label>
      </div>

    <div class="form-group col-md-4 col-sm-6">
      <label for="">
        DNI:
        <input class="form-control" type="text" name="dni" value="<?php echo $_POST['dni']??'';?>">
        <?php echo $errorDni; ?>
      </label>
    </div>

    <div class="form-group col-md-4 col-sm-6">
      <label for="">
        Email:
        <input class="form-control" type="email" name="correo" value="">
        <?php echo $errorCorreo; ?>
      </label>
    </div>

    <div class="form-group col-md-4 col-sm-6">
      <label for="">
        Promedio:
        <input class="form-control" type="text" name="promedio" value="<?php echo $_POST['promedio']??'' ;?>" placeholder="">
        <span class="error">
          <?php echo $errorNombre; ?>
        </span>
      </label>
    </div>

    <div class="form-group col-md-4 col-sm-6">
      Genero:
      <div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" id="genM" type="radio" name="genero" value="m">
          <label class="custom-control-label" for="genM">Masculino</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" id="genF" type="radio" name="genero" value="f">
          <label class="custom-control-label" for="genF">Femenino</label>
        </div>
      </div>
        <div>
        <?php echo $errorGenero; ?>
      </div>
    </div>

    <div class="form-group col-md-4 col-sm-6">
      <label for="">
        Foto:
        <input class="form-control" type="file" name="foto" value="">
        <?php echo $errorFoto; ?>
      </label>
    </div>

    <div class="col-lg-12">
      <button type="submit" name="guardar" class="btn btn-success">Guardar</button>
    </div>

    </form>


    </div>

  </body>
</html>
