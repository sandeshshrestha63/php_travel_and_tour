<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 //function hideURLbar(){ window.scrollTo(0,1); } 
 
 
 </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php include('function.php'); ?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>Tourism which is ethical, fair and a positive experience for both travellers and the people and places they visit</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To ensure tourism always benefits local people by challenging bad practice and promoting better tourism</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Safety Information</h4>
			 <p>Vacation is a time to relax in safe surroundings.For emergency aid of any kind, call 911 from any phone... in your hotel, dial 9-911.</p>
             <div align="right"><a href="aboutus.php"><input type="button" value="Read More" name="sbmt" /></a></div> 
		 </div>
	 </div>
</div>
<!--/About-->
<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		 
		  </div>
	     
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/gallery_1.jpg"   alt=""  width="500px" /></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/gallery_2.jpg" height="213px"   alt="" /></a>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/gallery_6.jfif"  width="401px"   alt=""/></a>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/gallery_7.jpg"  alt=""/></a>
							 
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/gallery_3.jpg"  alt=""/></a>
							 
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/gallery_8.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/gallery_4.jpg"  alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/gallery_12.jpg" class="img-responsive" alt=""/></a>
							 
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
	});				
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	}
};
// Run the show!
		filterList.init();
	});	
</script>
<!--Gallery Script Ends-->	 
<!--/top-tours-->


<div class="tour-guides section" id="section-4" >
	  <div class="tour-guides-head text-center">
		  <h3>Advertisements</h3>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p>My Tour guides are expensive, so first decide what you want to do, whether it's a general tour of a city, a day of hiking, or visiting remote villages in a third-world country. Have a ball-park time allotment in mind, whether it's a half-day, a full-day, or a multi-day experience. Once you have chosen a guide, you'll probably refine your ideas based upon the guide's knowledge.</p>
		  </div>
	  </div>
	  <div class="container">
		<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		 <div id="owl-demo" class="owl-carousel">
         
         
         
         <?php
$selectQuery="select * from tbl_advertisment";
$result=mysqli_query($conn,$selectQuery);

$n=0;
while($data=mysqli_fetch_array($result))
{
	
	if($n%4==0)
	{
	?>
         
			  <div class="item text-center guide-sliders">
<?php }?>


	<div class="col-md-3 image-grid">
					 <img src="admin/uploads/<?php echo $data[3]; ?>"height="120px" width="170px">
					
					 <p><a href="#"><?php echo $data[1]; ?></a></p>
				 </div>
				<?php if($n%4==3)
				{?>
            </div>
   
            <?php
				}
			$n=$n+1;
}
?>
            		  </div>
		</div>
</div>
	


<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Plan Your Trip
Our travel experts can help you book now!</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">Travel Enterprises</h4>
						<p style="color:#000">NEED HELP BOOKING PACKAGE<br/>
                        For fantastic suggestions you may also call our travel expert</p>
						<h5 style="color:#000"><span class="img1"></span>(+977) 9841234567&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;(+977) 9841234568</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">plannepal.com&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;support[at]plannepal.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>Post Box: 13626, Thamel, Kathmandu, Nepal</h5>
                        <br/>
                       <img src="images/contac.jpg" />
                      </div>
				  <div class="col-md-8 contact">
                  
                  	<?php
if(isset($_POST["sbmt"]))
{
	echo"<pre>";
	print_r($_POST);
	echo "</pre>";
	$cn=makeconnection();
	$s="insert into tbl_contactus(Name,phone,Email,Message) values('" . $_POST["fullname"] ."','" . $_POST["phone"] ."','" . $_POST["email"] ."','" . $_POST["message"] ."')";
	if(mysqli_query($conn,$s))
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{
		echo "<script>alert('problem in saving the data');</script>".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="fullname" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="phone" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="message" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
					  <tr><td><button type="submit" name="sbmt">Send Message</button></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	       



<?php include('bottom.php'); ?>
</body>
</html>


