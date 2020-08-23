<?php
session_start();
include_once "../db.php";

if (isset($_POST['submit'])) {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $desc = $_POST['product_description'];
    $image = $_FILES['product_image'];

    $imagetype = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

    $image_name = uniqid(true) . '.' . $imagetype;
    $image_path = '../../assets/uploads/images/' . $image_name;

    $uid = $_SESSION['user']['id'];

    if (!move_uploaded_file($image['tmp_name'], $image_path)) {
        $_SESSION['error'] = "Cannot upload file!";
        header("Location: ../../post.php");
    }

    if (insertToDB("INSERT INTO posts(price, title, description, image_path, user_id) values ('$price', '$name', '$desc', '$image_name', '$uid')")) {
        $_SESSION['message'] = "Post submitted successfully!";
    } else {
        $_SESSION['error'] = "Unable to create post. Try again!";
    }
    header("Location: ../../post.php");
}
