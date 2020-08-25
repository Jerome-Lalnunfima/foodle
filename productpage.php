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
    

?>
<div class="container">

<div class="row mr-0 foodle--post mb-3 mt-3">
    <div class="col">
        <div class="row">
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
                                <h5>product_name</h5>    
                            </div>
                            
                        </div>
                         <div class="row">
                            <div class="col">
                               <strong>100</strong> 
                            </div>
                            
                        </div>
                         <div class="row">
                            <div class="col">
                               <p>desdesdesdesdesdesddesdesesds</p>
                            </div>
                            
                        </div>
                         <div class="row">
                            <div class="col">
                                <h5>9872762654/232321</h5>
                            </div>
                            
                        </div>
                         <div class="row">
                            <div class="col">
                                <a href="mailto:kasf@gmail.com">email@gmail.com</a>
                            </div>
                            
                        </div>
                       
                       



                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include_once "./includes/layout/footer.php";
?>
