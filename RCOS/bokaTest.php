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
<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $servername = "10.32.35.232"; // Localhost
    $username = "root";
    $password = "";
    $dbname = "gymnasie-arbete";

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM movies WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $result_id = $row['id'];
            $name = $row['movie_name'];
            $genre = $row['genre'];
            $description = $row['description'];
            $director = $row['director'];
            $pic = $row['pic'];
        }
    }
} else {
    echo '<h1>Ange film!</h1>';
}
?>

<div id="boka">
    <div class="container">
        <div class="row">
            <div class="col s4">
                <?php
                echo '<img id ="film" class="z-depth-3" src="' . $pic . '">';
                ?>
            </div>
            <div class="col s8" id="dropdown">
                <div class="flow-text">
                <?php 
                    echo "<h2>" . $name . "</h2>";
                    echo "<h5>" . $genre . "</h5>";   
                    echo "<hr>";   
                    echo "<p>" . $description . "</p>";   

                    echo "<p>Director: <b>" . $director . "</b></h2>";
                ?>
                </div>
                <ul class="collapsible">
                    <li>
                    <div class="collapsible-header"><i class="material-icons">calendar_today</i>Datum</div>
                    <div class="collapsible-body">
                        <div class="input-field">
                            <form action="boka.php" method="POST">
                                <select name="datum">
                                    <option value="" disabled selected>Choose an option!</option>
                                <?php 
                                    $sql = "SELECT DISTINCT dates FROM show_times WHERE movie_id='$id'";
                                    $result = $conn->query($sql);    
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['dates'] . '">' . $row['dates'] . '</option>';
                                        }
                                    }
                                ?>
                                </select>
                                <label>Välj datum</label>
                        </div>
                    </div>
                    </li>
                    
                    <li>
                    <div class="collapsible-header"><i class="material-icons">alarm_add</i>Tider</div>
                    <div class="collapsible-body">
                        <div class="input-field">
                            <select name="tider">
                                <option value="" disabled selected>Choose your option</option>
                                <?php 
                                    $sql = "SELECT * FROM show_times WHERE movie_id='$id'";
                                    
                                    $result = $conn->query($sql);    

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['time'] . '">' . $row['time'] . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <label>Välj tid</label>
                        </div>
                    </div>
                    </li>
                    
                    <li>
                    <div class="collapsible-header"><i class="material-icons">event_seat</i>Platser</div>
                    <div class="collapsible-body"><span>Film</span>
                        <div class="input-field">
                            <select name="platser">
                                <option value="" disabled selected>Choose your option</option>
                                <?php 
                                    $sql = "SELECT * FROM seats WHERE id='$id' AND";
                                    $result = $conn->query($sql);    
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['time'] . '">' . $row['time'] . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <label>Välj plats</label>
                            <input type="submit" name="submit" value="Submit the form"/>
                            </form>
                        </div>
                    </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>


<?php 
$conn->close();
?>
<?php require "footer.php";?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>
