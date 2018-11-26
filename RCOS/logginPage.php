<?php 
///////Checks if you are logged in. If you are not logged in it will redirect to the loggin page.///////
if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == null || $_SESSION["isLoggedIn"] == false)
{
    //Not logged in    
    header("Location: index.php");
}
////////
?>

<!DOCTYPE html>
<html>
    <?php require "header.php";?>
    <body>
    <?php require "navBar.php";?>
    <div id="signupform">
        <h1>Sign in to existing account</h1>
        <form method="post" action="loginFunction.php">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
        </form>
        <br>
        <form method="post" action="accountCreationPage.php">
            <button type="submit" name="submit">Create new account</button>
        </form>
        </div>
        <?php require "footer.php";?>
    </body>
</html>