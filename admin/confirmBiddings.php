<?php
session_start();
require 'includes/dbconnect.php';

$TenderID = $_SESSION['TenderID'];
$OrgID = $_SESSION['OrgID'];
$OrgName = $_SESSION['OrgName'];
$email = $_SESSION['EmailID'];
$msg = $OrgName . "\n" . $OrgID . "\n\nOn behalf of our Institute,it gives us immense pleasure to let you know that your tender has been accepted.";
mail($email, "Tender Confirmation", $msg);
$sql = "UPDATE tender SET OrgID='$OrgID' WHERE TenderID='$TenderID'";
$query = mysqli_query($conn, $sql);
echo "<script type='text/javascript'>alert('TENDER CONFIRMED!');
    window.location.href='adminmainpage.php';
    </script>";
