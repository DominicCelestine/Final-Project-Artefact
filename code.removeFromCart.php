<?php





session_start();


if (isset($_GET["id"])) {
    $cart_id = $_GET["id"];
} else {
    echo "No ID in the url";
    exit();
}


include "code.isLoggedIn.php";
include "connection.php";


// sql to delete a record
$sql = "DELETE FROM `cart` WHERE `cart`.`cart_id` = $cart_id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


header("location: cart.php");
exit();
