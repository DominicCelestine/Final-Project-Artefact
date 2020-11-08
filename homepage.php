<? php

session_start();


if(isset($_SESSION["user_id"]))
{

  $first_name = $_SESSION["first_name"];
  $last_name = $_SESSION["last_name"];

  echo "Welcome $first_name $last_name";
}

else
{
  echo "no user logged in";
}







include "header.php"; ?>



<h1>Homepage</h1>




<?php include "footer.php"; ?>