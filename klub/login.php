<?php 

session_start(); 

include "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=Uporabniško ime je potrebno");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Geslo je potrebno");

        exit();

    }else{

        $sql = "SELECT * FROM uporabnik WHERE uporabnisko_ime='$uname' AND geslo='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['uporabnisko_ime'] === $uname && $row['geslo'] === $pass) {

                echo "Logged in!";

                $_SESSION['uporabnisko_ime'] = $row['uporabnisko_ime'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Nepravilno uporabniško ime ali geslo");

                exit();

            }

        }else{

            header("Location: index.php?error=Nepravilno uporabniško ime ali geslo");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}