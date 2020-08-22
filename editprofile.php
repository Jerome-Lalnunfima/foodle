<?php
include_once "./includes/layout/header.php";
?>
<div class="container">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone number</label>
    <input name="product_price" type="number" class="form-control" id="phonenumber" placeholder="Phone number">

  </div>

<div class="form-group">
    <label >Email</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input name="address" type="text" class="form-control" id="address" placeholder="Address">

  </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="product_description" class="form-control" id="description" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label >Change profile picture</label>
    	<div class="imgupload">
    	<input name="Profilepicture" type="file" class="form-control-file" id="imgupload">
   		 
    	</div>
  </div>

	<button type="submit" class="btn btn-primary">Save changes</button>


</form>
</div>

<?php
include_once "./includes/layout/footer.php";
?>