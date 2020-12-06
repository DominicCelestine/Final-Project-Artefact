<?php

//1 - check to use if the user is logged in
session_start();
include "code.isLoggedIn.php";

//2 - cart info
include "code.viewCart.php";

//3 - cart subtotal and total


//4 - receipt code
$receipt_code = "abcde";

//5 - insert receipt
include "connection.php";

$sql = "INSERT INTO `receipts` (`receipt_id`, `receipt_code`, `user_id`, `receipt_subtotal`, `receipt_total`, `receipt_date`) 
VALUES (NULL, '$receipt_code', '$user_id', '$subtotal', '$total', current_timestamp());";

if (mysqli_query($conn, $sql)) {
    $receipt_id = mysqli_insert_id($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql = "";

foreach ($cart as $key => $item) {

    $item_id = $item["item_id"];
    $cart_id = $item["cart_id"];
    $item_price = $item["item_price"];









    //6 - insert purchases
    $sql .= "INSERT INTO `purchases` (`purchase_id`, `item_id`, `purchase_item_price`, `purchase_item_quantity`, `purchase_date`, `receipt_id`) 
VALUES (NULL, '$item_id', '$item_price', '', current_timestamp(), '$receipt_id');";


    //7 - update cart
    $sql .= "UPDATE `cart` SET `cart_item_status` = 'purchased' WHERE `cart`.`cart_id` = $cart_id;";


    // 8 - update stock



}




if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//9 - credit card payment