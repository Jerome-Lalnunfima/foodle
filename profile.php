<?php
$title = explode('/', $_SERVER['SCRIPT_NAME']);
$title = end($title);
include_once "./includes/layout/header.php";
include_once "./includes/db.php";

$uid = $_GET['user_id'];
$prof_user = getFromDB("SELECT * FROM users WHERE id = '$uid'")[0];

if (isset($prof_user['profile_pic_path'])) {
    $profile_pic_path = "/assets/uploads/profile_images/" . $prof_user['profile_pic_path'];
} else {
    $profile_pic_path = "/assets/images/default-profile.jpg";
}
?>


<?php if ($prof_user): ?>
<div class="container foodle--profile-page">
	<div class="foodle--profile-data d-flex align-items-center">
		<div class="profile-picture">
            <img src="<?php echo $profile_pic_path; ?>" alt="Profile">
		</div>
		<div class="profile-data">
            <h3><?php echo $prof_user['username']; ?></h3>
			<div class="meta-info">
				<div class="font-italic">
                    <?php 
                        if ($prof_user['address'] == '') {
                            echo "No address given.";
                        } else {
                            echo $prof_user['address']; 
                        }
                    ?>
				</div>
				<div>
					<i class="fa fa-phone"></i>
                    <?php 
                        if ($prof_user['phone'] == '') {
                            echo "No number given.";
                        } else {
                            echo $prof_user['phone']; 
                        }
                    ?>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo $prof_user['email']; ?>"><?php echo $prof_user['email']; ?></a>
				</div>
                <?php if ($uid === $_SESSION['user']['id']): ?>
                    <div class="btn btn-sm btn-light">
                        <a href="/editprofile.php">Edit Profile</a>
                    </div>
                <?php endif;?>
			</div>
		</div>
	</div>

	<div class="foodle--profile-description">
		<h5 class="font-italic font-weight-bold">Description:</h5>
        <?php 
            if ($prof_user['description'] == '') {
                echo "No Description!";
            } else {
                echo $prof_user['description']; 
            }
        ?>
	</div>
</div>
<?php else: ?>
    <div class="container">
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-warning"></i>
            User does not exist.
        </div>
    </div>
<?php endif; ?>

<?php
include_once "./includes/layout/footer.php";
?>
