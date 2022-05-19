<?php
    function calculHeure ($heure) {
        $heure = $_GET["heure"] ;
    if ($heure == date("h:i"))
        $verif = true ;
    else 
        $verif = false ; 
    return $heure ;
    }

?>