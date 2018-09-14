<pre>
<?php

var_dump($_POST);


if( $_POST['userGender'] == 'm' ){
  $genero = 'Masculino';
}else if( $_POST['userGender'] == 'f' ){
  $genero = 'Femenino';
}

//$genero =  ($_POST['userGender'] == 'm') ? 'Masculino' : 'Femenino' ;

echo '

Bienvenido: '.$_POST['userName'].' se ha registrado con el email: '.$_POST['userMail'].' los datos que
ingresaste son:
Edad: '.$_POST['userAge'].', Telefono: '.$_POST['userPhone'].', SitioWeb: '.$_POST['userSite'].'
Género: '.$genero.', Estado Civil: {estadoCivil}, Nacionalidad: {pais}
Pasatiempos: {si no eligió ninguno que no aparezca}
Comentarios: {comentarios}
';

?>
