<?php
    $user_data = file_get_contents("users.txt");
    $user_array = explode(" ", $user_data);
    $uid = $_POST["uid"];
    $pwd =  $_POST["pwd"];
    foreach ($user_array as $key => $value)
    {
        $user_test = explode(":", $user_array[$key]);

        //echo("<br>" . "Test username: " . $user_test[0] . "<br>" . "input: " . $uid . "<br>");

        if(empty($uid)||empty($pwd))
        {
            echo "Field can't be left empty";
            exit();
        }
        else if($uid == $user_test[0])
        {
            echo "Username taken";
            exit();
        }        
    } 

    $uid = $_POST["uid"];
    $pwd =  $_POST["pwd"];

    //If username does not exist{
    $myfile = fopen("users.txt", "a");
    $txt = " $uid:$pwd";
    fwrite($myfile, $txt);

    echo "Account creation successful!<br> Going to login page.";
    header("Location: index.php");
    exit();
 ?>