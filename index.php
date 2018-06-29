<?php 
  include('includes/header.php');
  // ezechieltas2018@yahoo.com
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home_page</title>
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anton|Francois+One" rel="stylesheet">
	<style type="text/css">
  #search_error{
    margin-top: 5px;
    background-color:#880b19;
    color: white;
    text-align: center; 
    padding: 7px;
    width: 40%;
    font-size: 17px;
    margin: 1px auto;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.4), 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    display: none;

  }
	</style>
     <script typecar_id DESCript">
   $(document).ready(function(){
      $("#make_name").on('change',function(){
        var make_name = $(this).val();
        if(make_name) {
         $.ajax({
            url:"get_model.php",
            type:"POST",
            data :"make_name="+make_name,
            success:function(data)
            {
              $("#model_name").html(data);
            }
         });
        }else{
          $('#model_name').html('<option value="">No make found for this model</option>');
        }
      });
   });
 </script>
</head>
<body class="main_body">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:12px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/bb1.jpg" alt="car_slide1" style="width:100%;">
        <div class="carousel-caption">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="1.0s">                
                <h2 style="color: #fff;">Welcome To Auto Display</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">                
                <p>Where you can find your dream car !!!</p>
              </div>
              <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="1.3s">                
                <form class="form-inline">
                  <div class="form-group">
                    <a type="livedemo" href="advertise.php" name="Live Demo" class="btn btn-warning btn-lg first_a" id="first_a"><i class="ionicon ion-speakerphone"></i> Advertise</a>
                  </div>
                </form>
              </div>
            </div>
      </div>
      <div class="item">
        <img src="img/bb2.jpg" alt="car_slide2" style="width:100%;">
        <div class="carousel-caption">
              <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="1.0s">                
                <h2 style="color: #fff;">The World of Cars !!!</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">                
                <p>Advertise your car with us</p>
              </div>
              <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.3s">                
                <form class="form-inline">
                  <div class="form-group">
                    <a type="livedemo" href="advertise.php" name="Live Demo" class="btn btn-warning btn-lg first_a" id="first_a"><i class="ionicon ion-speakerphone"></i> Advertise</a>
                  </div>
                </form>
              </div>
            </div>
      </div>
      <div class="item">
        <img src="img/bb3.jpg" alt="car_slide3" style="width:100%;">
        <div class="carousel-caption">
              <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.0s">                
                <h2 style="color: #fff;">Sell You Car to </h2>
              </div>
              <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="1.3s">                
                <p>Over 35,000 active and potential buyers !!!</p>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">                
                <form class="form-inline">
                  <a type="livedemo" href="advertise.php" name="Live Demo" class="btn btn-warning btn-lg first_a" id="first_a"><i class="ionicon ion-speakerphone"></i> Advertise</a>
                </form>
              </div>
            </div>
      </div>
      
      <div class="item">
        <img src="img/bb4.jpg" alt="car_slide3" style="width:100%;">
        <div class="carousel-caption">
              <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.0s">                
                <h2 style="color: #fff;">We display </h2>
              </div>
              <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="1.3s">                
                <p>Over 12,000 cars every sunday !!!</p>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">                
                <form class="form-inline">
                  <a type="livedemo" href="advertise.php" name="Live Demo" class="btn btn-warning btn-lg first_a" id="first_a"><i class="ionicon ion-speakerphone"></i> Advertise</a>
                </form>
              </div>
            </div>
      </div>

      <div class="item">
        <img src="img/bb7.jpg" alt="car_slide3" style="width:100%;">
        <div class="carousel-caption">
              <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.0s">                
                <h2 style="color: #fff;">Find Your dream Car</h2>
              </div>
              <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="1.3s">                
                <p>Search in Our Directory</p>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">                
                <form class="form-inline">
                  <a type="livedemo" href="advertise.php" name="Live Demo" class="btn btn-warning btn-lg first_a" id="first_a"><i class="ionicon ion-speakerphone"></i> Advertise</a>
                </form>
              </div>
            </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2 class="sunday_display">
      <span style="color:#E90E64;"><b>Over 12 000 Used Cars </span> displayed Every Sunday </b></h2><br>
    <div class="search_cars_form">
      <div class="before_search_form">
       <div class="car_search">
          <div class="form-group">
             <div class="row">
                <div class="col-md-10">
                   <div class="row">
                     <div class="col-md-3">
                        <select class="form-control" name="make_name" id="make_name" required="required">
                           <option value="">Select Make (e.g : Ford)</option>           
                             <?php
                              $getMakes = $db->query('SELECT * FROM make ORDER BY make_name ASC ');
                              while($result = $getMakes->fetch())
                              {
                                ?>
                                 <option value="<?php echo $result["make_name"]?>"><?php echo $result['make_name'] ?></option>
                                <?
                              }
                             ?>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <select class="form-control" id="model_name" class="model_name" name="model_name">
                           <option value="#">Select Model</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                       <select class="form-control" name="min_price" id="min_price" required="required">
                        <option value="">Select Min Price</option>
                          <?php
                            $getPrice = $db->query('SELECT * FROM prices ORDER BY prices ASC');
                            while($rows = $getPrice->fetch())
                            {
                              ?>
                              <option value="<?php echo $rows["prices"]?>">R<?php echo number_format($rows["prices"]) ?></option>
                              <?php
                            }
                          ?>
                       </select>
                     </div>
                     <div class="col-md-3">
                           <select class="form-control" name="max-price" id="max-price" required="required">
                                <option value="">Select Max Price</option>
                                  <?php
                                    $getPrice = $db->query('SELECT * FROM prices ORDER BY prices ASC');
                                    while($rows = $getPrice->fetch())
                                    {
                                      ?>
                                      <option value="<?php echo $rows["prices"]?>">R<?php echo number_format($rows["prices"]) ?></option>
                                      <?php
                                    }
                                  ?>
                              </select>
                        </select>
                     </div>
                   </div>
                </div>
                <div class="col-md-2">
                   <button type="submit" name="mySearch" id="mySearch" class="btn btn-warning btn-block"><i class="ionicon ion-search"></i> SEARCH</button>
                </div>
             </div>
          </div>
       </div>
    </div>
  </div>
  <p id="search_error">This is  the real life</p>
  </div>
  <div class="container" style="margin-top: 15px;">
  <div class="w3-row-padding my_img">
  <div class="w3-quarter w3-centered ">
      <div class="w3-card my_cars_cards">
       <a class="thumbnail"><img src="img/home1.jpg"></a>
         <div class="inSideCard" style="padding: 10px;" align="center">
          <a href="#void" class="carNameModel"><span>Honda 1Serie 2016</span></a><br>
         <span>Silver | Manual | Petrol</span><br>
         <span class="cards_price"><i class="ionicon ion-pricetag"></i> R200,000 </span>
         <a class="btn btn-default btn-block read_more" id="read_more" href="more.php" >Read More...</a>
       </div>
      </div>
   </div>
   <div class="w3-quarter w3-centered ">
      <div class="w3-card my_cars_cards">
       <a class="thumbnail"><img src="img/home2.jpg"></a>
         <div class="inSideCard" style="padding: 10px;" align="center">
          <a href="#void" class="carNameModel"><span>BMW i5 California 2018</span></a><br>
         <span>Silver | Manual | Petrol</span><br>
         <span class="cards_price"><i class="ionicon ion-pricetag"></i> R200,000 </span>
         <a class="btn btn-default btn-block read_more" id="read_more" href="more.php" >Read More...</a>
       </div>
      </div>
   </div>
   <div class="w3-quarter w3-centered ">
      <div class="w3-card my_cars_cards">
       <a class="thumbnail"><img src="img/home3.jpg"></a>
         <div class="inSideCard" style="padding: 10px;" align="center">
          <a href="#void" class="carNameModel"><span>Jaguar Benz 2018</span></a><br>
         <span>Silver | Manual | Petrol</span><br>
         <span class="cards_price"><i class="ionicon ion-pricetag"></i> R200,000 </span>
         <a class="btn btn-default btn-block read_more" id="read_more" href="more.php" >Read More...</a>
       </div>
      </div>
   </div>
   <div class="w3-quarter w3-centered ">
      <div class="w3-card my_cars_cards">
       <a class="thumbnail"><img src="img/home4.jpg"></a>
         <div class="inSideCard" style="padding: 10px;" align="center">
          <a href="#void" class="carNameModel"><span>BMW i5 California 2018</span></a><br>
         <span>Silver | Manual | Petrol</span><br>
         <span class="cards_price"><i class="ionicon ion-pricetag"></i> R200,000 </span>
         <a class="btn btn-default btn-block read_more" id="read_more" href="more.php" >Read More...</a>
       </div>
      </div>
   </div>
 </div>
</div>
<br>
<div class="container">
  <div class="w3-row-padding my_img">
  <div class="w3-quarter w3-centered ">
      <div class="w3-card my_cars_cards">
       <a class="thumbnail"><img src="img/home1.jpg"></a>
         <div class="inSideCard" style="padding: 10px;" align="center">
          <a href="#void" class="carNameModel"><span>Honda 1Serie 2016</span></a><br>
         <span>Silver | Manual | Petrol</span><br>
         <span class="cards_price"><i class="ionicon ion-pricetag"></i> R200,000 </span>
         <a class="btn btn-default btn-block read_more" id="read_more" href="more.php" >Read More...</a>
       </div>
      </div>
   </div>
   <div class="w3-quarter w3-centered ">
      <div class="w3-card my_cars_cards">
       <a class="thumbnail"><img src="img/home2.jpg"></a>
         <div class="inSideCard" style="padding: 10px;" align="center">
          <a href="#void" class="carNameModel"><span>BMW i5 California 2018</span></a><br>
         <span>Silver | Manual | Petrol</span><br>
         <span class="cards_price"><i class="ionicon ion-pricetag"></i> R200,000 </span>
         <a class="btn btn-default btn-block read_more" id="read_more" href="more.php" >Read More...</a>
       </div>
      </div>
   </div>
   <div class="w3-quarter w3-centered ">
      <div class="w3-card my_cars_cards">
       <a class="thumbnail"><img src="img/home3.jpg"></a>
         <div class="inSideCard" style="padding: 10px;" align="center">
          <a href="#void" class="carNameModel"><span>Jaguar Benz 2018</span></a><br>
         <span>Silver | Manual | Petrol</span><br>
         <span class="cards_price"><i class="ionicon ion-pricetag"></i> R200,000 </span>
         <a class="btn btn-default btn-block read_more" id="read_more" href="more.php" >Read More...</a>
       </div>
      </div>
   </div>
   <div class="w3-quarter w3-centered ">
      <div class="w3-card my_cars_cards">
       <a class="thumbnail"><img src="img/home4.jpg"></a>
         <div class="inSideCard" style="padding: 10px;" align="center">
          <a href="#void" class="carNameModel"><span>BMW i5 California 2018</span></a><br>
         <span>Silver | Manual | Petrol</span><br>
         <span class="cards_price"><i class="ionicon ion-pricetag"></i> R200,000 </span>
        <a class="btn btn-default btn-block read_more" id="read_more" href="more.php" >Read More...</a>
       </div>
      </div>
   </div>
 </div>
</div>
  <br>
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
          <a class="thumbnail"><img src="img/car_disp.png"></a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div>
  <div class="w3-row">
    <div class="w3-half"> 
      <a class="thumbnail" data-lightbox="gallery" data-title="img/customers.jpg">
        <img src="img/customers.jpg"></a>
    </div>
    <div class="w3-half"> 
      <a class="thumbnail" href="img/customers1.jpg" data-lightbox="gallery" data-title="Happy Customer"><img src="img/customers1.jpg"></a>
    </div>
  </div>
  </div>
  <br>
  <!--SEARCH BY POPULAR MAKE
  <div style="background-color:white;">
  <div class="search_by_popular_makes_div">
     <h3><b>SEARCH BY POPULAR MAKES</b></h3>
     <div style="background-color: #b7051d;height:2px;width:26%;"></div><br><br>
     <div class="row">
     </div>
  </div>
 </div>-->



 <script type="text/javascript">
   $(document).ready(function(){
      
   });
 </script>
 <?php include('alertIcon.php') ?>
  <?php include('includes/footer.php')?>
  <script>
  wow = new WOW(
   {
  
    } ) 
    .init();
  </script> 
  </body>
</html>