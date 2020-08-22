<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "foodle"; 

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function getFromDB($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    if ($result = mysqli_query($conn, $query)) {
        $arr = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($arr, $row);
        }

        return $arr;
    }
    mysqli_close($conn);
}

function insertToDB($query) {
    global $conn;

    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false;
    }
    mysqli_close($conn);
}
?>
