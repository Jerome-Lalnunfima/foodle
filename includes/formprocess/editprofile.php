<?php
include_once "../db.php";
session_start();

$uid = $_SESSION['user']['id'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $profile_pic = $_FILES['profile_picture'];

    if ($profile_pic['name'] != '') {
        $imagetype = strtolower(pathinfo($profile_pic['name'], PATHINFO_EXTENSION));

        $image_name = uniqid(true) . '.' . $imagetype;
        $image_path = '../../assets/uploads/profile_images/' . $image_name;

        if (!move_uploaded_file($profile_pic['tmp_name'], $image_path)) {
            $_SESSION['error'] = "Cannot upload profile picture!";
            header("Location: ../../editprofile.php");
        }
    } else {
        $image_name = $_SESSION['user']['profile_pic_path'];
    }

    if (insertToDB("UPDATE users SET username = '$username', phone = '$phone', email = '$email', address = '$address', description = '$description', profile_pic_path = '$image_name' WHERE id = '$uid'")) {
        $_SESSION['user'] = getFromDB("SELECT * FROM users WHERE id = $uid")[0];
        $_SESSION['message'] = "Profile update success!";
    } else {
        $_SESSION['error'] = "Unable to update profile. Try again!";
    }
    header("Location: ../../editprofile.php");
}
