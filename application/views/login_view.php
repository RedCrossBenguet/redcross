<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
		<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
	</head>
	
	<body>
		
		<div id= "picturelog" ></div>
		<div id ="login">
		    <h1><br>Philippine Red Cross</h1><h3>Red-E: Electronic Information System</h3><hr>
			<?php echo form_open(base_url(). "index.php/log"); ?>
			
			<form>
				<label>Username: </label>
				<input type="text" name="username" /><br/><?php echo form_error('username'); ?>
				<label>Password: </label>
				<input type="Password" name="password" /><br/><?php echo form_error('password'); ?>
				<input type="submit" name="btnLogin" value="Login">
			</form>
				<?php 
				if($err == 'Invalid')
				{
					echo 'Invalid username or password' ;
				
				}; ?>
			
	
		</div>
		</div>
		</div>
        <div id="footer">
            <p>&copyPhilipine Red Cross: Benguet Chapter</p>
            <p>Go to <a id="redcross" href="http://www.redcross.org.ph/" target="_blank"> Philippine Red Cross Official Website.  </a></p>
        </div>
		
	</body>
</html>

