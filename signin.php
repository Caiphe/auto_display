<?php 
  include('includes/header.php');

  if(isset($_SESSION["id_number"])){
  	header('location:advertise.php');
  }

  if(isset($_POST["btn_submit"]))
  {
  	 $id_number = htmlspecialchars($_POST["id_number"]);
  	 $cell_number = htmlspecialchars($_POST["cell_number"]);
  	 $invoice_number = htmlspecialchars($_POST["invoice_number"]);

  	 if(empty($id_number) || empty($cell_number) || empty($invoice_number))
  	 {
  	 	$errorMsg = "Your details are required";
  	 }
  	 else
  	 {
  	 	$check = $db->prepare("SELECT * FROM car_data WHERE id_number = ? AND contact_number = ? AND invoice_number = ?");
  	 	$check->execute(array($id_number, $cell_number, $invoice_number));
        $checkCount = $check->rowCount();

        if($checkCount == 1)
        {        	
	    	while($row = $check->fetch())
	    	{
	            $_SESSION["name"] = $row["name"];
	            $_SESSION["surname"] = $row["surname"];
	            $_SESSION["id_number"] = $row["id_number"];
	            $_SESSION["contact_number"] = $row["contact_number"];
	            $_SESSION["number_plate"] = $row["number_plate"];
	            $_SESSION["car_make"] = $row["car_make"];
	            $_SESSION["car_model"] = $row["car_model"];
	            $_SESSION["invoice_number"] = $row["invoice_number"];
	            $_SESSION["price"] = $row["price"];
	            $_SESSION["transmission"] = $row["transmission"];
	            $_SESSION["color"] = $row["color"];
	            $_SESSION["last_login_timestamp"]= time();
	            header('location:advertise.php');
	    	}
        }else
        {
        	$errorMsg ="No result matching your details";
        	unset($id_number);
        	unset($contact_number);
        	unset($invoice_number);
        }
  	 }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>signin</title>
	 <style type="text/css">
	 body
	 {
	 	background-color:#F4F4F4;
        background:#F4F4F4;
	 }
	.form_div
	{
		background-color: #fff;
		margin: 100px auto;
		width: 30%;
		min-width: 300px;
		border:solid 1px #A6AAAF;
		border-radius: 5px;
		box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4), 0 1px 3px 0 rgba(0, 0, 0, 0.14);
		z-index: 0;
	}
	.myForm_title 
	{
       background-color: #2f6299;
       padding: 10px;
       text-align: center;
       color:white;
       font-size: 20px;
	}
	.form_div input[type="text"], .form_div input[type="number"]
	{
		border-radius:0px;
		border:solid 1px #828283; 
		font-size: 16px;
		background: transparent !important;
		background-color: transparent !important;
	}
	.form_div .input-group
	{
		margin-bottom: 15px;
	}
	.red_span
	{
		color:#920808;
	}
	.form_div #btn_submit
	{
        background-color:#f68e07;
        text-align: center;
        color: white;
        font-size: 19px;
        padding: 7px;
        border-radius: 0px;
	}
	#errorMsg
	{
		background-color:#b5061e;
		text-align: center;
		padding: 10px;
		color: white;
		-webkit-animation-iteration-count: 1;
		-webkit-animation-duration: 1s;
		-moz-animation-iteration-count: 1;
		-moz-animation-duration: 1s;
		-o-animation-iteration-count: 1;
		-o-animation-duration: 1s;
		animation-duration: 1s;
	}
	#successMsd
	{
		background-color:#1c6b38;
		text-align: center;
		padding: 10px;
		color: white;
		-webkit-animation-iteration-count: 1;
		-webkit-animation-duration: 1s;
		-moz-animation-iteration-count: 1;
		-moz-animation-duration: 1s;
		-o-animation-iteration-count: 1;
		-o-animation-duration: 1s;
		animation-duration: 1s;
	}
	.error
	{
		color: #A31E09;
		right: 0;
		float: right;
		margin-right: 10px;
		margin-top: -47px;
		z-index: 9999;
		font-size: 20px;
		display: none;
	}
	.success_validate
	{
		color: #157518;
		right: 0;
		float: right;
		margin-right: 10px;
		margin-top: -47px;
		z-index: 9999;
		font-size: 20px;
		display: none;
	}
	</style>
</head>
<body id="main_about">
	<div id="top_banner"></div>
	<div class="container">
		<div class="form_div">
			<p class="myForm_title">Fill in the form below</p>
			<div style="padding: 20px;">
			   <p id="result"></p>
			   <?php 
                if(isset($errorMsg))
                {
                	?>
                	<p id="errorMsg" class="animated zoomIn"><i class="ionicon ion-alert"> </i><?= $errorMsg?></p>
                	<?php
                }
			   ?>
			  
			<form method="POST" id="signin_form">
				<div class="form-group">
				<label >ID Number</label> <span class="red_span">*</span>
				<div class="input-group">
		          <span class="input-group-addon"><i class="ionicon ion-compose"></i></span>
		          <input type="text" name="id_number" id="id_number" class="form-control" placeholder="ID Number" maxlength="20">
		          
		        </div>
		        <label class="error" id="error_id_number"><i class="icon ion-ios-close"></i></label>
		        <label class="success_validate" id="success_id_number"><i class="icon ion-checkmark-circled"></i></label>
		        </div>
		        <div class="form-group">
		        <label for="cell_number">Cell Number</label> <span class="red_span">*</span>
		        <div class="input-group">
		          <span class="input-group-addon"><i class="ionicon ion-android-call"></i></span>
		          <input type="text" name="cell_number" id="cell_number" class="form-control" placeholder="Cell Number" maxlength="20">
		        </div>
		         <label class="error" id="error_cell_number"><i class="icon ion-ios-close"></i></label>
		         <label class="success_validate" id="success_cell_number"><i class="icon ion-checkmark-circled"></i></label>
		    </div>
		    <div class="form-group">
		    	<label for="invoice_number">Invoice Number</label> <span class="red_span">*</span>
		        <div class="input-group">
		          <span class="input-group-addon"><i class="ionicon ion-document-text"></i></span>
		          <input type="text" name="invoice_number" id="invoice_number" class="form-control" placeholder="Invoice Number" maxlength="5">
		        </div>
		         <label class="error" id="error_invoice_number"><i class="icon ion-ios-close"></i></label>
		         <label class="success_validate" id="success_invoice_number"><i class="icon ion-checkmark-circled"></i></label>
		    </div>
				<div class="form-group">
					<button class="btn btn-default btn-block" name="btn_submit" type="submit" id="btn_submit"> SUBMIT</button>
				</div>
			</form>
		  </div>
		</div>
	</div>

<?php include('includes/footer.php')?>	
</body>
</html>
<script type="text/javascript">
  setTimeout('errorMessage()',6000);
  function errorMessage(){
    $("#errorMsg").hide(1000);
  }
</script>
<script type="text/javascript">
	$(document).ready(function()
	{
        $("#id_number").focus();
		var error_idNumber =  false;
		var error_contactNumber = false;
		var error_invoicenumber = false;

        //HIDE ERROR MESSAGE
		$("#error_id_number").hide();
		$("#error_cell_number").hide();
		$("#error_invoice_number").hide();
        
        //HIDE SUCCESS MESSAGE 
		$("#success_id_number").hide();
		$("#success_cell_number").hide();
		$("#success_invoice_number").hide();

		$("#id_number").focusout(function(){
           check_idNumber();
		});

		$("#cell_number").focusout(function(){
           check_cellNumber();
		});

		$("#invoice_number").focusout(function(){
           check_invoiceNumber();
		});
       
        function check_idNumber()
        {
        	var id_number = $("#id_number").val();

        	if(id_number === "")
        	{
              $("#id_number").css('border','solid 1px #A31E09');
              $("#error_id_number").fadeIn(800);
              $("#success_id_number").fadeOut(400);
              error_idNumber =  true;
        	}else 
        	{
        	   $("#id_number").css('border','solid 1px #0EA153');
        	   $("#success_id_number").fadeIn(800);
        	   $("#error_id_number").hide();
        	  
        	}
        }

        function check_cellNumber()
        {
           var cell_number = $("#cell_number").val();
           if(cell_number === "")
           {
           	 $("#cell_number").css('border','solid 1px #A31E09');
           	 $("#success_cell_number").fadeOut(500);
           	 $("#error_cell_number").fadeIn(1000);
             error_contactNumber =  true;
           }else 
           {
           	 $("#cell_number").css('border','solid 1px #0EA153');
           	 $("#success_cell_number").fadeIn(1000);
           	 $("#error_cell_number").hide();
           	
           }
        }
        function check_invoiceNumber()
        {
          var invoice_number = $("#invoice_number").val();
           if(invoice_number === "")
           {
           	 $("#invoice_number").css('border','solid 1px #A31E09');
           	 $("#error_invoice_number").fadeIn(1200);
             error_invoicenumber =  true;
           }else 
           {
           	 $("#invoice_number").css('border','solid 1px #0EA153');
           	 $("#error_invoice_number").hide();
           	 $("#success_invoice_number").fadeIn(1200);
           }
        }

        $("#signin_form").on('submit',function(){
            error_idNumber =  false;
		    error_contactNumber = false;
		    error_invoicenumber = false;

		     check_idNumber();
		     check_cellNumber();
		     check_invoiceNumber();

		     if(error_idNumber == false && error_contactNumber == false && error_invoicenumber == false)
		     {
		     	return true;
		     }else 
		     {
		     	return false;
		     }
        });
        	/*if(error_idNumber == false && error_contactNumber == false && error_invoicenumber == true){
        	    var signin_form = $("#signin_form");
		     	$.ajax({
                   url:'signinuser.php', 
                   method:'POST',
                   data :signin_form,
                   success function(data){
                     $("#result").html(data);
                   }
		     	});
               //$("#btn_submit").html('Loading...');
            }*/

            // CHECK INVOICE NUMBER PATTERN
              /* var pattern =/^([0-9])?$/;
           
           if(invoice_number !== "" && pattern.test($("#invoice_number").val()))
           {
             $("#invoice_number").css('border','solid 1px #0EA153');
           	 $("#success_invoice_number").fadeIn(1200);
           	 $("#error_invoice_number").fadeOut(600);
           }else 
           {
           	 $("#invoice_number").css('border','solid 1px #A31E09');
           	 $("#error_invoice_number").fadeIn(1200);
             error_invoicenumber =  true;
           }*/
       

	});
</script>
