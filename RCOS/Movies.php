<!DOCTYPE html>
<html lang="en">
<?php require "header.php";?>
    <body>
        <?php
            require "navBar.php";
            /* /////CONNECTING TO DATABASE//////////////////////
            $servername = "localhost";
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
            } */
        ?>
        <div class="Movies">
              <h1>Movies Available</h1>
            <div>   
                   
               <a href="bokaTest.php?id=4"> <img src="pics/12 Strong.jpg"></a>
             <p>12 Strong</p>
            </div>
            <div >
        
                <a href="bokaTest.php?id=3"><img src="pics/blade.jpg"></a> 
                <p>Blade Runner</p>               
            </div>
            <div>
               
                <a href="bokaTest.php?id=2"><img src="pics/Brexit_Metaphor.jpg"></a>
                <p>Brexit Metaphor</p>
            </div>
            <div>       
                
                <a href="bokaTest.php?id=1"><img class="stretchyboy"src="pics/Jurassic.jpg"></a>
                 <p>Ant-Man and the Wasp</p>
            </div>
            <div>
                
                <a href="bokaTest.php?id=5"><img src="pics/The Nun.png"></a>
                <p>The Nun</p>
            </div>
            <div>    
        </div>

          </div>
        <h1></h1>
        <?php require "footer.php"; ?>
    </body>
</html>