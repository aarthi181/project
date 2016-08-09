<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    }
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 
<html>
<head>
	<title>My Account</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="my_account.css">
	<link rel="stylesheet" href="v_nav_bar.css">
</head>
<body>
	<div class="nav_links">
		<a href="private.php">My Account</a>
	</div>
	<div class="v_nav_bar">
	<ul>
		<li><a href="about_me.php">About Me</a></li>
		<li><a href="my_content.php">My Content</a></li>
		<li><a href="my_achievements.php">My Achievements</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>
	<div class="wrapper">
	<div class="container">
	<div class="design">
	<h1>Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>,</h1>
	<br><blockquote><h3>To navigate through your personalised content, please use the vertical menu to the left!</blockquote><br /></h3>
	</div></div>
	
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
	<div class="main">
	<p><a href="memberlist.php">Memberlist</a></p>
	</div>
</body>
<footer><?php include 'footer.php'; ?>
</footer>