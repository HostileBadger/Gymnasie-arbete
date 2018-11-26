<?php
///////Checks if you are logged in. If you are not logged in it will redirect to the loggin page.///////
if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == null || $_SESSION["isLoggedIn"] == false)
{
    //Not logged in
    
    header("Location: logginPage.php");
}
////////

/////CONNECTING TO DATABASE//////////////////////
$servername = "10.32.35.232";
$username = "root";
$password = "";
$dbname = "gymnasie-arbete";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT user_first, user_last, user_email, user_dob, user_uid FROM users WHERE user_uid='" . $_SESSION["user"] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        $user_first = $row["user_first"];
        $user_last = $row["user_last"];
        $user_email = $row["user_email"];
        $user_dob = $row["user_dob"];
        $user_uid = $row["user_uid"];
    }
} else 
{
    echo "0 results";
}

echo $row["user_first"];
echo "<table>
<tr>
    <td>Name</td>
    <td>$user_first</td>
</tr>
<tr>
    <td>Last name</td>
    <td>$user_last</td>
</tr>
<tr>
    <td>Username</td>
    <td>$user_uid</td>
</tr>
<tr>
    <td>E-mail</td>
    <td>$user_email</td>
</tr>
<tr>
    <td>Age</td>
    <td>$user_dob</td>
</tr>
</table>";
$conn->close();
?>