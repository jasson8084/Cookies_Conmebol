<?php

    if (!$_COOKIE['conmebol']){
        header('Location:ubicacion.php');
    } else if ($_COOKIE['conmebol'] == 'Brasil'){
        header('Location:Brasil.php');
    } else if ($_COOKIE['conmebol'] == 'Argentina'){
        header('Location:Argentina.php');
    } else if ($_COOKIE['conmebol'] == 'Uruguay'){
        header('Location:Uruguay.php');
    } else if ($_COOKIE['conmebol'] == 'Ecuador'){
        header('Location:Ecuador.php');
    } else if ($_COOKIE['conmebol'] == 'Colombia'){
        header('Location:Colombia.php');
    } else if ($_COOKIE['conmebol'] == 'Peru'){
        header('Location:Peru.php');
    } else if ($_COOKIE['conmebol'] == 'Chile'){
        header('Location:Chile.php');
    } else if ($_COOKIE['conmebol'] == 'Paraguay'){
        header('Location:Paraguay.php');
    } else if ($_COOKIE['conmebol'] == 'Bolivia'){
        header('Location:Bolivia.php');
    } else if ($_COOKIE['conmebol'] == 'Venezuela'){
        header('Location:Venezuela.php');
    } 
?>