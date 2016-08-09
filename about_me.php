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
	<title>About Me</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" href="my_account.css">
	<link rel="stylesheet" href="v_nav_bar.css">
</head>
<body>
	<div class="nav_links">
		<a href="about_me.php">About Me</a>
	</div>
	<div class="v_nav_bar">
	<ul>
		<li><a class="active" href="about_me.php">About Me</a></li>
		<li><a href="my_content.php">My Content</a></li>
		<li><a href="my_achievements.php">My Achievements</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>
	<div class="wrapper">
		<div class="container">
			<h1>About Me</h1>
			<br />
			<form action="edit_account.php">
				<h3>Username:</h3><b><i>(this cannot be changed)</b></i>
				<input value="<?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>" />
				<h3>E-mail:</h3>
				<input value="<?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>" />
				<h3>Password:</h3>
				<i><b>(Although this cannot be seen, it can be changed on the next page)</b></i>
				<br><br><input type="submit" value="Edit Account" />
			</form>
		</div>
	</div>
	<!--in php select user id where this username = username in database then fill in the extra fields bc they are all optional with a lil thing being like to optimise your learning experience, please fill in the following details
	and then be like first name, last name, would u like to allow ppl who are the same learning style as u access to ur email address?, username (used on forum) email password
	separate section: about your lecturer
	name: email: button- contact lecturer
	-->
	</body>
	<footer><?php include 'footer.php';?></footer>