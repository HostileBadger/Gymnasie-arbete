<!DOCTYPE html>
<html lang="en">
<?php include "head.php";
session_start();
if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == null || $_SESSION["isLoggedIn"] == false)
{
  header("Location: logginPage.php");
}?>

<body>
 
  <?php
  include "navBar.php";
  include "profilePageDataBase.php";
?>

<?php include "footer.php"?>
    
</body>
</html>