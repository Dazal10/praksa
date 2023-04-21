<?php 

session_start(); 

include "db.php";

if (isset($_POST['ime']) && isset($_POST['priimek']) && isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $ime = validate($_POST['ime']);

    $priimek = validate($_POST['priimek']);

    $email = validate($_POST['email']);

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    $check = $conn->query("SELECT uporabnisko_ime FROM uporabnik WHERE uporabnisko_ime='$uname';");

    if($check!=0){
        $res = $conn->query("INSERT INTO uporabnik (ime, priimek, email, uporabnisko_ime, geslo) values ('$ime', '$priimek', '$email', '$uname', '$pass');");

        header("Location: index.php");
    }else{
        header("Location: registracija.php?error=Uporabniško ime je že zasedeno");
    }
}

