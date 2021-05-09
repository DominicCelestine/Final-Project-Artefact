<?php


if (isset($_POST["review"])) {
include "code.isLoggedIn.php";

    include "connection.php";

    $subject = $_POST["subject"];
    $message = $_POST["message"];


    $sql = "INSERT INTO `review` (`review_id`, `subject`, `message`, `item_id`, `user_id`)
     VALUES (NULL, '$subject', '$message', '$item_id', '$user_id');";

    if (mysqli_query($conn, $sql)) {
       echo "Review posted";
		
    } 
	
	else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>






<style>
body1 {
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

<div class="review-form">
    <form action="<?php echo $page; ?>" method="post">
		<h2>Review</h2>
        <div class="form-group">
        	<input type="text" class="form-control" name="subject" placeholder="subject..." required="required">
        </div>  
        <div class="form-group">
            <textarea id="" cols="30" name="message" rows="10"  placeholder="Message..." required="required"></textarea>
        </div> 
		<div class="form-group">
            <button type="submit" name="review" class="btn btn-primary btn-lg">Submit</button>
            <button type="reset" name="clear" class="btn btn-primary btn-lg">Clear</button>
        </div>
    </form>
</div>









































<style>
    

.reviews{
  padding: 15px;
  max-width: 768px;
  margin: 0 auto;
}

.review-item{
  background-color: white;
  padding: 15px;
  margin-bottom: 5px;
  box-shadow: 1px 1px 5px #343a40;
}

.review-item .review-date{
  color: #cecece;
}
.review-item .review-text{
  font-size: 16px;
  font-weight: normal;
  margin-top: 5px;
  color: #343a40;
}

.review-item .reviewer{
  width: 100px;
  height: 100px;
  border: 1px solid #cecece;
}

/****Rating Stars***/
.raterater-bg-layer {
    color: rgba( 0, 0, 0, 0.25 );
}
.raterater-hover-layer {
    color: rgba( 255, 255, 0, 0.75 );
}
.raterater-hover-layer.rated { /* after the user selects a rating */
    color: rgba( 255, 255, 0, 1 );
}
.raterater-rating-layer {
    color: rgba( 255, 155, 0, 0.75 );
}
.raterater-outline-layer {
    color: rgba( 0, 0, 0, 0.25 );
}

/* don't change these - you might break something.. */
.raterater-wrapper {
    overflow:visible;
}

.software .raterater-wrapper {
    margin-top: 4px;
}

.raterater-layer,
.raterater-layer i {
    display: block;
    position: absolute;
    overflow: visible;
    top: 0px;
    left: 0px;
}
.raterater-hover-layer {
    display: none;
}
.raterater-hover-layer i,
.raterater-rating-layer i {
    width: 0px;
    overflow: hidden;
}

</style>


<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<?php


include "connection.php";

$sql = "SELECT * from review, users WHERE review.user_id=users.user_id AND item_id=$item_id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

        //get product information from the database

        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $review_id = $row["review_id"];
        $subject = $row["subject"];
        $message = $row["message"];
        


?>
<div class="reviews">
  <div class="row blockquote review-item">
    <div class="col-md-3 text-center">
      <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
      <div class="caption">
        <small>by <a href="#joe">
            <?php echo "$first_name $last_name";?>
        </a></small>
      </div>

    </div>
    <div class="col-md-9">
      <h4>
          <?php echo $subject;?>
      </h4>
      <div class="ratebox text-center" data-id="0" data-rating="5"></div>
      <p class="review-text"> <?php echo $message;?> </p>

      <small class="review-date">2021</small>
    </div>                          
  </div>  
</div>




<?php

                }
            } else {
                echo "0 results";
            }





            ?>





