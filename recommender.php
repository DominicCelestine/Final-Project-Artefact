<?php



 ?>

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
        <div style="margin-bottom:80px;"></div>
            <h1 style="text-align:center;">Recommended products</h1>
            <div class="row">
            <div class="container-fluid">
                <div class="px-lg-5">
                    <div class="row">
<?php

    include "connection.php";

    $sql = "Select* FROM items WHERE items.item_id = items.item_id AND items.item_id IN (SELECT DISTINCT purchases.item_id FROM purchases WHERE purchases.receipt_id IN (SELECT DISTINCT purchases.receipt_id FROM purchases WHERE purchases.item_id = items.item_id))";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

    $item_id = $row["item_id"];
    $item_title =$row["item_title"];
    $item_image =$row["item_image"];
    $item_price =$row["item_price"];

?>

<!-- Gallery item -->
    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm p-5"><img style="width: 25%" src="<?php echo $item_image; ?>" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5><a href="#" class="text-dark"><?php echo $item_title; ?></a></h5>
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
    echo "0 results";
}

?>

</div>

