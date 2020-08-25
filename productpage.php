<?php
$title = explode('/', $_SERVER['SCRIPT_NAME']);
$title = end($title);
include_once "./includes/layout/header.php";
include_once "./includes/db.php";

if (isset($post['profile_pic_path'])) {
    $profile_pic_path = "/assets/uploads/profile_images/" . $post['profile_pic_path'];
} else {
    $profile_pic_path = "/assets/images/default-profile.jpg";
}

if (isset($_GET['post'])) {
    $pid = $_GET['post'];
    $post = getFromDB("SELECT posts.*, users.address, users.email, users.username, users.profile_pic_path, users.phone, users.id FROM posts INNER JOIN users ON users.id = posts.user_id WHERE posts.id = '$pid' ORDER BY posts.id DESC")[0];
}

?>
<div class="container">
<?php if (isset($_GET['post'])): ?>
    <div class="row mr-0 foodle--post mb-3 mt-3">
        <div class="col">
            <div class="row mb-3">
                <div class="col d-flex align-items-center p-0 pl-1 pr-1">
                    <div class="profile-picture d-inline-block" style="background-image: url('<?php echo $profile_pic_path; ?>');"></div>
                    <a href="/profile.php?user_id=<?php echo $post['user_id']; ?>" class="ml-2"><?php echo $post['username']; ?></a>
                </div>
            </div>
            <div class="row foodle--post-content">
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-2 post-image" style="background-image: url('/assets/uploads/images/<?php echo $post['image_path']; ?>');"></div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <h5><?php echo $post['title']; ?></h5>    
                                    <p><?php echo $post['address']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <strong>Rs. <?php echo $post['price']; ?></strong> 
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                <p><?php echo $post['description']; ?></p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5><?php echo $post['phone']; ?></h5>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                <a href="mailto:<?php echo $post['email']; ?>"><?php echo $post['email']; ?></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else:?>
<h2>No product found!</h2>
<?php endif;?>
</div>

<?php
include_once "./includes/layout/footer.php";
?>
