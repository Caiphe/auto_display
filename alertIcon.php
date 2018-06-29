<?php 
   //include('includes/db.php');
include('includes/links.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

    <style type="text/css">
    #btnAlert
    {
        left: 0px;
        bottom:0px;
        margin-left: 20px;
        margin-bottom: 45px;
        z-index: 9999;
        position: fixed;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        font-size: 20px;
        text-align: center;
        background-color: #0D4DA3;
        color:white;
        box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
        -webkit-box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
        transition: 0.5s;
    }
    #btnAlert:hover
    {
        background-color: #4e0626;
        color: white;
    }
    /*#myModal{
      width: 400px;
      height: 500px;
      border-radius: 10px;
      background-color: red;
      box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
      -webkit-box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
      margin: 100px auto;
    }*/
    .modal 
  {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    margin: 0px auto;
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
  }

/* Modal Content */
 .bookTestDrive
 {
    margin: auto;
    border: 1px solid #888;
    width: 27%;
    min-width: 250px;
    border-radius: 5px;
    background: #fafafa;
    box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
    -webkit-box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: -2px 1px 3px 0px rgba(0,0,0,0.75);
    -webkit-animation-duration:2s;
 }
 .top_div{
  background-color: #0D4DA3;
  border-top-right-radius: 5px;
  height: 40px;
  border-top-left-radius: 5px;
 }
 .btn_book
 {
   background-color: #E88B0B;
   //margin-top: 5px;
   color: white;
   height: 40px;
   font-size: 18px;
   border-radius: 2px;
   border:solid 1px white;
   box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4), 0 1px 2px 0 rgba(0, 0, 0, 0.14);
   transition: 0.5s;
   width: 100%;
 }
 .btn_book:hover
 {
   background-color: #b6650e;
   color: white;
 }
 .myForm{
   padding-left: 10px;
   padding-right: 10px;
 }
 .book_test
 {
   padding-top: 10px;
   font-size: 21px;
   font-weight: bold;
   text-align: center;
   color: #700836;
 }
 .myForm input, select
 {
   border:solid 1px #494949;
   border-radius: 2px;
   margin-bottom: 5px;
   width: 100%;
   height: 37px;
   padding-left: 10px;
   font-size: 16px;
 }
 .myForm select{
   border:solid 1px #494949;
   border-radius: 2px;
   font-size: 16px;
 }
 .form_entries 
 {
  padding-top: 5px;
   padding: 20px;
 }
 #close_report
 {
   margin-right: 10px;
   font-size: 22px;
   //color: black;
   margin-top: 5px;
 }
 .complelte
 {
    text-align: center;
    font-size: 13px;
    color:#878787; 
 }
 #ErrorMessage
 {
    margin-top: 5px;
    text-align: center;padding:5px;
    background:#880b19;
    color: white;
    display: none;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.4), 0 1px 3px 0 rgba(0, 0, 0, 0.14);
    -webkit-animation-duration:2s;
    -moz-animation-duration:2s; 
    -o-animation-duration:2s; 
    animation-duration:2s;  
 }
 #success_message
 {
    left: 0px;
    bottom:0px;
    margin-left: 20px;
    margin-bottom: 20px;
    //z-index: 9999;
    position: fixed;
    background:#ededed;
    height:80px;
    text-align: center;
    width: 300px;
    border-radius: 5px;
    box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.4), 0 3px 6px 0 rgba(0, 0, 0, 0.14);
    -webkit-animation-duration:1s;
    -moz-animation-duration:1s; 
    -o-animation-duration:1s; 
    animation-duration:1s;  
    display: none;
 }
 #left_message
 {
   background-color: #29660e;
   height:80px;
   border-bottom-left-radius: 5px;
   border-top-left-radius: 5px;

 }
 #mesage_content
 {
   margin-top: 13px;
   margin-left: -5px;
   padding-top: 10px;
   font-size: 19px;
   text-align: center;
   font-weight: bold;
   color: #29660e;
 }
 #close_success{
    left: 0px;
    bottom:0px;
    margin-left: 20px;
    position: fixed;
    margin-bottom: 80px;
    z-index: 9999;
    color: white;
 }
 #under_line{
  z-index: 999999;
  margin-top: -17px;
  text-align: center;
  color: #cccccc;
  font-size: 12px;
 }

</style>
</head>
<body>
    <a class="btn btn-default" id="btnAlert"><i class="icon ion-model-s"></i></a>
    <?php 
       if(isset($errormsg))
       {
         ?>
          <p id="myError_msg" class="animated slideInLeft"><i class="icon ion-ios-close-outline"></i> <?= $errormsg;?></p>
         <?php
       }
    ?>
     <?php 
       if(isset($success))
       {
         ?>
          <p id="success_msg" class="animated slideInLeft"><i class="icon ion-alert-circled"></i> <?= $success;?></p>
         <?php
       }
    ?>
      <div id="myModal" class="modal">
        <div class="animated slideInDown bookTestDrive">
           <span class="close" id="close_report"><i class="ionicon ion-ios-close"></i></span>
          <div class="top_div"></div>
           <p class="book_test">BOOK FOR A TEST DRIVE</p>
           <div class="myForm">
            <p class="complelte"><i class="ionicon ion-ios-information"></i> Complete the form below and submit</p>
             <div class="form_entries">
              <input type="text" name="firstName" id="firstName" class="firstName" placeholder="First Name">
              <input type="text" name="secondName" id="secondName" class="" placeholder="Second Name">
              <input type="number" name="contactNumber" id="contactNumber" class="" placeholder="Contact Number">
              <select class="form-control" name="gender" id="gender">
                 <option>Select Gender</option>
                 <option value="male">Male</option>
                 <option value="female">Female</option>
              </select>
              <input placeholder="YYYY / MM / DD  HH:MM " type="text" id="default_datetimepicker" required name="default_datetimepicker" class="form-control" /> 
              <button type="submit" class="btn_book" name="btn_book" id="btn_book">BOOK</button>
              <p id="ErrorMessage" class="animated flipInY"><i class="ionicon ion-alert-circled"></i></p>

            </div>
           </div>
        </div>
        <!--<span class="close_success" id="close_success"><i class="ionicon ion-ios-close-outline"></i></span>-->
        <div id="success_message" class="animated rotateInUpLeft">
           
          <div class="row">
            <div class="col-sm-2" id="left_message">
             
            </div>
            <div class="col-md-10">
              <p id="mesage_content"> Successfully Sent</p>
              <p id="under_line">-------------------------</p>
            </div>
          </div>
      </div>
      </div>


</body>
</html>
<!--CONTACT OWNER'S MODAL-->
  <script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.-ui.min.js"></script>

  <script type="text/javascript">
  <script type="text/javascript">
   $(document).ready(function(){
     /*$("#close_modal").on('click',function(){
         $("#myModal").fadeOut(1000);
     });
     $("#close").on('click',function(){
         $("#shareModal").fadeOut(1000);
     });*/
     $("#close_report").on('click',function(){
         $("#myModal").fadeOut(1000);
     });
</script>

  <script type="text/javascript">
  $(document).ready(function(){
     $("#firstName").focus();
     var fields_error = false;
     $("#btn_book").on('click', function(){
         if($("#firstName").val() === "" || $("#secondName").val() === "" || $("#contactNumber").val() == "" || $("#gender").val() === "" || $("#default_datetimepicker").val() === "")
         {
          $("#ErrorMessage").css('display','block');
          $("#ErrorMessage").html('No empty fields allowed');
          $("#success_message").hide();
          fields_error = true;
          //$("#ErrorMessage").fadeIn(1000);
         }else
         {
             $("#ErrorMessage").fadeOut(500);
             $("#success_message").fadeIn(1000)

             $("#firstName").val() = "";

         }
      });
  });
</script>

<script>
  var modal = document.getElementById('myModal');
  var btn = document.getElementById("btnAlert");
  var span = document.getElementsByClassName("close")[0];
  btn.onclick = function(){
      modal.style.display = "block";
  }
  span.onclick = function() {
     modal.style.display = "none";
  }
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
    }
  }
</script>



<script>/*
window.onerror = function(errorMsg) {
    $('#console').html($('#console').html()+'<br>'+errorMsg)
}*/
$.datetimepicker.setLocale('en');
$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
console.log($('#datetimepicker_format').datetimepicker('getValue'));

$("#datetimepicker_format_change").on("click", function(e){
    $("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
    $.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:  '1986/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
    formatTime:'H:i',
    formatDate:'d.m.Y',
    //defaultDate:'8.12.1986', // it's my birthday
    defaultDate:'+03.01.1970', // it's my birthday
    defaultTime:'10:00',
    timepickerScrollbar:false
});

$('#datetimepicker10').datetimepicker({
    step:5,
    inline:true
});
$('#datetimepicker_mask').datetimepicker({
    mask:'9999/19/39 29:59'
});

$('#datetimepicker1').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
});
$('#datetimepicker2').datetimepicker({
    yearOffset:222,
    lang:'ch',
    timepicker:false,
    format:'d/m/Y',
    formatDate:'Y/m/d',
    minDate:'-1970/01/02', // yesterday is minimum date
    maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
$('#datetimepicker3').datetimepicker({
    inline:true
});
$('#datetimepicker4').datetimepicker();
$('#open').click(function(){
    $('#datetimepicker4').datetimepicker('show');
});
$('#close').click(function(){
    $('#datetimepicker4').datetimepicker('hide');
});
$('#reset').click(function(){
    $('#datetimepicker4').datetimepicker('reset');
});
$('#datetimepicker5').datetimepicker({
    datepicker:false,
    allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
    step:5
});
$('#datetimepicker6').datetimepicker();
$('#destroy').click(function(){
    if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
        $('#datetimepicker6').datetimepicker('destroy');
        this.value = 'create';
    }else{
        $('#datetimepicker6').datetimepicker();
        this.value = 'destroy';
    }
});
var logic = function( currentDateTime ){
    if (currentDateTime && currentDateTime.getDay() == 6){
        this.setOptions({
            minTime:'11:00'
        });
    }else
        this.setOptions({
            minTime:'8:00'
        });
};
$('#datetimepicker7').datetimepicker({
    onChangeDateTime:logic,
    onShow:logic
});
$('#datetimepicker8').datetimepicker({
    onGenerate:function( ct ){
        $(this).find('.xdsoft_date')
            .toggleClass('xdsoft_disabled');
    },
    minDate:'-1970/01/2',
    maxDate:'+1970/01/2',
    timepicker:false
});
$('#datetimepicker9').datetimepicker({
    onGenerate:function( ct ){
        $(this).find('.xdsoft_date.xdsoft_weekend')
            .addClass('xdsoft_disabled');
    },
    weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
    timepicker:false
});
var dateToDisable = new Date();
    dateToDisable.setDate(dateToDisable.getDate() + 2);
$('#datetimepicker11').datetimepicker({
    beforeShowDay: function(date) {
        if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
            return [false, ""]
        }

        return [true, ""];
    }
});
$('#datetimepicker12').datetimepicker({
    beforeShowDay: function(date) {
        if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
            return [true, "custom-date-style"];
        }

        return [true, ""];
    }
});
$('#datetimepicker_dark').datetimepicker({theme:'dark'})


</script>






<script type="text/javascript">
    /*$(document).ready(function(){
        $("#btnAlert").click(function(){
            $("#alert_box").fadeIn(2000);
            $("#alert_email").focus();
            $("#btnAlert").hide();
        });
        $(".btn_close").click(function(){
            $("#alert_box").fadeOut(500);
            $("#btnAlert").fadeIn(1000);
        });
    });
      setTimeout('msgError()',4000);
      function msgError(){
        $("#myError_msg").hide();
        $("#alert_box").fadeIn(500);
        $("#btnAlert").fadeOut(100);
      }
      setTimeout('msgError()',4000);
      function msgError(){
        $("#success_msg").fadeOut(1000);
        //$("#alert_box").fadeIn(500);
        //$("#btnAlert").fadeOut(100);
      }
</script>
