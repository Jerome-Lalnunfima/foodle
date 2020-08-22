<?php
include '../db.php';

if ($_POST['submit']) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, name, password FROM users WHERE name = '$username'";

    $result = mysqli_query($conn, $sql);

    if ($result = mysqli_query($conn, $sql)) {
        $rows = mysqli_fetch_assoc($result);

        if ($rows['email'] == $email && password_verify($password, $rows['password'])) {
            session_start();
            $_SESSION['user'] = $rows;
            header('location: ../../');
        } else {
            session_start();
            $_SESSION['user'] = null;
            $_SESSION['message'] = "Incorrect username or password!";
            header('location: ../../login.php');
        }
    }

    mysqli_close($conn);
} else {
    header('location: /');
}

