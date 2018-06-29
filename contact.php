<?php 
  include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact</title>
	<style type="text/css">
	   .contact_form_div
	   {
	   	  margin-top: 10px;
	   }
	   .contact_form_div input{
	   	margin-bottom: 10px;
	   	border:solid 1px #6e6e6e;
	   	border-radius: 3px;
	   }
	   .contact_form_div textarea{
	   	border:solid 1px #6e6e6e;
	   	border-radius: 3px;
	   }
	   #contact_submit
	   {
	   	 padding: 7px 25px;
	   	 border-radius: 4px;
	   	 font-size: 17px;
	   	 background-color: #0c7b35;
	   	 transition: 0.5s;
	   	 box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4), 0 1px 2px 0 rgba(0, 0, 0, 0.14);
	   	 border:solid 2px white;
	   }
	   #contact_submit:hover
	   {
	   	background-color: #104825;
	   }
	   #top_banner{
	   	background-color: #22233b;
	   	height: 70px;
	   	margin-top: 40px;
	   }
	   #contact_info{
	   	 font-size: 16px;
	   }
	   #myFrame
	   {
	   	  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4), 0 1px 2px 0 rgba(0, 0, 0, 0.14);
	   	  border-radius: 5px;
	   	  border:solid 2px white;
	   }
	</style>
</head>
<body>
	<div id="top_banner"></div>
	<div class="container">
		<br>
			<div class="row">
				<div class="col-md-6">
					<h2>Contact Us</h2>
					<div class="contact_form_div">
						<form method="POST">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6"><input type="text" class="form-control" name="name" placeholder="First Name"></div>
									<div class="col-md-6"><input type="text" class="form-control" name="surname" placeholder="Second Name"></div>
								</div>
							</div>
							<div class="form-group" style="margin-top: -12px;">
								<div class="row">
									<div class="col-md-6"><input type="number" class="form-control" name="name" placeholder="Contact Number"></div>
									<div class="col-md-6"><input type="email" class="form-control" name="name" placeholder="Address Email"></div>
								</div>
							</div>
							<div class="form-group" style="margin-top: -12px;">
								<textarea class="form-control" cols="4" rows="6" placeholder="Leave a message"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-success" id="contact_submit">SUBMIT</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6" id="contact_info">
					<h2>Get in Touch</h2>
					<p><b>Cellphone No</b> : 061 258 3535</p>
					<p><b>Telphone No</b> : 061 258 3535</p>
					<p><b>Email address</b> : info@autodisplay.co.za</p>
					<p><b>Physical Address</b> : 120 Queen Marry Glenmore Durban 4001</p>
					<!--<table>
						<tr>
							<td><b>Cellphone No </b></td>
							<td> &nbsp;: 061 258 3535</td>
						</tr>
						<tr>
							<td><b>Telephone No </b></td>
							<td> &nbsp;: 061 258 3535</td>
						</tr>
						<tr>
							<td><b>Email Address </b></td>
							<td> &nbsp;: info@autodisplay.co.za</td>
						</tr>
						<tr>
							<td><b>Physical Address </b></td>
							<td> &nbsp;: 37 Battle Road Durban 4001</td>
						</tr>
					</table>-->
				</div>
			</div>
		</div>
		<br>
        <div class="container">
        	<iframe id="myFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.4516863103077!2d30.98046861511122!3d-29.880083081942452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7aa261b829939%3A0xf58ab2f199d4c66c!2s120+Queen+Mary+Ave%2C+Umbilo%2C+Berea%2C+4075!5e0!3m2!1sen!2sza!4v1529194588014" width="100%" height="300" frameborder="0" style="" allowfullscreen></iframe>
        </div>
		<br>
	</div>
<?php include('includes/footer.php')?>	
</body>
</html>