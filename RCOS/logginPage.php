<!DOCTYPE html>
<html>
<?php include "head.php"?>
    <body>
    <?php include "navBar.php"?>
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
        <?php include "footer.php"?>
    </body>
</html>