<?php session_start();

if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == null || $_SESSION["isLoggedIn"] == false)
{
    header("Location: logginPage.php");
    return;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="http://purepng.com/public/uploads/large/purepng.com-popcornpopcorncorndent-cornflint-corn-1411528651430gpsc3.png" alt="">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Royal Cinema of Sweden</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<script src="script.js"></script>

<?php require "navBar.php";?>
<div class="container">
    <div id="bokninglyckades">
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $servername = "localhost"; // Localhost
        $username = "root";
        $password = "";
        $dbname = "gymnasie-arbete";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $datum_id = $_POST['datum'];
        $show_id = $_POST['movie_id'];
        print_r($_POST);
        $time = $_POST['tider'];

        $sql = "SELECT DISTINCT dates FROM show_times WHERE movie_id='$datum_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $datum = $row['dates'];
            }
        } else {
            echo 'error';
        }
        

        #Få fram unik id
        $sql = "SELECT * FROM show_times WHERE movie_id='$datum_id' AND time='$time'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $unique_id = $row['id'];
            }
        } else {
            echo 'error';
        }

        echo $unique_id;

        echo $datum;
        $user = $_SESSION['user'];
        $sql = "INSERT INTO reserved (`date`,`time`, `user`, `show_id`) VALUES ('$datum', '$time', '$user', '$unique_id')";
        $conn->query($sql);
        echo '<h4 class="center-align">Bokning lyckades!</h4>';   


    }
    $conn->close();
?>


    <br><br><br>
    <br><br><br>
    <br><br><br>

    </div>
</div>


<?php require "footer.php";?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>
