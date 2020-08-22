<?php

include_once "../db.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $password = password_hash($password, PASSWORD_BCRYPT);

    if (insertToDB("INSERT INTO users(username, password, email) values ('$username', '$password', '$email')")) {
        header("Location: /login.php");
    } else {
        header("Location: /signup.php");
    }
}
