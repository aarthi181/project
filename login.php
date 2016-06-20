<html >
  <head>
    <title>Login</title> 
	<?php include 'header.php'; ?>   
        <link rel="stylesheet" href="login.css">
  </head>
  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form action="mod_1.html" onsubmit="return validateForm()" method="post">
			<input type="text" placeholder="Username" required>
			<input type="password" placeholder="Password" required>
			<button type="reset" id="reset_button">Reset</button>
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
  </body>
</html>
