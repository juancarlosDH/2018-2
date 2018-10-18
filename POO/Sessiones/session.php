<?php
    session_start();

    $_SESSION['color'] = 'Verde';

    var_dump($_SESSION);

?>
<a href="cerrarSession.php">Logout</a>
