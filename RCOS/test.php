<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
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
    echo ' hello';
}

?>
<body>
    

<form action="boka.php" method="POST">
    <select name="datum" id="datum">
        <option value="3">test</option>
        <?php 
            $sql = "SELECT * FROM show_times WHERE movie_id=2";
            $result = $conn->query($sql);    
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option value="' . $id . '">' . $row['dates'] . '</option>';
                }
            } else {
                echo 'error';
            }
        ?>
        </select>
        <label>Välj datum</label>

        <select name="tid" id="tider">
        
        </select>
        <label>Välj tider</label>
</form>



<script>

$(document).ready(function(){
  $('#datum').change(function(){
    var d_id = $("#datum").val();
    $.ajax({
      url: 'getter.php',
      method: 'post',
      data: 'd_id=' + d_id
    }).done(function(tider){
      console.log(tider);
      tider = JSON.parse(tider);
      tider.forEach(function(tid) {
        $('#tider').append('<option value="2">'+tid.time+'</option>')
      });
    })
  })
})

</script>
<?php 

$conn->close();
?>
</body>
</html>