<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
    <section class="container-fluid forms mt-5 pt-4" id="login-section">
        <div class="form login" id="login-form">
            <div class="form-content">
                <header>Signup</header>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyfields") {
                        echo '<p class="signuperror text-danger">Fill in all fields!</p>';
                    } else if ($_GET["error"] == "invalidmailuid") {
                        echo '<p class="signuperror text-danger">Invalid ID and e-mail!</p>';
                    } else if ($_GET["error"] == "invaliduid") {
                        echo '<p class="signuperror text-danger">Invalid ID!</p>';
                    } else if ($_GET["error"] == "invalidmail") {
                        echo '<p class="signuperror text-danger">Invalid E-mail!</p>';
                    } else if ($_GET["error"] == "passwordcheck") {
                        echo '<p class="signuperror text-danger">Your passwords do not match!</p>';
                    } else if ($_GET["error"] == "usertaken") {
                        echo '<p class="signuperror text-danger">ID is already taken!</p>';
                    }
                } else if (isset($_GET["signup"])) {
                    if ($_GET["signup"] == "success") {
                        echo '<p class="text-success">Signup successfull!</p>';
                    }
                }
                ?>
                <form class="form-group" action="includes/dbsignup.php" method="POST">
                    <div class="form-floating mb-2">
                        <input class="form-control" type="text" name="OrgID" placeholder="Organization ID" required>
                        <label for="floatingInput">Organization ID</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input class="form-control" type="text" name="OrgName" placeholder="Organization Name" required>
                        <label for="floatingInput">Organization Name</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input class="form-control" type="email" name="mail" placeholder="Email Address" required>
                        <label for="floatingInput">Email Address</label>
                    </div>
                    <div class="form-floating mb-2" id="password">
                        <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-2" id="password">
                        <input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat Password" required>
                        <label for="floatingPassword">Repeat Password</label>
                    </div>
                    <div class="d-block mb-2" id="login-btn">
                        <button class="btn btn-primary" type="submit" name="signup-submit">Signup</button>
                    </div>
                    <div class="form-link mb-2">
                        <span>Already registered? <a href="login.php" class="login">Login</a> </span>
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