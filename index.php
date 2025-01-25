

<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script> 
<div class="content">
	 <div class="container">  
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			  <li><img src="images\dj1.jpg" alt="">
			
				<div class="caption">
					<h1>Image1</h1>
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images\dj2.jpg" alt="">
				<div class="caption">
					<h1>Image2</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>	      
			  <li><img src="images\dj3.jpg" alt="">
				<div class="caption">
					<h1>Image3</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images\dj4.jpg" alt="">
				<div class="caption">
					<h1>Image1</h1>
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images\dj5.jpg" alt="">
				<div class="caption">
					<h1>Image2</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>	      
			  <li><img src="images\dj6.jpg" alt="">
				<div class="caption">
					<h1>Image3</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images\dj7.jpg" alt="">
				<div class="caption">
					<h1>Image2</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>	      
			  <li><img src="images\dj8.jpg" alt="">
				<div class="caption">
					<h1>Image3</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<ul id="slider3-pager">
			  <li><a href="#"><img src="images\dj1.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images\dj2.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images\dj3.jpg" alt=""></a></li>
			   <li><a href="#"><img src="images\dj4.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images\dj5.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images\dj6.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images\dj7.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images\dj8.jpg" alt=""></a></li>
			</ul>   
				<div class="clearfix"></div>
		  </div>
	 </div>
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>