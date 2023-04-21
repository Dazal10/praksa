<?php
    include "db.php";
    $delete = $conn->query("DELETE FROM igralci WHERE stevilka_dresa='$_POST[stevilka_dresa]';");
    header("Location: home.php");
?>