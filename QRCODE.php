<!--Index.html-->
<!DOCTYPE html> 
<html lang="en"> 

<head> 
<link href="assets/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="QRCODE.css" /> 

	<!-- External QR code library -->
	<!--This is the liberary which helps 
		to convert simple data to the images-->
	<script src= 
"https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"> 
	</script> 
</head> 

<body> 

<?php include'navbar.php'?>
	<div class="header"> 
		<div class="box"> 
			<h1> 
				QR Code Generator 
			</h1> 
			<hr /> 
			<div class="sqrcode"></div> 
			<div class="qrcode"></div> 
			<input type="text"
				placeholder="Paste a URL or enter 
								text, then press enter" 
				onchange="generateQr()" /> 
			<!--generateQr() is the fuction which helps 
				to convert data into QR using the js library-->
		</div> 
	</div> 
	<script src="QRCODE.js"></script> 
</body> 

</html>
