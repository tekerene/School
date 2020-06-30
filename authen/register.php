<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#register').attr("disabled", true);
});
</script>
<!------ Include the above in your HEAD tag ---------->
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

		<!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="../css/register.css">
        <link rel="stylesheet" href="../style.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Register</title>
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
                                        <input type="search" name="search" id="search" placeholder="Search">
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
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="register.php">
                    <?php include('errors.php'); ?>
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">User Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="<?php echo $username; ?>" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="<?php echo $email; ?>" required/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="password-1" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password_1" id="password-1"  placeholder="Enter your Password" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password_2" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password_2" id="password_2"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" name="reg_user" id="register" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register" >
				            <a href="login.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>
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

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>