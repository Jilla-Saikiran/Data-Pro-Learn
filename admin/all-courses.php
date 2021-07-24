<!DOCTYPE html>
<html lang="en">

<?php
include('adminpartials/session.php');
?>
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin | Add course</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

   

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img class="logo-abbr" src="images/logo-white.png" alt="">
                <img class="logo-compact" src="images/logo-text-white.png" alt="">
                <img class="brand-title" src="images/logo-text-white.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/education/pic1.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.php" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="adminpartials/logouthandler.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a href="index.php"  href="javascript:void()" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        

					<!--<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Professors</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-professors.php">All Professor</a></li>
                            <li><a href="add-professor.php">Add Professor</a></li>
                            <li><a href="edit-professor.php">Edit Professor</a></li>
                            <li><a href="professor-profile.php">Professor Profile</a></li>
                        </ul>
                    </li>-->
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Students</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-students.php">All Students</a></li>

                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Courses</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-courses.php">All Courses</a></li>
                            <li><a href="add-category.php">Add category</a></li>
                            <li><a href="add-courses.php">Add Courses</a></li>
                            <li><a href="edit-courses.php">Edit Courses</a></li>
                            <li><a href="about-courses.php">About Courses</a></li>
                        </ul>
                    </li>
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Courses</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Courses</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
                <?php
                include('adminpartials/conn.php');
                $sql="SELECT * FROM user_register";
                $results=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_assoc($results))
                echo "<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                                <form action=\"index.php\" method=\"post\">
                                    <div class=\"card shadow\">
                                        <div>
                                            <img src=".$row['course_img']." alt=\"Image1\" class=\"img-fluid card-img-top\">
                                        </div>
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">.$row['course_name'].</h5>
                                            <h6>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"far fa-star\"></i>
                                            </h6>
                                            <p class=\"card-text\">
                                                Some quick example text to build on the card.
                                            </p>
                                            <h5>
                                                <small><s class=\"text-secondary\">$519</s></small>
                                                <span class=\"price\">.$row['price'].</span>
                                            </h5>
                
                                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                                             <input type='hidden' name='product_id' value=''>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    ";
                    echo $element;
?>


					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="images/courses/pic1.jpg" alt="">
							<div class="card-body">
								<h4>Why is Early Education Essential?</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>12 Months</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Professor :</span><strong>Jack Ronan</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="about-courses.php" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="images/courses/pic2.jpg" alt="">
							<div class="card-body">
								<h4>The Shocking Revelation of Education.</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>12 Months</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Professor :</span><strong>Jimmy Morris</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="about-courses.php" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="images/courses/pic3.jpg" alt="">
							<div class="card-body">
								<h4>Five Things Nobody Told You About</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>12 Months</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Professor :</span><strong>Konne Backfield</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="about-courses.php" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="images/courses/pic4.jpg" alt="">
							<div class="card-body">
								<h4>Learn Python – Interactive Python Tutorial</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>12 Months</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Professor :</span><strong>Nashid Martines</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="about-courses.php" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="images/courses/pic5.jpg" alt="">
							<div class="card-body">
								<h4>Why is Early Education Essential?</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>12 Months</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Professor :</span><strong>Jack Ronan</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="about-courses.php" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="images/courses/pic6.jpg" alt="">
							<div class="card-body">
								<h4>The Shocking Revelation of Education.</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>12 Months</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Professor :</span><strong>Jimmy Morris</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="about-courses.php" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="images/courses/pic7.jpg" alt="">
							<div class="card-body">
								<h4>Five Things Nobody Told You About</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>12 Months</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Professor :</span><strong>Konne Backfield</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="about-courses.php" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="images/courses/pic8.jpg" alt="">
							<div class="card-body">
								<h4>Learn Python – Interactive Python Tutorial</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>12 Months</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Professor :</span><strong>Nashid Martines</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="about-courses.php" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/" target="_blank">DexignLab</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>	

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    
	
</body>

</html>