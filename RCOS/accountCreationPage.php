<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="index.php">
            <button type="submit" name="submit">Home</button>
        </form>
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

        <br>
        
        <form method="post" action="logginPage.php">
            <button type="submit" name="submit">Sign in to existing account</button>
        </form>
    </body>
</html>