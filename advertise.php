<?php 
  include('includes/header.php');
  if(!isset($_SESSION["id_number"]))
  {
  	header('location:signin.php');
  }else
  {
  	 //if(isset($_SESSION["last_login_timestamp"]))
  	if((time() - $_SESSION["last_login_timestamp"]) > 900)
  	{
       header("location:logout.php");
  	}
  }

 $check = $db->query("SELECT * FROM car_data WHERE id_number = '".$_SESSION["id_number"]."' AND contact_number = '".$_SESSION["contact_number"]."' ");
 $row = $check->fetch();

   $date_time =$row["date_time"];

     //Separating date and time
     date_default_timezone_get('Africa/Johannesburg');
     list($date, $time) = explode(' ', $date_time);
     list($year, $month, $day) = explode('-', $date);
     list($hour, $minutes, $seconds) = explode(":", $time);
     // Making the time
     $unit_timestamp = mktime($hour, $minutes, $seconds, $month, $day, $year);
    //date_default_timezone_get('Africa/Johannesburg');
    $differentBetweenCurrentAndTimeStamp = time() - $unit_timestamp;
    $periodStrings = ["sec", "min", "hr", "day", "week","month", "year", "decate"];
    $periodNumber = ["60", "60", "24", "7", "4.35", "12", "10"];

    for($iterator = 0;$differentBetweenCurrentAndTimeStamp >=$periodNumber[$iterator]; $iterator++)
       $differentBetweenCurrentAndTimeStamp  /= $periodNumber[$iterator];
       $differentBetweenCurrentAndTimeStamp = round($differentBetweenCurrentAndTimeStamp);

       if($differentBetweenCurrentAndTimeStamp != 1) $periodStrings[$iterator].='s';
       $myoutput = "$differentBetweenCurrentAndTimeStamp $periodStrings[$iterator]".' '.'ago';
       $tm = time();
      ?>
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/advertise.css">
	
	<style type="text/css">
		#user_image
		{
			margin-left: -10px;
			z-index: 9999;
		}
	</style>
</head>
<body class="main_body">
	<div class="container-fluid main_banner">
		<div class="right_div">
			<p class="animated shake advetise_title" id="advetise_title">Advertise Here!!</p>
		</div>
	</div>
	<div class="container">
		<div class="col-md-8">
			<div class="user_profile">
				<div class="user_profile_details">
				<div class="row ">
					<div class="col-md-4">
						<a class="thumbnail"><img src="img/user.jpg" class="user_image"></a>
					</div>
					<div class="col-md-8">
						<br>
						<span style="font-size: 17px;"><b><i class="icon ion-ios-person"> </i><?= ucwords($_SESSION["name"])?> &nbsp;<?= ucwords($_SESSION["surname"])?></b></span><br><br>
						<span style="font-size: 15px;color:#3a3a3a; "><b>Id No:</b> <?= ucwords($_SESSION["id_number"])?><br>
							<b>Contact No :</b> <?= $_SESSION["contact_number"]?></span><br>
						<span style="font-size: 14px;"><small>Posted <i class="icon ion-ios-clock-outline"></i> <?= $myoutput?> | <i class="icon ion-thumbsup"></i> 20 Likes | <i class="icon ion-eye"></i> 7 Views</small></span><br>
						<p>---------------------------------------------</p>
						<!-- thumbsup <p class="my_auto_cars" id="my_auto_cars"><i class="icon calendar ion-ios-bell"></i></span> &nbsp; &nbsp;	<span><i class="icon ion-speakerphone"></i></span>	 &nbsp; &nbsp; <span><i class="icon ion-chatbubbles"></i> &nbsp; &nbsp; <span><i class="icon ion-ios-email"></i></span></p>-->
						<p style="font-size: 14px;margin-top: -12px;"><small>You became member on 
						<i class="icon ion-ios-calendar-outline"></i> 20 / Apr / 2018 | 
						<i class="icon ion-ios-clock-outline"></i> <?= $myoutput?></small></p>			
					</div>
					
				</div>
			   </div>
			</div>

			
		</div>
		<div class="col-md-4">
	       <div class="about_autoCars">
			<div class="about_autoCars_head"></div>
			  <p class="get_ahead">Get ahead with Premium Advert !!</p>
			<div class="about_autocars_views_message">
			  <span ><i class="icon ion-ios-eye"></i> &nbsp;<i>Views</i> &nbsp;<span class="label label-success notifications">10</span></span><br>
			  <span ><i class="icon ion-chatbubbles"></i> &nbsp;<i>Comments</i> &nbsp;<span class="label label-info notifications" >8</span></span><br>
			  <span ><i class="icon ion-ios-bell"></i> &nbsp;<i>Notifications</i> <span class="label label-warning notifications">4</span></span><br>
			  <span ><i class="icon ion-speakerphone"></i> &nbsp;<i>Advertisements</i> <span class="label label-danger notifications">0</span></span><br><br>
			</div>
		  </div>
	</div>
   </div>

	<div class="container">
		<div class="col-md-8">
			<div class="vehicle_all_details">
				<div class="">
				   <p style="font-size: 20px;color:#c6c8c7;">&nbsp;<i class="icon ion-model-s "></i> <b>Vehicle Details</b></p>
				   <p class="car_detail_even"> &nbsp; <b>Name :</b>  BMW i8 2018</p>
				   <p class="car_detail_odd"> &nbsp; <b>Number Plate  :</b> ND 215-632</p>
				   <p class="car_detail_even"> &nbsp; <b>Color :</b> Gray</p>
				   <p class="car_detail_odd"> &nbsp; <b>Transmition :</b> Mannual8</p>
				   <p class="car_detail_even"> &nbsp; <b>Price :</b> R 25 000</p>
				   <p class="car_detail_odd"> &nbsp; <b>No Seats :</b> 4</p>
				   <p class="car_detail_even"> &nbsp; <b>Fuel Type :</b> Diesel</p>
				   <br>
				    <form name="myForm">
				    	<label>Additional Info</label>
				    	<textarea name="additional_textarea" id="additional_textarea" class="form-control additional_textarea" cols="4" rows="3" placeholder="Additional Information (Optional)"></textarea>
				    	<button class="btn btn-dafault btn_additional" id="btn_additional">SUBMIT</button>
				    </form> 
				   <br>	
			   </div>
			</div>

		</div>

		<div class="col-md-4">
	       <div class="about_autoCars_2">
			<div class="about_autoCars_head_2"></div>
			  <p class="get_ahead">UPLOAD IMAGES</p>
			<div class="about_autocars_views_message">
			   <div class="input-file-container">  
                  <input class="input-file" id="my-file" type="file" multiple="">
                  <label tabindex="0" for="my-file" class="input-file-trigger"> <i class="icon ion-images"></i> Select up to 3 images</label>
                </div>
                <p class="file-return"></p>
               <button type="submit" id="upload_images" name="upload_images" class="btn btn-success btn-block">UPLOAD</button>
			</div>
			<br><br>
			<div class="about_autoCars_footer"></div>
		  </div>
		  <br>
        <div style="" id="small_slide">
        	<div class="cycle-slideshow">
		        <span class="cycle-pager"></span>
			    <img src="img/advert/slide1.jpg" alt="my used car to be sold" width="100%">
			    <img src="img/advert/slide1.jpg" alt="second car used as well" width="100%">
			    <img src="img/advert/slide3.jpg" alt="third used car to be sold" width="100%">
			    <img src="img/advert/slide4.jpg" alt="third used car to be sold" width="100%">
		    </div>
        </div>
	</div>
   </div>
   <br><br>
     <div class="home_banner">
      <div class="container"> 
      <div class="row">
        <div class="col-md-6">
          <div class="wow fadeInLeft slider_text" data-wow-offset="0" data-wow-delay="1.0s">
              <p>Find a great </p>
            </div>
             <div class="wow fadeInLeft slider_text" data-wow-offset="0" data-wow-delay="2.0s">
              <p>Do you still want a car ?</p>
            </div>
            <div class="wow fadeInLeft slider_text" data-wow-offset="0" data-wow-delay="4.0s">
              <p>Can we help you find a used car at a great cost ?</p>
            </div>
             <div class="wow fadeInLeft slider_text" data-wow-offset="0" data-wow-delay="5.0s">
              <p>Our displays are visted by more that 12 000 people...</p>
            </div>
          </div>
        <div class="col-md-6">
           <div class="car_display">
          <a class="thumbnail"><img src="img/car_disp1.png"></a>
        </div>
      </div>
    </div>
  </div>
  </div>


 <br><br>
<?php include('includes/footer.php')?>	
</body>
</html>
<script type="text/javascript" src="js/mySilder.js"></script>
<script type="text/javascript">
document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
</script>