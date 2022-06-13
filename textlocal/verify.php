<?php   session_start();



if(isset($_POST['verify'])){
	
if($_POST['otp'] ==  $_SESSION['otp'] ){	
}
	else {
		Echo "Code did not match !";
		
		header('location:front.php'); exit;
		
	}
}


?>




<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">




<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

	}
	
  .header h3{
    color: black;
    font-weight: bold;
    font-family: monospace;
    font-size: 26px;
}
</style>

	
	<style>
	body{
		overflow-x: hidden;
	}
	
	.headings h3{  background:#1e7e3414 ; border: 1px solid #fff; color: #000;   font-family:arial; }
	.title {  font-family:cursive; }
	
	#signup{
		width: 60%;
		border-radius: 30px;
			background-color: #000;
			color: white;
			border: 1px solid #fff
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: black;
		border-radius: 30px;
	}
	
	.well{
		background-color: rgba(0, 123, 255, 0.08);;
	}

</style>

	<link rel="stylesheet" href="css/font-awesome.min.css" />
	
</head>



<body>




<div class="error"></div>
<div class="success"></div>
<form id="frm-mobile-verification " method="POST" class="w-50 m-auto">
	<div class=" m-auto">
		<label>OTP is sent to Your Mobile Number</label>		
	</div>

	<div class=" m-auto">
		<input name="otp" type="number"  id="mobileOtp" class="form-input" placeholder="Enter the OTP">		
	</div>

	<div class=" d-inline m-auto">
		<input id="verify" name="verify" type="button" class="btn btn-light btnVerify" value="Verify" onClick="vvvvverifyOTP();">		
	</div>
</form>



	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>

	
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</body>
</html>