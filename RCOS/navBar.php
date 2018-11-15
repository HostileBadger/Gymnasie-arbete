<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper navbar-fixed red darken-1">
        <a href="index.php" class="brand-logo center hide-on-med-and-down" id="logo"><img src="http://purepng.com/public/uploads/large/purepng.com-popcornpopcorncorndent-cornflint-corn-1411528651430gpsc3.png" alt="Picture"></a>
        <ul class="left">
          <li class="nuvarande"><a href="index.php">Home</a></li> <!-- Navbar -->
          <li><a href="purchase.php">Booking</a></li> <!-- Navbar -->
          <li><a href="menu.php">Movies</a></li> <!-- Navbar -->
          <li><a href="gallery.php">News</a></li> <!-- Navbar -->
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