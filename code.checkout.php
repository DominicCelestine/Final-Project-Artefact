<?php

//1 - check to use if the user is logged in
session_start();

if (isset($_SESSION["user_id"])) {

    $user_id = $_SESSION["user_id"];
} else {
    echo json_encode(['error' => 'user is not Logged in']);
    //header("location: login.php");//
    exit();
}

//echo "You are logged in";

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
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





$sql = "";


if (!empty($cart)) {


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
} else {
    //echo "Cart is empty";
    echo json_encode(['error' => 'Cart is empty']);
    exit();
}


//end for each


//echo "The multi query is $sql";



if (mysqli_multi_query($conn, $sql)) {
    //echo "New records created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//9 - credit card payment

include "code.stripe2.php";
