<!DOCTYPE html>
<html lang="en">
<?php include "header.php"?>
    <body>
        <?php
            include "navBar.php";
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
            $sql = "SELECT DISTINCT movie_name FROM movies";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    $movie_name = $row["movie_name"];
                    //Outputs movie titles in a row as klickable buttons that, when klicked, will expand and show you available times for the movie.
                    echo "<button class='ticket_info_buttons';>$movie_name</button> <br>";
                }
            } else 
            {
                echo "0 results";
            }
        ?>
        <h1></h1>
    </body>
</html>