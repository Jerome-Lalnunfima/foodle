<?php
$title = explode('/', $_SERVER['SCRIPT_NAME']);
$title = end($title);
include_once "./includes/layout/header.php";
?>
<div class="container">
    <h2 class="mb-4">You can reach us here:</h2>

    <h5>Armed Veng, Aizawl</h5>
    <h5>Mizoram, 796001</h5>
    <h5>Email Us: <a href="mailto:customer@foodle.com">customer@foodle.com</a></h5>
    <h5>Call Us: <a href="tel:1234567890">1234567890</a></h5>
</div>
<?php
include_once "./includes/layout/footer.php";
?>
