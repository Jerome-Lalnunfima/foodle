<?php
$title = explode('/', $_SERVER['SCRIPT_NAME']);
$title = end($title);
include_once "./includes/helper.php";
if (!isAuth()) {
    header("Location: /");
}
include_once "./includes/layout/header.php";
?>
<div class="container">
<form action="/includes/formprocess/post.php" method="POST" enctype="multipart/form-data">

    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo flash('error'); ?>
        </div>
    <?php elseif (isset($_SESSION['message'])): ?>
        <div class="alert alert-success" role="alert">
            <?php echo flash('message'); ?>
        </div>
    <?php endif; ?>

  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input required name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter product name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input required name="product_price" type="number" class="form-control" id="price" placeholder="Price">

  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea required name="product_description" class="form-control" id="description" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Image</label>
    	<div class="imgupload">
            <input required type="file" accept="image/*" name="product_image" class="form-control-file" id="exampleFormControlFile1">
    	</div>
  </div>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
include_once "./includes/layout/footer.php";
?>
