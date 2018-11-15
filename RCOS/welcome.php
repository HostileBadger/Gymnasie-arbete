<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $username = $_POST["name"];
            $password = $_POST["password"];

            if ($username == 'hej123' && $password == '123') 
            {
                echo 'Välkommen,' , $username , '!';
                laddaupp();
            } 
            
            else 
            {
                echo 'fel användarnamn/lösenord!';
            }
        } 
        
        else 
        {
            echo 'Ange användarnamn och lösenord!';
        }

        function laddaupp() {
            echo 'hej';
        }

    ?>
</body>
</html>