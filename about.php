<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System || About Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<div class="about content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">About</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 <h2><?php  echo htmlentities($row->PageTitle);?></h2>
		 <div class="about-main">
			 <div class="col-md-6 abt-pic">
				 <img src="images\opreter .jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-6 abt-pic-info">
				 
				 <p style="color:white">RKC DJ Our mission is to empower event organizers with the tools they need to create the perfect musical ambiance for their occasions. We aim to provide DJs with a platform to showcase their talent, connect with clients, and make a lasting impact through their performances.</p>
				
			 </div>
			 <?php $cnt=$cnt+1;}} ?>
			 <div class="clearfix"></div>
		 </div>
	
		 <div class="latest">
			 <h3>LATEST PHOTOS</h3>		
			 <div class="pic start">
				 <a class="fancybox" href="images\dj1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images\dj1.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">RKC DJ</a></h4>
				 <p>Suspendisse posuere enim eu ante scelerisque, vehicula turpis.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images\dj3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images\dj3.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">RKC DJ</a></h4>
				 <p>Suspendisse posuere enim eu ante scelerisque, vehicula turpis.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images\dj5.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images\dj5.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">RKC DJ</a></h4>
				 <p>Suspendisse posuere enim eu ante scelerisque, vehicula turpis.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images\dj2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images\dj2.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">RKC DJ</a></h4>
				 <p>Suspendisse posuere enim eu ante scelerisque, vehicula turpis.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images\dj8.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images\dj8.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">RKC DJ</a></h4>
				 <p>Suspendisse posuere enim eu ante scelerisque, vehicula turpis.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>