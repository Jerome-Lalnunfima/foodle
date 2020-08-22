<?php
session_start();

if (session_destroy()) {
    $_SESSION['user'] = null;
    header('location: /');
}

