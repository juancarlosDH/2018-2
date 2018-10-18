<?php
    session_start();

    if( !$_SESSION ){
        header('location:login.php');
    }

    var_dump($_SESSION);
