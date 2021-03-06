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
?>
<html>
<head>
	<title>My Content</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" href="my_account.css">
	<link rel="stylesheet" href="v_nav_bar.css">
</head>
<body>
	<div class="nav_links">
		<a href="my_content.php">My Content</a>
	</div>
	<div class="v_nav_bar">
	<ul>
		<li><a class="active" href="about_me.php">About Me</a></li>
		<li><a href="my_content.php">My Content</a></li>
		<li><a href="my_achievements.php">My Achievements</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>
	</body>
	<footer><?php include 'footer.php';?></footer>