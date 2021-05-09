<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 25px;
  text-align: center;
  color: #1350D7;
 
}
.about {
  padding: 25px;
  text-align: center;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1><bold>About Us</bold></h1></div>
    <div class="about">
        <p>Oneque Supermarket is an  on-demand grocery delivery, which launched in 2020 in Trinidad, has loyal customers nationwide.</p>
        <p>Due to the current circumstances, most of us are quite limited with our grocery shopping opportunities.</p>
        <p>Oneque Supermarket offers a fixed shipping cost regardless of the size of the order, with delivery available within the same day.</p>
        <p>We ensure 100% customer satisfaction because we care about their customers. Our products are of high quality and the groceries are fresh.</p>
    </div>

<div class="about-section">
<h2 style="text-align:center">Our Team</h2></div>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Dominic Celestine</h2>
        <p class="title">CEO & Founder</p>
        <p>"When people get into the habit of ordering their groceries online it’s likely to be sticky."</p>
        <p>dominic@oneque.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Mark Smith</h2>
        <p class="title">Chief Information Officer</p>
        <p>"Technology will give consumers more options, reduced wait times and varities during this pandemic period."</p>
        <p>mark@oneque.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Hannah Ragoo</h2>
        <p class="title">Chief Accountant</p>
        <p>"Grocers will start to see an increase in sales due to the development of online shopping."</p>
        <p>hannah@oneque.com</p>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<h2 style="text-align:center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/products/1-5.png">
      <div class="container">
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/products/1-4.png">
      <div class="container">
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="images/products/1-6.png">
      <div class="container">
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php include "footer.php"; ?>

