<?php
include_once "./includes/layout/header.php";
?>
<div class="container">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input name="email" type="number" class="form-control" id="email" placeholder="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea name="product_description" class="form-control" id="Message" rows="3"></textarea>
  </div>

  

	<button type="send" class="btn btn-primary">Send</button>


</form>
</div>





<?php
include_once "./includes/layout/footer.php";
?>