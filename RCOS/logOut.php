<?php
    session_start();
    $_SESSION["isLoggedIn"] = false;
    session_unset();
    header("Location: index.php");
?>