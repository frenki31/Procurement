<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
    include 'links.php';
    ?>
</head>

<body>
<nav id="main">
  <a href="index.php" class="logo text-decoration-none">Online Procurement</a>
  <div class="fa fa-bars" id="bars-icon"></div>
  <ul class="open" id="navbar">
        <li><a class="text-decoration-none" href="../user/index.php">Home</a></li>
        <li><a class="text-decoration-none" href="../user/tenders.php">Tenders</a></li>
        <li><a class="active text-decoration-none" href="../user/login.php" class="user">Login</a></li>
        <li><a class="text-decoration-none" href="../admin/adminmainpage.php">Login As Admin</a></li>
        </ul>
</nav>
    <section class="container-fluid forms" id="login-section">
        <div class="form login" id="login-form">
            <div class="form-content">
                <header>Login</header>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyfields") {
                        echo '<p class="text-danger">Fill in all fields!</p>';
                    } else if ($_GET["error"] == "wrongpwd") {
                        echo '<p class="text-danger">Wrong Password!</p>';
                    } else if ($_GET["error"] == "nouser") {
                        echo '<p class="text-danger">Please signup before login!</p>';
                    }
                }
                ?>
                <form class="form-group" action="includes/dblogin.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="mailuid" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-2" id="password">
                        <input type="password" class="form-control" name="pwd" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="d-block mb-2" id="login-btn">
                        <button class="btn btn-primary" type="submit" name="login-submit">Login</button>
                    </div>
                    <div class="form-link mb-4">
                        <span>Don't have an account yet? <a href="signup.php" class="signup">Sign Up</a> </span>
                    </div>
                </form>
        </div>
    </section>
    <a class="to-top" href="#photo">
      <i class="fas fa-chevron-up"></i>
    </a>  
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>