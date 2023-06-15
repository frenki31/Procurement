<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenders</title>
    <?php
    include 'links.php';
    ?>
</head>

<body>
    <?php
    include 'includes/navbar_with_search.php';
    ?>
<div class="container-fluid mt-5 pt-5">
                <?php
                require 'includes/dbconnect.php';

                $sql = "SELECT TenderID,TenderNo,Department,OrgID,Description,Price,DueDate,Duration,filename,CurrentTime FROM tender WHERE OrgID IS NULL ORDER BY CurrentTime desc";
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
                                <th>Price</th>
                                <th>Due Date</th>
                                <th>Duration</th>
                                <th>Bid</th>
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
                                        <script>
                                            function open_script() {
                                                window.location.assign('download.php');
                                            }
                                        </script>
                                        <td>
                                            <!-- <button class="btn btn-success" onclick="open_script()">Download</button> -->
                                            <?php $name = $row['filename']; ?>
                                            <a href="download.php?name=<?php echo $name; ?>" class="btn btn-success">Download</a>
                                        </td>
                                        <td><?php echo $row['Price'] ?></td>
                                        <td><?php echo $row['DueDate'] ?></td>
                                        <td><?php echo $row['Duration'] ?></td>
                                        <td>
                                            <?php
                                                    if (isset($_SESSION['userId'])) {
                                                        //$id = $_SESSION['userId'];
                                                        $id = $row['TenderID'];
                                                        echo '<a href="biddings.php?id=' . $id . '" class="btn btn-primary">' . 'BID</a>';
                                                    } else {
                                                        echo '<a href="login.php" class="btn btn-primary">BID</a>';
                                                    }
                                                    ?>
                                        </td>
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