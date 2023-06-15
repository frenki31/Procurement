<nav id="main">
  <a href="index.php" class="logo text-decoration-none">Online Procurement</a>
  <div class="fa fa-bars" id="bars-icon"></div>
  <?php
    if (isset($_SESSION['userId'])) {
      echo '<ul id="navbar">
        <li><a class="active text-decoration-none" href="../user/index.php">Home</a></li>
        <li><a class="text-decoration-none" href="../user/tenders.php">Tenders</a></li>
        <li><a class="text-decoration-none" href="../user/myBiddings.php">My Biddings</a></li>
        <li><a class="text-decoration-none" href="../user/myConfirmedBiddings.php">Confirm Biddings</a></li>
        <li><a class="text-decoration-none" href="../user/includes/dblogout.php">Logout</a></li>
        </ul>';
    } else {
      echo '<ul class="open" id="navbar">
        <li><a class="active text-decoration-none" href="../user/index.php">Home</a></li>
        <li><a class="text-decoration-none" href="../user/tenders.php">Tenders</a></li>
        <li><a class="text-decoration-none" href="../user/login.php" class="user">Login</a></li>
        <li><a class="text-decoration-none" href="../admin/adminmainpage.php">Login As Admin</a></li>
        </ul>';
    }
    ?>
</nav>
