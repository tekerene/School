<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<header class="header-area">

<!-- Top Header Area -->
<div class="top-header-area d-flex justify-content-between align-items-center">
	<!-- Contact Info -->
	<div class="contact-info">
		<a href="#"><span>Phone:</span> +237 697 303 266</a>
		<a href="#"><span>Email:</span> info@sevicti.com</a>
	</div>
	<!-- Follow Us -->
	<div class="follow-us">
		<span>Follow us</span>
		<a href="https://m.facebook.com/pages/category/school/See-Vision-Computer-Training-Institute-SEVICTI-270049650516785/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="https://www.instagram.com/sevicti/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<a href="https://www.twitter.com/sevicti/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div>
</div>

<!-- Navbar Area -->
<div class="clever-main-menu">
	<div class="classy-nav-container breakpoint-off">
		<!-- Menu -->
		<nav class="classy-navbar justify-content-between" id="cleverNav">

			<!-- Logo -->
			<div class="img-logo">
			<a class="text-light nav-brand" href="../index.html">SEVICTI<img src="" alt=""></a>
			</div>
			<!-- Navbar Toggler -->
			<div class="classy-navbar-toggler">
				<span class="navbarToggler"><span></span><span></span><span></span></span>
			</div>

			<!-- Menu -->
			<div class="classy-menu">

				<!-- Close Button -->
				<div class="classycloseIcon">
					<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
				</div>

				<!-- Nav Start -->
				<div class="classynav">
					<ul>
						<li><a href="../index.html">Home</a></li>
						<li><a href="#">Pages</a>
							<ul class="dropdown">
								<li><a href="../index.html">Home</a></li>
								<li><a href="../courses.html">Courses</a></li>
								<li><a href="../single-course.html">Single Courses</a></li>
								<li><a href="../instructors.html">Instructors</a></li>
								<li><a href="../blog.html">Blog</a></li>
								<li><a href="../blog-details.html">Single Blog</a></li>
								<li><a href="../regular-page.html">Regular Page</a></li>
								<li><a href="../contact.html">Contact</a></li>
							</ul>
						</li>
						<li><a href="../courses.html">Courses</a></li>
						<li><a href="../instructors.html">Instructors</a></li>
						<li><a href="../blog.html">Blog</a></li>
						<li><a href="../contact.html">Contact</a></li>
					</ul>

					<!-- Search Button -->
					<div class="search-area">
						<form action="#" method="post">
							<input type="search" name="search" id="search" placeholder="Search" req>
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					</div>

					<!-- Register / Login -->
					<div class="register-login-area">
						<a href="#" id="register" class="btn">Register</a>
						<a href="#" id="register" class="btn active">Login</a>
					</div>

				</div>
				<!-- Nav End -->
			</div>
		</nav>
	</div>
</div>
</header>
<!-- ##### Header Area End ##### -->
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
      <!-- ##### Footer Area Start ##### -->
	  <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html">Sevicti<img src="" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +237 678 303 0266</a>
                <a href="#"><span>Email:</span> info@sevicti.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="https://m.facebook.com/pages/category/school/See-Vision-Computer-Training-Institute-SEVICTI-270049650516785/"><i
                        class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/sevicti/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.twitter.com/sevicti/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
</body>
</html>