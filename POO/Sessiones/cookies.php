<?php
    setcookie('nombre', 'Juan');
    setcookie('color', 'Rojo');
    setcookie('Hobbie', 'Submarnismo');
    setcookie('Pasion', 'Carreras');
    setcookie('Edad', '33');

    var_dump($_COOKIE);
 ?>
 <a href="verCookies.php">Ir a mis cookies</a>
