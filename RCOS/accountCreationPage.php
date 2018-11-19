<!DOCTYPE html>
<html>
    <body>
<<<<<<< HEAD
    <?php include "navBar.php" ?>
    <div id="signupform">
=======
        <form method="post" action="index.php">
            <button type="submit" name="submit">Home</button>
        </form>
>>>>>>> 714c4064ecc44bb8aaf3c2e63eb9a8a0a5f41e13
        <h1>Create new account</h1>
        <form method="post" action="accountCreationFunction.php">
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
<<<<<<< HEAD
    
=======

>>>>>>> 714c4064ecc44bb8aaf3c2e63eb9a8a0a5f41e13
        <br>
        
        <form method="post" action="logginPage.php">
            <button type="submit" name="submit">Sign in to existing account</button>
        </form>
<<<<<<< HEAD
        </div>
        <?php include "footer.php" ?>
=======
>>>>>>> 714c4064ecc44bb8aaf3c2e63eb9a8a0a5f41e13
    </body>
</html>