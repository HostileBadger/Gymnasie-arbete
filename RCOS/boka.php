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

<div id="boka">
    <div class="container">
        <div class="row">
            <div class="col s4">
                <img id="film" class="z-depth-3" src="pics/Brexit_Metaphor.jpg">
            </div>
        
            <!--Vi kanske vill ha ett val av filmer innan de andra valen låses upp.
                Försök också att skriva allting på Englelska istökket för Svenska.-->

        <div class="col s8" id="dropdown">
            <ul class="collapsible">
                <li>
                <div class="collapsible-header"><i class="material-icons">calendar_today</i>Datum</div>
                <div class="collapsible-body">
                    <div class="input-field">
                    <select>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Välj datum</label>
                    </div>
                </div>
                </li>

                <li>
                <div class="collapsible-header"><i class="material-icons">alarm_add</i>Tider</div>
                <div class="collapsible-body">
                    <div class="input-field">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Välj tid</label>
                    </div>
                </div>
                
                </li>
                <li>
                <div class="collapsible-header"><i class="material-icons">event_seat</i>Platser</div>
                <div class="collapsible-body"><span>Film</span>
                    <div class="input-field">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Välj plats</label>
                    </div>
                </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php require "footer.php";?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>
