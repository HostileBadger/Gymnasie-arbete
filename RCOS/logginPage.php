<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="index.php">
            <button type="submit" name="submit">Home</button>
        </form>
        <h1>Sign in to existing account</h1>
        <form method="post" action="loginFunction.php">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="user_pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
        </form>

        <br>

        <form method="post" action="accountCreationPage.php">
            <button type="submit" name="submit">Create new account</button>
        </form>
    </body>
</html>