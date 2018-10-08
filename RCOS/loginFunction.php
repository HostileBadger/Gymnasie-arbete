<?php
session_start();
    $user_data = file_get_contents("users.txt");
    $user_array = explode(" ", $user_data);
    $uid = $_POST["uid"];
    $_SESSION["user"] = $uid;
    $pwd =  $_POST["pwd"];
    foreach ($user_array as $key => $value)
    {
        $user_test = explode(":", $user_array[$key]);

        if($uid == $user_test[0] && $pwd == $user_test[1])
        {
            header("Location: profilepage.html");
            exit();
        }
    }

    echo "Access Denied";
    exit();
 ?>