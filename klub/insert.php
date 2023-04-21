<?php 

session_start(); 

include "db.php";

if (isset($_POST['stevilka_dresa']) && isset($_POST['ime']) && isset($_POST['priimek']) && isset($_POST['datum_rojstva'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $st = validate($_POST['stevilka_dresa']);

    $ime = validate($_POST['ime']);

    $priimek = validate($_POST['priimek']);

    $datumrojstva = validate($_POST['datum_rojstva']);

    $check = $conn->query("SELECT stevilka_dresa FROM igralci WHERE stevilka_dresa='$st';");

    if($check!=0){
        $res = $conn->query("INSERT INTO igralci (stevilka_dresa, ime, priimek, datum_rojstva) values ('$st', '$ime', '$priimek', '$datumrojstva');");

        header("Location: home.php");
    }else{
        header("Location: registracija.php?error=številka dresa je že zasedena");
    }
}