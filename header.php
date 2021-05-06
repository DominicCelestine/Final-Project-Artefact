<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="keywords" content="Oneque Grocery Store Responsive web template, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){ window.scrollTo(0,1); } 
        </script>

</head>

<body>




    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="homepage.php">
            <img src="images/products/logo1.png" class="logo_fixed" alt="" width="205" height="125">
         </a> 
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store.php">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review.php">Review</a>
                </li>

                <?php

                 if(isset($_SESSION["user_id"])){

                 ?>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                 
                 
                 <?php   



                 }else {


                ?>                   
               
            

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Registration</a>
                </li>


                <?php

                 }


                 ?>

                <form class="navbar-form navbar-left" action="search.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <input type="submit" value="Submit">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search" aria-hidden="true" style="color:white;"></i>
                            </button>
                        
                    </div>
                </form>

            </ul>
        </div>
    </nav>
    <br>

    </html>