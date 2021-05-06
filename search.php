<?php
    session_start();
    $tab_title = "Search";
    include "header.php" ; ?>
    <div style="margin-bottom:80px;"></div>

    <style>
        body {
        background: #f4f4f4;
        }
        .banner {
        background: #a770ef;
        background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
        background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
        }
    </style>

<?php


        if(isset($_GET['search']) && $_GET['search'] !== ''){
//capture search text
            $search = $_GET['search'];

include "connection.php";

        $sql = "SELECT * from items WHERE item_title LIKE '%$search%' OR item_description LIKE '%$search%' OR item_price LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
// output data of each row
            while($row = mysqli_fetch_assoc($result)) {
$item_id = $row["item_id"];
$item_title =$row["item_title"];
$item_image =$row["item_image"];
$item_price =$row["item_price"];
?>


<!--Gallery item -->
<div class="col-xl-4 col-lg-4 col-md-6 mb-4">
<div class="bg-white rounded shadow-sm p-5"><img style="width: 100%" src="<?php echo $item_image; ?>" alt="" class="img-fluid card-img-top">
<div class="p-4">
<h5> <a href="#" class="text-dark"><?php echo $item_title; ?></a></h5>

<p class="small text-muted mb-0">Click details to view more about the product</p>
<div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
<p class="small mb-0"><i class=""></i><span class="font-weight-bold"><a href="details.php?id=<?php echo $item_id; ?>">Details</a></span></p>
<div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
</div>
</div>
</div>
</div>
<!-- End -->

<?php
}
} else {
echo '<div class="alert alert-info">
<strong> Currently out of stock.</strong>
</div>';
}
}
else{
echo '<div class="alert alert-info">
<strong> You entered no search</strong>
</div>';
}
?>

</div>

<?php include "footer.php"; ?>