<?php

include_once "../db.php";

if (isset($_POST['submit'])) {
    $pName = $_POST['product_name'];
    $pPrice = $_POST['product_price'];
    $pDesc = $_POST['product_description'];
    $pImages = $_POST['product_images'];

    echo $pName;
    echo $pPrice;
    echo $pDesc;
    var_dump($pImages);
}
