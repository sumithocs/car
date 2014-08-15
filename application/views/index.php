<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Car Classifides</title>

	<style type="text/css">

	button#join {
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
	}
	
	div#container {
		
    	text-align: center ;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Car Classifides!</h1>

	<form name="frmSearch" method="post" action="<?php echo base_url();?>buy/search">
	
		<input id="txtSearch" size="50" placeholder="enter your keyword here">
		<button class="button" type="submit" id="btnSearch">Search</button>
		<button class="button" type="button" id="btnBuy">Buy</button>
		<button class="button" type="button" id="btnSell">Sell</button>
	</form>
	

	<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p> -->
</div>

</body>
</html>