<?php
include_once "./includes/layout/header.php";
?>
<div class="container">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter product name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input name="product_price" type="number" class="form-control" id="price" placeholder="Price">

  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="product_description" class="form-control" id="description" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Images</label>
    	<div class="imgupload">
    	<input type="file" class="form-control-file" id="exampleFormControlFile1">
   		 <input type="file" class="form-control-file" id="exampleFormControlFile1">
   		 <input type="file" class="form-control-file" id="exampleFormControlFile1">
    	</div>
  </div>

	<button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

<?php
include_once "./includes/layout/footer.php";
?>