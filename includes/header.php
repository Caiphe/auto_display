<?php
   include('includes/db.php');
   include('includes/links.php');
   
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(window).on('scroll',function(){
          if($(window).scrollTop()){
          	$('nav').addClass('black_nav');
          }else{
          	$('nav').removeClass('black_nav');
          }
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.toggle').click(function(){
				$('#myUl').toggleClass('active');
			})
		})
	</script>
	<link rel="apple-touch-icon" sizes="57x57" href="flav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="flav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="flav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="flav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="flav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="flav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="flav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="flav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="flav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="flav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="flav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="flav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="flav/favicon-16x16.png">
	<link rel="manifest" href="flav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="flav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<style type="text/css">
	 .profile_a
	 {
	 	border-top-left-radius: 7px;
	 	border-top-right-radius: 7px;
	 }
	 #dropdown_content
	 {
	 	border-top-left-radius: 7px;
	 	border-top-right-radius: 7px;
	 }
	 #link_advert{
	 	transition: .5s;
	 }
	 #link_advert:hover
	 {
       margin-left: 7px;
	 }
	 #signinBtn{
	 }
	 #down_chev{
	 	font-size: 11px;
	 	transition: 0.5s;
	 }
	 #up_chev{
	 	font-size: 11px;
	 	display: none;
	 	transition: 0.5s;
	 }
	 #news_down_chev{
	 	font-size: 11px;
	 }
	 #news_up_chev{
	 	font-size: 11px;display: none;
	 }
	</style>
</head>
<body>

	<nav>
		<header class="main_header">
			<a href="#" class="logo"><img src="img/log1.png" /></a>
			<a class="toggle">Menu</a>
			<ul class="" id="myUl">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="usedVehicle.php">Our Cars</a></li>
				<!--<li><a href="branches.php">Our Branches </a></li>-->
				<li><a href="onSale.php" class="dropbtn1">News & Reviews <i class="ionicon ion-chevron-down" id="news_down_chev"></i><i class="ionicon ion-chevron-up" id="news_up_chev"></i></a></li>
				<!--DROP DOWN LIST (Car Reviews, Report, Lifestyle,Videos)-->
				<li><a href="advertise.php">Advertise</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<?php 
		       if(isset($_SESSION["id_number"]))
		        {
		          ?>
		            <div class="dropdown">
		              <button class="dropbtn"><i class="icon ion-ios-contact-outline"></i> Hi <?= ucwords($_SESSION["name"])  ?> <i class="ionicon ion-chevron-down animated flipInX" id="down_chev"></i>
		              	<i class="ionicon ion-chevron-up animated flipInX" id="up_chev"></i></button>
		              <div class="dropdown-content animated flipInX" id="dropdown_content">
		                <a href="advertise.php" class="profile_a"><span id="link_advert"><i class="icon ion-ios-contact-outline" id="profile_link"></i> <b>Profile</b></span></a>
		                <a href="notifications.php"><span id="link_advert"><i class="icon ion-ios-bell"></i> 
		                 <b> News </b><span class="label label-danger notifications" id="notifications" >10</span></span></a>
		                 
		                <a href="logout.php" class="logout"><span id="link_advert"><i class="icon ion-log-out" ></i> <b>Logout</b></span> </a>
		              </div>
		            </div>
		          <?php
                 }else
                 {
                 	?>
                 	<li><a href="signin.php"  class="myactive" id="signinBtn"><i class="icon ion-unlocked"></i> Signin </a></li>
                 	<?php
                 }
				?>
				
			</ul>
		</header>
	</nav>

</body>
</html> 
<script type="text/javascript"> 
	$(document).ready(function(){
		$(".dropbtn").hover(function(){
			$("#down_chev").hide();
			$("#up_chev").fadeIn().css('top', e.pageY + "px").css('left', e.pageX + "px");
			
		},function(e){
		    $("#up_chev").hide()
		    $("#down_chev").show().css('top', e.pageY + "px").css('left', e.pageX + "px");
	    });

	    /*NEWS REVIEWS*/
	});
</script>
<script type="text/javascript"></script>