<!DOCTYPE html>
<html>
<<<<<<< HEAD
<?php require "header.php";?>
    <body>
    <?php require "navBar.php";?>
=======
<script type="text/javascript" src="accountCreationValidation.js"></script>
<?php include "header.php";?>
    <body>
    <?php include "navBar.php";?>
>>>>>>> 20a3c5be5b0bc6235c1ec26cac521126ee058ad8
    <div id="signupform">
        <h1>Create new account</h1>
        <form id="test" method="post" action="accountCreationFunction.php">
            <input type="text" name="user_uid" placeholder="Username" required>
            <br>
            <input type="password" name="user_pwd" placeholder="Password" required>
            <br>
            <input type="text" name="user_first" placeholder="First name" required>
            <br>
            <input type="text" name="user_last" placeholder="Last name" required>
            <br>
            <input type="text" name="user_email" placeholder="E-mail" required>
            <br>
            <input type="date" name="user_dob" placeholder="DoB" required>
            <br>
            <button type="submit" name="submit">Create account</button>
        </form>
        <br>
        
        <form method="post" action="logginPage.php">
            <button type="submit" name="submit">Sign in to existing account</button>
        </form>
        </div>
<<<<<<< HEAD
        <?php require "footer.php"; ?>
=======
        <?php include "footer.php" ?>


<!--------->

<h2>JavaScript addEventListener()</h2>

<p>This example uses the addEventListener() method to attach a click event to a button.</p>

<input id="myBtn" type="text" name="user_uid" placeholder="Username" required>

<p id="demo"></p>

<script type="text/javascript" src="accountCreationValidation.js"></script>

<!--------->

>>>>>>> 20a3c5be5b0bc6235c1ec26cac521126ee058ad8
    </body>
</html>