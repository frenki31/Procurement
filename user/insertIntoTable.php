<?php
if (isset($_POST['bid-submit'])) {
    require 'includes/dbconnect.php';
    //echo "Hello World";
    $tenderId = $_POST['TenderID'];
    $orgId = $_POST['OrgID'];
    $charge = $_POST['Charge'];
    $Months = $_POST['Months'];

    //echo $tenderId;

    $sql = "INSERT INTO bids VALUES('$tenderId','$orgId','$charge','$Months')";
    $query = mysqli_query($conn, $sql);
    echo "<script type='text/javascript'>alert('YOUR BID HAS BEEN REGISTERED!!');
    window.location.href='myBiddings.php';
    </script>";
} else {
    header('location: biddings.php');
    exit();
}
