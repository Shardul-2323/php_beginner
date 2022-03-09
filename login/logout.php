<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    //header("Location:login.php");
    header("Location: https://www.geeksforgeeks.org");
?>