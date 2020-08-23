<?php
include '../db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if ($result = mysqli_query($conn, $sql)) {
        $rows = mysqli_fetch_assoc($result);

        if (password_verify($password, $rows['password'])) {
            session_start();
            $_SESSION['user'] = $rows;
            header('Location: ../../');
        } else {
            session_start();
            $_SESSION['user'] = null;
            $_SESSION['message'] = "Incorrect username or password!";
            header('Location: ../../login.php');
        }
    }

    mysqli_close($conn);
} else {
    header('Location: /');
}

