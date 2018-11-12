<?php
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

//Email validation
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL))
{
    echo("$user_email is not a valid email address");
    echo "<br>";
}
else
{
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    //Sends a query to the connection established above to select the variable "user_uid" from the row user_uid that is the same as what was input,
    //from the table "users".
    $sql = "SELECT user_uid FROM users WHERE user_uid='" . $_POST["user_uid"] . "'";
    $result = $conn->query($sql);

    //If there are more than 0 rows with the username equal to the username you input, it will fail
    if ($result->num_rows > 0)
    {
        echo "Username taken. Signup failed.";
    }

    else 
    {
        $sql = "SELECT user_email FROM users WHERE user_email='" . $_POST["user_email"] . "'";
        $result = $conn->query($sql);
        //If there are more than 0 rows with the email equal to the email you input, it will fail
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
}
?>