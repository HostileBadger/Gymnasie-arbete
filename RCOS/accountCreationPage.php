<!DOCTYPE html>
<html>
<?php require "header.php";?>
    <body>
    <?php require "navBar.php";?>
    <div id="signupform">
        <h1>Create new account</h1>
        <p id="demo"></p>
        <form id="test" method="post" action="accountCreationFunction.php">
            <input class="inputFields" type="text" name="user_uid" placeholder="Username" required>
            <br>
            <input class="inputFields" type="password" name="user_pwd" placeholder="Password" required>
            <br>
            <input class="inputFields" type="text" name="user_first" placeholder="First name" required>
            <br>
            <input class="inputFields" type="text" name="user_last" placeholder="Last name" required>
            <br>
            <input class="inputFields" type="text" name="user_email" placeholder="E-mail" required>
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
        <?php include "footer.php" ?>

<script type="text/javascript" src="accountCreationValidation.js"></script>


    </body>
</html>