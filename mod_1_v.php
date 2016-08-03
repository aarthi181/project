<html>
<head>
	<title>Module 1: Visual</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
	<link rel="stylesheet" type+"text/css" href="mod_1_vark.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_1.php">Module 1 >></a><a href="mod_1_v.php">Visual</a>
	</div>
	<div class="main">
		<h1>Module #1</h1>
		<h1>Introduction and Definitions</h1>
		<p class="def"><img class="ieee" src="visual/mod_1/ieee.jpg" alt="IEEE" width="150" height="50"/> defines Software Engineering as the the application of a systematic disciplined quantifiable approach to the development, operation and maintenance of software.</p>
		<p>Some issues that are encountered when developing software include:</p>
		<img class="img1" src="/visual/mod_1/Picture1.png" alt="meeting deadlines, high cost, errors discovered after extensive testing, the time and effort for maintenance, problems measuring progress" width="350" height="300"/>
		<img class="img2" src="/visual/mod_1/Picture2.png" alt="Due to factors such as: software is manufactured differently because it is intangible, software systems don't wear out, there aren't any well-developed design handbooks" width="350" height="225"/>
		<p>To address the problems stated above, a software process is created to organise and ensure a high quality software product.
		<br>The following activities are usually involved in all process models:</p>
		<p><img class="img3" src="/visual/mod_1/Picture3.png" alt="Software Specification - functional requirements obtained from the user, software design and implementation - production od the software system as a product, software validation - activity that assures that the customer specifications are met, software evolution - system modification to meet continuing customer needs" width="400" height="275"/></p>
		<p>Some criteria has been developed for assessing the capability maturity of a certain process model in an organisation by The Software Engineering Institute (SEI).
		Each process is evaluated according to six capability levels.
		The Capability Maturity Model Integration (CMMI) guidelines are quite complicated and so not every organisation may want to formally adopt them.</p>
	</div>
	<div class="mini_VARK_buttons">
		<form>
			<button class="v" formaction="mod_1_v.php">V</button>
			<button formaction="mod_1_a.php">A</button>
			<button formaction="mod_1_r.php">R</button>
			<button formaction="mod_1_k.php">K</button>
		</form>
	<p class="quiz_link"><a href="mod_1_quiz.php">Quiz</a></p>
	<!--Other things that'll help you as a visual learner-->
	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>