<?php
include_once "./includes/layout/header.php";

// Hei hi chu dummy data mai2 ania
// Hetiang deuhreuh hian SQL in table i siam ang, khumi fields nei tur ang deuhreuh in, post bik ah
$dummy_post_data = [
	[
		'name' => 'Lydia Shop',
		'title' => 'Lallyi Home Made Pizza',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, possimus impedit maxime nostrum nisi obcaecati est! Assumenda dolorem, iure voluptatem maxime quos tempore. Sit sapiente, temporibus nisi cumque similique hic.',
		'price' => 200,
		'profile_pic' => 'default-profile.jpg'
	],
	[
		'name' => 'Jerome Til Lenna Dawr',
		'title' => 'Jerome\'s Dick Inflater' ,
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum numquam, id modi consequuntur quasi, voluptatum nobis alias labore molestiae facilis culpa dolorem voluptatem, iste quis impedit. Ipsa beatae recusandae, architecto! ipsum dolor sit amet, consectetur adipisicing elit. Nemo, possimus impedit maxime nostrum nisi obcaecati est! Assumenda dolorem, iure voluptatem maxime quos tempore. Sit sapiente, temporibus nisi cumque similique hic.',
		'price' => 1000,
		'profile_pic' => 'default-profile.jpg'
	],
];
?>

<div class="row">
	<?php include_once "./includes/sidebar.php"; ?>
	<div class="col page-content">
		<h2>Posts</h2>
		<?php 
			foreach ($dummy_post_data as $post) {
				include "./includes/loop/post.php"; 
			}
		?>
	</div>
</div>

<?php
include_once "./includes/layout/footer.php";
?>
