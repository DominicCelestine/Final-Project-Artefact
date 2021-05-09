<?php

session_start();


if (isset($_SESSION["user_id"])) {

  $first_name = $_SESSION["first_name"];
  $last_name = $_SESSION["last_name"];

  echo "Welcome $first_name $last_name";
} else {
  echo "no user logged in";
}


include "header.php"; ?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
    .column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<body>



<!-- Slide Show -->
<section>
  <img class="mySlides" src="images/products/img1.jpg"
  style="width:100%">
  <img class="mySlides" src="images/products/img2.jpg"
  style="width:100%">
  <img class="mySlides" src="images/products/img3.jpg"
  style="width:100%">
</section>


<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">WELCOME TO </h2>
  <h2 class="w3-wide"><i>ONEQUE SUPERMARKET</i></h2>
  <p class="w3-justify">With the spread of the novel coronavirus means most people are currently being asked to stay at home as much as possible, getting fresh food can feel extra challenging.</p>
  <p class="w3-justify">Oneque Supermarket is a grocery delivery service where personal shoppers select their items from the store and then deliver them to your door, within the same day.</p>
</section>
<BR>

<section class="w3-row-padding w3-center w3-light-grey">
    <h2 class="w3-wide">TESTIMONIALS</h2>
  <article class="w3-third">
    <p>Sudney</p>
    <p>"Oneque Supermarket stands out amongst all the other online grocery stores because it has a wide variety of items at affordable prices with a friendly and timely services."</p>
  </article>
  <article class="w3-third">
    <p>Luke</p>
    <p>"Excellent customer service. It's nice to finally have an online grocery store during this pandemic period."</p>
  </article>
  <article class="w3-third">
    <p>Richard</p>
    <p>"If you have never shopped online, I would suggest you to take time and place an order with Oneque Supermarket. You will not be disappointed with what they have to offer."</p>
  </article>
</section>

<br>

<h2 style="text-align:center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/products/img5.png">
      <div class="container">
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/products/img4.png">
      <div class="container">
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="images/products/img6.png">
      <div class="container">
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>

