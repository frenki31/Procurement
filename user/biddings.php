<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biddings</title>
    <?php
    include 'links.php';
    ?>
</head>

<body>
<nav id="main">
  <a href="index.php" class="logo text-decoration-none">Online Procurement</a>
  <div class="fa fa-bars" id="bars-icon"></div>
  <ul id="navbar">
        <li><a class="text-decoration-none" href="../user/index.php">Home</a></li>
        <li><a class="text-decoration-none" href="../user/tenders.php">Tenders</a></li>
        <li><a class="active text-decoration-none" href="../user/myBiddings.php">My Biddings</a></li>
        <li><a class="text-decoration-none" href="../user/myConfirmedBiddings.php">Confirm Biddings</a></li>
        <li><a class="text-decoration-none" href="../user/includes/dblogout.php">Logout</a></li>
        </ul>
</nav>
    <section class="container-fluid forms mt-5 pt-4" id="login-section">
        <div class="form login" id="login-form">
            <div class="form-content">
                <header>Bid</header>
                <?php
                require 'includes/dbconnect.php';

                $Orgid = $_SESSION['userId'];
                $id = $_GET['id'];
                $sql = "SELECT * FROM organization where OrgID='$Orgid'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($query);
                ?>
                <form class="form-group" action="insertIntoTable.php" method="POST">
                    <div class="form-floating mb-1">  
                        <input class="form-control" type="text" name="OrgID" id="OrgID" value="<?php echo $row['OrgID'] ?>" readonly> 
                        <label class="floatingInput" for="OrgID">Organization ID</label>  
                    </div>
                    <div class="form-floating mb-1">   
                        <input class="form-control" type="text" name="Name" id="Name" value="<?php echo $row['OrgName'] ?>" readonly>
                        <label class="floatingInput" for="Name">Organization Name</label> 
                    </div>
                    <div class="form-floating mb-1">
                        <input class="form-control" type="email" name="Email" id="Email" value="<?php echo $row['OrgEmail'] ?>" readonly>
                        <label for="floatingInput" for="Email">Email Address</label> 
                    </div>
                    <div class="form-floating mb-1">  
                        <input class="form-control" type="number" name="TenderID" id="TenderID" value="<?php echo $id ?>" readonly>
                        <label for="floatingInput" for="TenderID">Tender ID</label>  
                    </div>
                    <div class="form-floating mb-1">
                        <input class="form-control" type="float" name="Charge" id="Charge" placeholder="Amount(in LEK)" required>
                        <label for="floatingInput" for="Charge">Charge (in LEK)</label>    
                    </div>
                    <div class="form-floating mb-1">
                        <input class="form-control" type="number" name="Months" id="Months" placeholder="No. of months taken" required>
                        <label for="floatingInput" for="Months">Number of Months Taken</label>    
                    </div>
                    <div class="d-block mb-1" id="login-btn">
                        <button class="btn btn-primary" type="submit" name="bid-submit">Submit</button>
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