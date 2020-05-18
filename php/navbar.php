<?php


if (!isset($_SESSION['login'])){
    $menuItems=array(
        array('login','Inloggen'),
        array('register','Registreren'),
    );
}
else {
    if ($_SESSION['login'] == 'personeel'){
        $menuItems=array(
            array('home', 'Home'),
            array('edit_account','Mijn Account'),
        );
    }
    elseif ($_SESSION['login'] = 'user'){
        $menuItems=array(
            array('home', 'Home'),
            array('catalogus','Catalogus'),
            array('winkelmandje','Winkelmandje'),
            array('edit_account','Mijn Account'),
        );
    }
}