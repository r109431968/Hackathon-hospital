
<!DOCTYPE html>
<html>

<head>
	<title>Swasth Rajasthan</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<?php include 'header.php';?>
	<!-- banner -->
	<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/cr1.jpg" alt="Los Angeles" style="width:100,height:100;">
      </div>

      <div class="item">
        <img src="images/cr2.jpg" alt="Chicago" style="width:100,height:100;">
      </div>
    
      <div class="item">
        <img src="images/nd2.jpg" alt="New york" style="width:100,height:100;">
      </div>
      <div class="item">
        <img src="images/4.jpg" alt="New york" style="width:100,height:100;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<!--//banner -->
	<!-- about -->
<style>
.alert {
    padding: 20px;
    background-color: lightblue;;
    color: black;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>

	<center><div class="alert">
		<img src="images/ambu.png" class="img-circle" style="width: 100px; height: auto;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 


  <?php 
               
     mysql_connect("localhost","root","");
     mysql_select_db("admin");

$que="select * from ambu ";
$run=mysql_query($que);

while($row=mysql_fetch_array($run)){
    
	$ambu = $row['ambu'];
	$ola = $row['ola'];
	


?>


 <h4> <strong><?php echo "$ambu";?></strong></h4>
 <a href="https://www.olacabs.com/" target="_blank"><h4 style="padding-top: 10px;"><strong>  <?php echo "$ola";?></strong></h4></a></div>
<?php }?>
</div></center>
	<div class="agile-about w3ls-section">
	<!-- about-bottom -->
	<div class="agileits-about-btm">
	<h3 class="heading-agileinfo">Welcome To Our Hospital!<span>We offer extensive medical procedures to outbound and inbound patients.</span></h3>
		<div class="container">
			<div class="w3-flex">
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid1">
				<h4 class="agileinfo-head">For Adults</h4>
				<p>You can call our highly experienced clinical team if your child, teenager or family is going through difficulties.</p>
				<h5>ANXIETY </h5>
				<h5>DEPRESSION</h5>
				<h5>ADHD </h5>
				<h5>BIPOLAR DISORDER</h5>
				<h5>A – Z OF ISSUES</h5>
			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid2">
				
				<h4 class="agileinfo-head">For Children</h4>
				<p>You can call our highly experienced clinical team if your child, teenager or family is going through difficulties.</p>
				<h5>ADHD </h5>
				<h5>ASPERGERS AND AUTISM</h5>
				<h5>DEPRESSION</h5>
				<h5>ANXIETY DISORDERS</h5>
				<h5>A – Z OF ISSUES</h5>
			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid3">
				
				<h4 class="agileinfo-head">For Business</h4>
				<p>You can call our highly experienced clinical team if your child, teenager or family is going through difficulties.</p>
				<h5>MEDICO LEGAL REPORTS </h5>
				<h5>OCCUPATIONAL HEALTH</h5>
				<h5>LOCUMS AND STAFFING</h5>
				<h5>NEUROPSYCHOLOGICAL ASSESSMENTS</h5>
				<h5>MENTAL CAPACITY ASSESSMENTS</h5>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about-bottom -->
</div>
<!-- emergency -->
<div class="emergency_cases_w3ls">
<div class="emergency_cases_bt">
	<div class="container">
	<div class="emergency_cases_top">
		<div class="col-md-6 emergency_cases_w3ls_left">
			<h4>Opening Hours</h4>
			<h6>Monday - Friday&nbsp;<span class="eme">8.00 - 18.00</span></h6>
			<h6>Saturday&nbsp;<span class="eme">9.00 - 17.00</span></h6>
			<h6>Sunday&nbsp;<span class="eme">9.00 - 17.00</span></h6>
		</div>
		<div class="col-md-6 emergency_cases_w3ls_right">
			<h4>Emergency Cases</h4>
			<h5><i class="fa fa-phone" aria-hidden="true"></i>1230456789</h5>
			<p>Your treatment plan is designed for steady progress, with every phase promptly implemented.</p>
		</div>
		
		<div class="clearfix"></div>
		</div>
	</div>
	</div>
</div>
<!-- //emergency -->
<!-- services -->
<div class="services">
<div class="container">
		<h3 class="heading-agileinfo">Therapies & Treatments<span>We offer extensive medical procedures to outbound and inbound patients.</span></h3>
	
		<div class="services-top-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-heartbeat" aria-hidden="true"></i>
					<h4>Anxiety</h4>
					<p>A mental health disorder characterised by feelings of worry, anxiety or fear that are strong enough to interfere with one's daily activities. </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-user-md" aria-hidden="true"></i>
					<h4>Executive Coaching</h4>
					<p>What Executive Coaching Is. An executive coach is a qualified professional that works with individuals (usually executives, but often high potential employees) to help them gain self-awareness. </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
					<h4>Depression</h4>
					<p>A mental health disorder characterised by persistently depressed mood or loss of interest in activities, causing significant impairment in daily life. </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-medkit" aria-hidden="true"></i>
					<h4>Diabetes</h4>
					<p>diabetes, is a group of metabolic disorders in which there are high blood sugar levels over a prolonged period. </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-hospital-o" aria-hidden="true"></i>
					<h4>Stress Management</h4>
					<p>Stress management is a wide spectrum of techniques and psychotherapies aimed at controlling a person's level of stress, especially chronic stress. </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-ambulance" aria-hidden="true"></i>
					<h4>Support Group</h4>
					<p>In a support group, members provide each other with various types of help, usually nonprofessional and nonmaterial, for a particular shared, usually burdensome, characteristic. empowered and for a sense of community. </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->
<!-- Clients -->
<div class="tesimonials">
<div class="tesimonials_tp">
		<div class="container">
			<div class="tittle_head">
				<h3 class="heading-agileinfo te">What Clients Say<span class="te">We offer extensive medical procedures to outbound and inbound patients.</span></h3>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<div class="test_grid_sec">
					<div class="col-md-offset-2 col-md-8">
						<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators two">
								<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#quote-carousel" data-slide-to="1"></li>
								<li data-target="#quote-carousel" data-slide-to="2"></li>
							</ol>

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">

								<!-- Quote 1 -->
								<div class="item active">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/ts1.jpg" alt=" " class="img-responsive" />

											</div>
											<div class="col-sm-9 test_img_info">
												<p>Good step and good treatment.</p>
												<h6>NEHA DEHERIYA</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 2 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/ts2.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Good step and good treatment.</p>
												<h6>ANANT SAH</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 3 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/ts3.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Good step and good treatment.</p>
												<h6>ROHAN</h6>
											</div>
										</div>
									</blockquote>
								</div>
							</div>

							<!-- Carousel Buttons Next/Prev -->
							<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
							<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Clients -->
<!--/icons-->
	<div class="banner-bottom">
		<div class="container">
			<div class="tittle_head_w3layouts">
				<h3 class="heading-agileinfo">Case Studies<span>We offer extensive medical procedures to outbound and inbound patients.</span></h3>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<div class="col-md-4 grid_info">
					<div class="icon_info">
						<img src="images/g4.jpg" alt=" " class="img-responsive">
						<h5>Medical laboratory</h5>
						<p>These include bacteriology, virology, parasitology, immunology, and mycology. Clinical Chemistry: This area typically includes automated analysis of blood specimens, enzymology, toxicology and endocrinology..</p>
						<a href="#" class="read-agileits" data-toggle="modal" data-target="#myModal">Read More</a>
					</div>
				</div>
				<div class="col-md-4 grid_info">
					<div class="icon_info">
						<img src="images/g7.jpg" alt=" " class="img-responsive">
						<h5>Injury Prevention</h5>
						<p>Injury Prevention is a bimonthly peer-reviewed medical journal covering the prevention of injuries in all age groups, including child and adolescent injuries..</p>
						<a href="#" class="read-agileits" data-toggle="modal" data-target="#myModal">Read More</a>
					</div>
				</div>
				<div class="col-md-4 grid_info">
					<div class="icon_info">
						<img src="images/g6.jpg" alt=" " class="img-responsive">
						<h5>Catheterization Lab</h5>
						<p>A catheterization laboratory or cath lab is an examination room in a hospital or clinic with diagnostic imaging equipment used to visualize the arteries of the heart and the chambers of the heart and treat any stenosis or abnormality found.</p>
						<a href="#" class="read-agileits" data-toggle="modal" data-target="#myModal">Read More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//icons-->

	<!-- footer -->
	<?php include 'footer.php';?>

	<!-- //footer -->
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					New Clinic
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g7.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>