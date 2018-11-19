<?php
//GÖR SÅ ATT EN JAVASCRIPT KOD KÖRS, SOM KONOTROLERAR ATT ALL INPUT ÄR GODKÄND, INGA FORMAT FEL OCH INTE SQL INJECTION ETC.
/////CONNECTING TO DATABASE//////////////////////
$servername = "10.32.35.232";
$username = "root";
$password = "";
$dbname = "gymnasie-arbete";
session_start();
$_SESSION["user"] = $_POST["user_uid"];
$user_uid = $_POST["user_uid"];
$user_first = $_POST["user_first"];
$user_last = $_POST["user_last"];
$user_email = $_POST["user_email"];
$user_dob = $_POST["user_dob"];
$user_pwd = $_POST["user_pwd"];

//FÖRSÖK FIXA!
//Email validation
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL))
{
    echo("$user_email is not a valid email address");
    echo "<br>";
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
//Sends a Query to select the variable "user_pwd" from the table "users" from the row with the variable
//"user_uid" set to the same as what was used to attempt the login.
$sql = "SELECT user_uid FROM users WHERE user_uid='" . $_POST["user_uid"] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "Username taken. Signup failed.";
}

else 
{
    $sql = "SELECT user_email FROM users WHERE user_email='" . $_POST["user_email"] . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        echo "E-mail in use. Signup failed.";
    }

    else 
    {
        /*$sql = "INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_dob`, `user_email`, `user_uid`, `user_pwd`)
        VALUES (NULL, '$user_first', '$user_last', '$user_dob', '$user_email', '$user_uid', '$user_pwd')";
        $conn->query($sql);*/

        $conn->query("INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_dob`, `user_email`, `user_uid`, `user_pwd`)
        VALUES (NULL, '$user_first', '$user_last', '$user_dob', '$user_email', '$user_uid', '$user_pwd')");

        header("Location: logginPage.php");
    }
}
?>