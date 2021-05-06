<?php
session_start();

include "header.php";
include "code.isLoggedIn.php";


$sql = "INSERT INTO `review` (`review_id`, `review_message`) VALUES (NULL, ' $review_message');";

?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Elegant Sign Up Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #999;
	background: #fafafa;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	min-height: 41px;
	box-shadow: none;
	border-color: #e6e6e6;
}
.form-control:focus {
	border-color: #00c1c0;
}
.form-control, .btn {        
	border-radius: 3px;
}
.review-form{
	width: 425px;
	margin: 0 auto;
	padding: 30px 0;
}
.review-form h2 {
	color: #333;
	font-weight: bold;
	margin: 0 0 25px;
}
.review-form form {
	margin-bottom: 15px;
	background: #fff;
	border: 1px solid #f4f4f4;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 40px 50px;
}
.review-form .form-group {
	margin-bottom: 20px;
}
.review-form label {
	font-weight: normal;
	font-size: 14px;
}  
.review-form .btn, .review-form .btn:active {        
	font-size: 16px;
	font-weight: bold;
	background: #00c1c0 !important;
	border: none;
	min-width: 140px;
}
.review-form .btn:hover, .review-form .btn:focus {
	background: #00b3b3 !important;
}
.review-form a {
	color: #00c1c0;
	text-decoration: none;
}	
.review-form a:hover {
	text-decoration: underline;
}
</style>
</head>
<body>
<div class="review-form">
    <form action="review.php" method="post">
		<h2>Review</h2>
        <div class="form-group">
        	<input type="text" class="form-control" name="message" placeholder="Message..." required="required">
        </div>  
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
            <button type="reset" name="submit" class="btn btn-primary btn-lg">Clear</button>
        </div>
    </form>
</div>
</body>
</html>




        <?php include "footer.php"; ?>