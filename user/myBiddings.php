<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biddings</title>
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
        <form class="search" action="searchMyBiddings.php" method="GET">
            <input type="text" name="query" value="My Biddings search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Site search';}" />
            <input type="submit" value="" />
        </form>
</nav>
<div class="container-fluid mt-5 pt-5">
                <?php
                require 'includes/dbconnect.php';

                $Orgid = $_SESSION['userId'];
                $sql = "SELECT T.TenderNo, T.Department, T.Description, T.filename, B.Charge, B.Months, T.DueDate FROM tender AS T JOIN bids AS B ON B.TenderID=T.TenderID AND B.OrgID='$Orgid'";
                //$sql = "SELECT c.car_id, m.make, c.price FROM cars AS c JOIN makers AS m ON c.make_id = m.make_id ORDER BY c.car_id";
                $query = mysqli_query($conn, $sql);
                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info">
                        <thead class="thead-light">
                            <tr>
                                <th>Tender No.</th>
                                <th>Department</th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Charge</th>
                                <th>No. of Months Taken</th>
                                <th>Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['TenderNo'] ?></td>
                                        <td><?php echo $row['Department'] ?></td>
                                        <td><?php echo $row['Description'] ?></td>
                                        <td>
                                            <!-- <button class="btn btn-success" onclick="open_script()">Download</button> -->
                                            <?php $name = $row['filename']; ?>
                                            <a href="download.php?name=<?php echo $name; ?>" class="btn btn-success">Download</a>
                                        </td>
                                        <td><?php echo $row['Charge'] ?></td>
                                        <td><?php echo $row['Months'] ?></td>
                                        <td><?php echo $row['DueDate'] ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="to-top" href="#photo">
    <i class="fas fa-chevron-up"></i>
</a>       
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>