<?php

    setcookie('conmebol', $_GET['seleccion'], time() + 172800, '/');
    header('Location:index.php');

?>  