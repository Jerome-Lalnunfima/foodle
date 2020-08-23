<?php
$title = explode('/', $_SERVER['SCRIPT_NAME']);
$title = end($title);
include_once "./includes/layout/header.php";

$user = $_SESSION['user'];
?>
<div class="container">
<form action="./includes/formprocess/editprofile.php" method="POST" enctype="multipart/form-data">
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
    <label for="exampleInputEmail1">Name</label>
    <input name="username" value="<?php echo $user['username'] ?>" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone number</label>
    <input name="phone" value="<?php echo $user['phone'] ?>" type="number" required class="form-control" id="phonenumber" placeholder="Phone number">

  </div>

<div class="form-group">
    <label >Email</label>
    <input name="email" type="email" value="<?php echo $user['email'] ?>" required class="form-control" id="email" placeholder="email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input name="address" type="text" required class="form-control" value="<?php echo $user['address'] ?>" id="address" placeholder="Address">

  </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="description" class="form-control" required id="description" rows="3"><?php echo $user['description']; ?></textarea>
  </div>

  <div class="form-group">
    <label >Change profile picture</label>
    	<div class="imgupload">
    	<input name="profile_picture" type="file" class="form-control-file" id="imgupload">
    	</div>
  </div>

	<button type="submit" name="submit" class="btn btn-primary">Save changes</button>


</form>
</div>

<?php
include_once "./includes/layout/footer.php";
?>
