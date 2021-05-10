<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
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
      <link rel="stylesheet" href="css/jquery.desoslide.css">
      <link href="css/fontawesome-all.css" rel="stylesheet">
	   <link href="css/style1.css" rel='stylesheet' type='text/css' />
      <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
      <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

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

   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner5.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Our Blog</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li><a href="#">Blog</a></li>
                  </ol>
               </div>
            </div>
            <!-- Col end -->
         </div>
         <!-- Row end -->
      </div>
      <!-- Container end -->
   </div>
	<section class="bottom-slider">
		<div class="course_demo1">
			<ul id="flexiselDemo1">
				<?php getbottomsliderposts("blogs");?>
			</ul>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row">
							<?php getblogridposts("blogs");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
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
					<!--/middle-->
               <section id="tw-analysis" class="tw-analysis-area">
      <div class="analysis-bg-pattern d-none d-md-inline-block">
         <img class="wow fadeInUp" src="images/check-seo/cloud.png" alt="">
         <img class="wow fadeInUp" src="images/check-seo/cloud2.png" alt="">
         <img class="wow fadeInUp" src="images/check-seo/announce.png" alt="">
         <img class="wow fadeInUp" src="images/check-seo/chart.png" alt="">
      </div>

      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8 text-center wow fadeInDown">

               
            </div>
           
         </div>
       
      </div>
 
   </section>
					<!--//middle-->
					<!---->
					<section class="main-content-w3layouts-agileits">
						<div class="container">
							<div class="row">
								<!--left-->
								<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
									<?php getonelatest("blogs");?>
								</div>
								<!--//left-->
								<!--right-->
								<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
									<div class="tech-btm">
										<h4>Popular Posts</h4>
										
										<?php geteditorschoice("editors_choice"); ?>
										
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
					<!-- desoslide-JavaScript -->
					<script src="js/jquery.desoslide.js"></script>
					<script>
						$('#demo1_thumbs').desoSlide({
							main: {
								container: '#demo1_main_image',
								cssClass: 'img-responsive'
							},
							effect: 'sideFade',
							caption: true
						});
					</script>

					<!-- requried-jsfiles-for owl -->
					<script>
						$(window).load(function () {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script>
						$(window).load(function () {
							$("#flexiselDemo2").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script src="js/jquery.flexisel.js"></script>
					<!-- //password-script -->
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
							
							var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									};
									

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