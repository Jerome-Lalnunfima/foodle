<?php
include_once "./includes/layout/header.php";
include_once "./includes/db.php";

$uid = $_SESSION['user']['id'];

$sort = $_GET['sort'];

if (isset($sort) || isset($min) || isset($max)) {
    switch ($sort) {
        case "none";
                $posts = getFromDB("SELECT posts.*, users.username, users.profile_pic_path FROM posts INNER JOIN users ON users.id = posts.user_id ORDER BY posts.id DESC");
            break;
        case "phl":
                $posts = getFromDB("SELECT posts.*, users.username, users.profile_pic_path FROM posts INNER JOIN users ON users.id = posts.user_id ORDER BY posts.price DESC");
            break;
        case "plh":
                $posts = getFromDB("SELECT posts.*, users.username, users.profile_pic_path FROM posts INNER JOIN users ON users.id = posts.user_id ORDER BY posts.price ASC");
            break;
    }
} else {
    $posts = getFromDB("SELECT posts.*, users.username, users.profile_pic_path FROM posts INNER JOIN users ON users.id = posts.user_id ORDER BY posts.id DESC");
}

?>

<div class="row">
	<?php include_once "./includes/sidebar.php"; ?>
	<div class="col page-content">
		<h2>Posts</h2>
        <?php if (count($posts) == 0): ?>
            <div class="alert alert-dark" role="alert">
                There are no posts yet!
            </div> 
        <?php else:
            foreach ($posts as $post) {
                include "./includes/loop/post.php"; 
            }
        endif; ?>
	</div>
</div>

<?php
include_once "./includes/layout/footer.php";
?>
