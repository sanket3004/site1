<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from blogs where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM page_hits WHERE page='".$page."'";$feedback=mysqli_query($GLOBALS["___mysqli_ston"],$count) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$roo=mysqli_fetch_assoc($feedback);?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php echo $row['title']; ?>|<?php getwebname("titles");?></title>
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
	<link rel="stylesheet" href="css/single.css">
	<link href="css/style1.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<!--additional javascripts will be placed here-->
	<?php getjavascripts("links"); ?>
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
	<!--//header-->
	<!--update database on page views-->
	<?php  require_once('adminstats/conn.php');
	require_once('counter.php');
	$pn=updateCounter(''.$row['title'].''); // Updates page hits
	echo $pn;
	updateInfo(); // Updates hit info ?>
   <div id="banner-area" class="banner-area" style="background-image:url(images/slider/slider-banner-2.jpg)">
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
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Blog</li>
	</ol>

	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="#">
									<img src="blogadmin/images/<?php echo $row['photo']; ?>" class="img-fluid" alt="image not available" style="width:800px;height:400px">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i><?php echo $row['date']; ?></a>
										</li>
										<li class="mx-2">
											<a href="#">
												<i class="far fa-user"></i><?php echo $row['author']; ?></a>
											</li>
											<li>
												<a href="#">
													<i class="far fa-tags"></i> <?php echo $row['tags']; ?></a>
												</li>
												<li>
													<a href="#">
														<i class="far fa-eye fa-x2"></i> <?php echo $roo['count']; ?></a>
													</li>

												</ul>
											</div>
										</div>

										<h3>
											<a href="single.html"><?php echo $row['title']; ?></a>
										</h3>
										<!--sharing script-->
										<?php getsharingscript("links"); ?>
										<?php echo $row['content']; ?>
									</div>
									<!--comments script will go here-->
									<?php getcommentsscript("links"); ?>
								</div>

								<!--//left-->
								<!--right-->
								<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
									<div class="right-blog-info text-left">
										<div class="tech-btm">
											<h4>Popular Posts</h4>
											<?php geteditorschoice("editors_choice");?>
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