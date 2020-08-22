<?php
include_once "./includes/layout/header.php";
?>
<div class="container">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</div>
<div class="signuppage">
<h1 >Does not have an account? <a href="/signup.php">Sign Up</a>
</h1> 

</div>

</form>
</div>







<?php
include_once "./includes/layout/footer.php";
?>