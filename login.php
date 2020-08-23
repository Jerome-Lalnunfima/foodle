<?php
$title = explode('/', $_SERVER['SCRIPT_NAME']);
$title = end($title);
session_start();
include_once "./includes/helper.php";

if (isAuth()) {
    header("Location: /");
}
include_once "./includes/layout/header.php";
?>
<div class="container">
<form action="/includes/formprocess/login.php" method="POST">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    <small class="text-danger">
        <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                $_SESSION['message'] = null;
            }
        ?>
    </small>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Login</button>
    <span class="ml-2 d-inline-block">
        Do not have an account? <a href="/login.php">Sign up</a>
    </span>
</div>

</div>

</form>
</div>
<?php
include_once "./includes/layout/footer.php";
?>
