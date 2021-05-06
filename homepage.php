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

<style>
body {
.wthree_banner_bottom_left {
		width: 100%;
	}
	.wthree_banner_bottom_left_grid_pos h4 {
		font-size: 1.1em;
	}
	.wthree_banner_bottom_left_grid_pos h4 span {
		width: 50px;
		height: 50px;
		padding-top: .9em;
	}
    .wthree_banner_bottom_left_grid_sub{
	float: left;
    width: 20%;
}
.wthree_banner_bottom_left_grid_sub1{
	float:right;
	width:80%;
}
</style>

<title>Oneque Supermarket</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    </head>

    <div class="banner_bottom">
    <div class="wthree_banner_bottom_left_grid_sub">
    </div>
    <div class="wthree_banner_bottom_left_grid_sub1">
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="images/products/1-3.png" alt=" " class="img-responsive" />
            </div>
        </div>
    </div>


</body>

<?php include "footer.php"; ?>