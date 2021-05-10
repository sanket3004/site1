<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?>| About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/style1.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>

<body>
	<!--Header-->
	<header>
      <div class="tw-head">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand tw-nav-brand" href="index.php">
                  <img src="images/logo/logo.png" alt="seobin">
               </a>
              
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="index.php">
                           Home
                        </a>
                        
                       
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="about-us.html">
                           About Us
                        </a>
                      
                     </li>
                     
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Services
                           <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu tw-dropdown-menu">
                           <li><a href="1.WEB DESIGN AND DEVELOPMENT.html">Web Design and Developement</a></li>
                           <li><a href="2.SEO.html">SEO</a></li>
                           <li><a href="3.PPC.html">Pay Per Click</a></li>
                           <li><a href="4.SOCIAL MEDIA MARKETING (SMM).html">Social Media Marketing</a></li>
                           <li><a href="5.CONTENT MARKETING.html">Content Marketing </a></li>
                           <li><a href="6.GRAPHIC DESIGNING.html">Graphic Designing </a></li>
                           <li><a href="7.DIGITAL MARKETING.html">Digital Marketing</a></li>



                           
                        </ul>
                        
                     </li>
                     
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="portfolio.html">
                           Portfolio
                        </a>
                     </li>
                   
                     <li class="nav-item dropdown active">
                        <a class="nav-link" href="blog.php">
                           Blog
                        </a>
                     
                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link" href="team.html">
                           Our Team
                        </a>
                        
                     </li>
                    
                     <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                  </ul>
                  
               </div>
         
               <div class="tw-off-search">
                  <div class="tw-search">
                     <i class="fa fa-search"></i>
                  </div>
                  <div class="tw-menu-bar">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
              
            </nav>
           
         </div>
         
      </div>
     
</header>
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">About</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">About</h3>
			<div class="row inner-sec">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">

						<div class="blog_info_left_grid">
							<a href="single.html">
								<img src="images/b5.jpg" class="img-fluid" alt="">
							</a>
						</div>
						<h3>
							<?php getwebname("titles"); echo"|"; gettagline("titles");?>
						</h3>
						<p><?php getdetaileddescription("titles");?></p>
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<h4><strong>Categories</strong></h4>
						<ul class="list-group single">
							<?php countcategories();?>
						</ul>
						<div class="tech-btm widget_social">
							<h4>Stay Connected</h4>
							<ul>

								<li>
									<a class="twitter" href="<?php getlinks("links","twitter");?>">
										<i class="fab fa-twitter"></i>
										<span class="count"></span> Twitter</a>
									</li>
									<li>
										<a class="facebook" href="<?php getlinks("links","facebook");?>">
											<i class="fab fa-facebook-f"></i>
											<span class="count"></span> Facebook</a>
										</li>
										<li>
											<a class="dribble" href="<?php getlinks("links","dribble");?>">
												<i class="fab fa-dribbble"></i>

												<span class="count"></span> Dribble</a>
											</li>
											<li>
												<a class="pin" href="<?php getlinks("links","pinterest");?>">
													<i class="fab fa-pinterest"></i>
													<span class="count"></span> Pinterest</a>
												</li>

											</ul>
										</div>
										<div class="tech-btm">
											<h4>Older Posts</h4>
											<?php getolderposts("blogs");?>
											<!--olderpostsendhere-->
										</div>
									</div>
								</aside>
								<!--//right-->
							</div>
						</div>
					</section>
					<!--//main-->

					<!--footer-->
					<?php include("footer.php");?>
					<!---->
					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!--/ start-smoth-scrolling -->
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<!--// end-smoth-scrolling -->

					<script>
						$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>