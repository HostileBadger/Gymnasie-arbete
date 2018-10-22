<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper navbar-fixed red darken-1">
        <a href="index.php" class="brand-logo center hide-on-med-and-down" id="logo"><p>RCOS</p><img src="http://purepng.com/public/uploads/large/purepng.com-popcornpopcorncorndent-cornflint-corn-1411528651430gpsc3.png" alt="Picture"></a>
        <ul class="left">
          <li class="nuvarande"><a href="index.php">Hem</a></li> <!-- Navbar -->
          <li><a href="boka.php">Boka</a></li> <!-- Navbar -->
          <li><a href="meny.php">Filmer</a></li> <!-- Navbar -->
          <li><a href="galleri.php">Nyheter</a></li> <!-- Navbar -->
          <li><a href="kontakta.php">Medlem</a></li> <!-- Navbar -->
        </ul>
        
        <ul class="right">
        <?php
        function logginCheck()
        {
          if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == null || $_SESSION["isLoggedIn"] == false) {
            echo "<li><a href=" . "logginPage.php" . ">Log in</a></li>";
            echo "<li><a href=" . "accountCreationPage.php" . ">Sign up</a></li>";
          }
          else
          {
            echo "<li><a href=" . "profilePage.php" . ">Profile Page</a></li>";
            echo "<li><a href=" . "logOut.php" . ">Log Out</a></li>";
          }
        }
        logginCheck()
        ?>
        </ul>
      </div>
    </nav>
  </div>