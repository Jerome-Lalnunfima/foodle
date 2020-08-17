<?php 
    include_once dirname(__FILE__) . '/../helper.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (isset($title)) {
                $title = reset(explode('.', $title));
                echo ucfirst($title);
            } else {
                echo "Foodle";
            }
        ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="container-fluid">
    <div class="row bg-danger foodle--header-nav">
    	<div class="col">
    		<div class="foodle--header-brand d-flex justify-content-between">
                <h2>Foodle</h2>

                <ul class="foodle--social-links d-flex justify-content-between">
                    <a href="https://facebook.com" class="social-link">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://instagram.com" class="social-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </ul>
            </div>
    		<div class="row">
    			<div class="col">
                    <div class="d-flex justify-content-between">
        				<ul class="nav foodle--nav">
        					<li class="nav-item">
        						<a href="/" class="nav-link <?php echo isActiveLink("/"); ?>">
                                    <i class="fa fa-home"></i>
                                    &nbsp;
                                    Home
                                </a>
        					</li>
        					<li class="nav-item">
        						<a href="/login.php" class="nav-link <?php echo isActiveLink("/login.php"); ?>">
                                    <i class="fa fa-user"></i>
                                    &nbsp;
                                    Login
                                </a>
        					</li>
        					<li class="nav-item">
        						<a href="/profile.php" class="nav-link <?php echo isActiveLink("/profile.php"); ?>">
                                    <i class="fa fa-address-card"></i>
                                    &nbsp;
                                    Profile
                                </a>
        					</li>
        					<li class="nav-item">
        						<a href="/post.php" class="nav-link <?php echo isActiveLink("/post.php"); ?>">
                                    <i class="fa fa-upload"></i>
                                    &nbsp;
                                    Post
                                </a>
        					</li>
        					<li class="nav-item">
        						<a href="/contact-us.php" class="nav-link <?php echo isActiveLink("/contact-us.php"); ?>">
                                    <i class="fa fa-phone"></i>
                                    &nbsp;
                                    Contact Us
                                </a>
        					</li>
        					<li class="nav-item">
        						<a href="/about-us.php" class="nav-link <?php echo isActiveLink("/about-us.php"); ?>">
                                    <i class="fa fa-info"></i>
                                    &nbsp;
                                    About Us
                                </a>
        					</li>
        				</ul>
                        <form action="" method="GET" class="d-flex justify-content-center align-items-center foodle--search-form">
                            <span>Search:</span>
                            <input id="search-input" type="text" placeholder="search here" class="form-control" name="q">
                            <button type="submit" class="btn btn-light">Go</button>
                        </form>  
                    </div>
    			</div>
    		</div>
    	</div>
    </div>
