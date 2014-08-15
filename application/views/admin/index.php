<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Car Classifides Admin Panel</title>

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
	<h1>Welcome to Car Classifides Admin Panel!</h1>

	<form name="frmSearch" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/admin/auth/login">	
		<input name="txtEmail" id="txtEmail" size="50" placeholder="Email">
		<input name="txtPassword" id="txtPassword" type="password" size="50" placeholder="Password">
		<button class="button" type="submit" id="btnLogin">Login</button>
	</form>
	<?php if($this->session->flashdata('msg')){ ?>
	<p style="color: red;"><?php echo $this->session->flashdata('msg');?></p>
	<?php }?>

	<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p> -->
</div>

</body>
</html>