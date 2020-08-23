<?php
$title = explode('/', $_SERVER['SCRIPT_NAME']);
$title = end($title);
include_once "./includes/helper.php";
if (isAuth()) {
    header("Location: /");
}
include_once "./includes/layout/header.php";
?>
<div class="container">
<form action="/includes/formprocess/signup.php" method="POST">
	<div class="form-group">
    <label for="signup_password">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="signup_email">Email address</label>
    <input type="email" class="form-control" id="signup_email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>

   <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
    <span class="ml-2 d-inline-block">
        Already have an account? <a href="/login.php">Log in</a>
    </span>


</form>

</div>

<?php
include_once "./includes/layout/footer.php";
?>
