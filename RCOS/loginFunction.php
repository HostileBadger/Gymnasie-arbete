<?php
/////CONNECTING TO DATABASE//////////////////////
$servername = "";
$username = "root";
$password = "";
$dbname = "gymnasie-arbete";
session_start();
$_SESSION["user"] = $_POST["uid"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Sends a Query to select the variable "user_pwd" from the table "users" from the row with the variable
//"user_uid" set to the same as what was used to attempt the login.
$sql = "SELECT user_pwd FROM users WHERE user_uid='" . $_POST["uid"] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        $user_pwd = $row["user_pwd"];
        /*echo ";used pw: ";
        echo $_POST["pwd"];
        echo ";found pw: ";
        echo $row["user_pwd"];*/
    }
} else {
    echo "0 results";
}

if($user_pwd == $_POST["pwd"])
{
    $_SESSION["isLogedIn"] = true;
    header("Location: profilepage.php");
}
else
{
    echo "Access Denied";
}
?>