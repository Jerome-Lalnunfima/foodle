<?php
include_once "./includes/layout/header.php";
include_once "./includes/db.php";

$q = $_GET['q'];
$searchposts = getFromDB("SELECT posts.*, users.username, users.profile_pic_path FROM posts INNER JOIN users ON users.id = posts.user_id WHERE posts.title like '%$q%' or posts.description like '%$q%' or users.username like '%$q%' ORDER BY posts.id DESC");
?>

<?php if (count($searchposts) > 0): ?>
<div class="container">
    <div class="row">
        <div class="col page-content">
            <h2>Search results for: "<?php echo $q; ?>"</h2>
            <?php if (count($searchposts) == 0): ?>
                <div class="alert alert-dark" role="alert">
                    There are no posts yet!
                </div> 
            <?php else:
                foreach ($searchposts as $post) {
                    include "./includes/loop/post.php"; 
                }
            endif; ?>
        </div>
    </div>
</div>
<?php else: ?>
    <div class="container">
        <div class="alert alert-danger" role="alert">
            Could not find anything related to "<?php echo $q; ?>".
        </div>
    </div>
<?php endif; ?>
<?php
include_once "./includes/layout/footer.php";
?>
