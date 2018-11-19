<!DOCTYPE html>
<html>
    <?php include "header.php"?>
    <body>
<<<<<<< HEAD
    <?php include "navBar.php"?>
    <div id="signupform">
=======
        <?php include "navBar.php"?>
        <form method="post" action="index.php">
            <button type="submit" name="submit">Home</button>
        </form>
>>>>>>> 714c4064ecc44bb8aaf3c2e63eb9a8a0a5f41e13
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