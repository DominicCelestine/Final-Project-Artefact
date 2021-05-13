<?php



if (isset($_POST["registration"])) {


    echo "you clicked a button";

    include "connection.php";

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`) VALUES (NULL, ' $first_name', '$last_name', '$email', '$password', current_timestamp(), 'user');";

    if (mysqli_query($conn, $sql)) {
        header("location: login.php");
		exit();
		
    } 
	
	else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

include "header.php";


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="booking-content">
        
            <div class="form-group form-input">
        	<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
        </div>
        <div class="form-group form-input">
        	<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
        </div>
      <div class="form-group form-input">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkemailAvailability()" placeholder="Email Address" required="required">
                   <span id="user-email-availability-status" style="font-size:12px;"></span> 
                </div>
        
                <div class="form-group form-input">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
        
                <div class="form-group form-input">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                </div>
        
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
        
                <div class="form-group form-submit">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="submit">
                </div></form>
                </div>
            </div>
        </div>
 </div>
</body>
</html>

<?php
// code submit data
if(isset($_POST['register']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['emailid']; 
$password=md5($_POST['password']); 
$sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`) VALUES (NULL, ' $first_name', '$last_name', '$email', '$password', current_timestamp(), 'user');";
$query = $dbh->prepare($sql);
$query->bindParam(':first_name',$first_name,PDO::PARAM_STR);
$query->bindParam(':last_name',$last_name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
//PLEASE TEST YOUR TO ENSURE IT IS SUBMITING THE DATA INTO DATABASE BEFORE YOU PROCEDE  TO THE NEXT STEP
?>

<script>
//This function checks email-availability-status
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
function checkidAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "avail.php",
data:'idno='+$("#idno").val(),
type: "POST",
success:function(data){
$("#user-id-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
//Finally add a function that will check if password 1 and password 2 match, It is called by the form using |onSubmit="return valid();"|
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<!-- JS -->
<!--This will facilitate process of background tasks-->
<script src="js/jquery.min.js"></script>