<div class="row mr-0 foodle--post">
	<div class="col">
		<div class="row">
			<div class="col d-flex align-items-center p-0 pl-1 pr-1">
				<div class="profile-picture d-inline-block" style="background-image: url('../../assets/images/<?php echo $post['profile_pic']; ?>');"></div>
				<a href="" class="ml-2"><?php echo $post['name']; ?></a>
			</div>
		</div>
		<div class="row foodle--post-content">
			<div class="col">
				<div class="row align-items-center">
					<div class="col-2 post-image" style="background-image: url('../../assets/images/<?php echo $post['profile_pic']; ?>');"></div>
					<div class="col">
						<div class="row">
							<div class="col">
								<h5><?php echo $post['title']; ?></h5>
								<p><?php echo $post['description']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<strong>Rs. <?php echo $post['price']; ?>\-</strong>
								<a class="btn btn-sm btn-danger ml-3">View Item</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>