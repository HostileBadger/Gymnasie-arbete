<?php
    session_start();
    $_SESSION["isLogedIn"] = false;
    header("Location: index.php");
?>