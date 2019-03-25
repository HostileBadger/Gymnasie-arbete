<?php
$servername = "localhost"; // Localhost
$username = "root";
$password = "";
$dbname = "gymnasie-arbete";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['datum_id'])) {
    $datum_id =  $_POST['datum_id'];
    #$unique_id = $_POST['movie_id']; 
    $lista = array();
    $sql = "SELECT DISTINCT * FROM show_times WHERE movie_id='$datum_id'"; # AND id='$unique_id'
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $lista[] = $row;
        }
    } else {
        echo 'error';
    }
    echo json_encode($lista);
}


/* if(isset($_POST["datum_id"]) && !empty($_POST["datum_id"])) {
    $datum_id = $_POST["datum_id"];
    $sql = "SELECT * FROM show_times WHERE movie_id='$datum_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<option value="' . $datum_id . '">' . $row['time'] . '</option>';
        }
    } else {
        echo '<option=value"">Tid är ej tillgänglig</option>';
    }
}
 */

$conn->close();
?> 