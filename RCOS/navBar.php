<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper navbar-fixed red darken-1">
        <div id="logo">
        <a href="index.php" class="brand-logo center hide-on-med-and-down"><div class="RCOS-logo">RCOS</div><img src="http://purepng.com/public/uploads/large/purepng.com-popcornpopcorncorndent-cornflint-corn-1411528651430gpsc3.png" alt="Picture"></a>
        </div>
        <ul class="left">
          <li><a href="index.php">Home</a></li> <!-- Navbar -->
          <li><a href="boka.php">Booking</a></li> <!-- Navbar -->
          <li><a href="Movies.php">Movies</a></li> <!-- Navbar -->
          <li><a href="News.php">News</a></li> <!-- Navbar -->
          <li><a href="contact.php">Contact us</a></li> <!-- Navbar -->
        </ul>
        
        <ul class="right">
        <?php
          session_start();
          function logginCheck()
          {
            if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == null || $_SESSION["isLoggedIn"] == false)
            {
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