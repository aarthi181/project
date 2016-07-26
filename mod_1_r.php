<html>
<head>
	<title>Module 1: Introduction and Definitions</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
	<link rel="stylesheet" type+"text/css" href="mod_1_vark.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_1.php">Module 1 >></a><a href="mod_1_r.php">Read/Write</a>
	</div>
	<div class="main">
		<h1>Module #1</h1>
		<h2>Introduction and Definitions</h2>
		<p class="def">IEEE defines Software Engineering as &rdquo;the application of a systematic disciplined quantifiable approach to the development, operation and maintenance of software.&rdquo;</p>
		<p>Some issues that are encountered when developing software include:
			<ul>
				<li>Meeting deadlines</li>
				<li>High cost</li>
				<li>Errors discovered after extensive testing</li>
				<li>The time and effort for maintenance</li>
				<li>Problems measuring progress</li>
			</ul>
		</p>
		<p>These arise due to factors such as:
			<ul>
				<li>Software is manufactured differently because it is intangible</li>
				<li>Software systems do not wear out</li>
				<li>No well-developed design handbooks and components-based development</li>
			</ul>
		</p>
		<p>To address the problems stated above, a software process is created to &rdquo;organise and ensure a high quality software product&rdquo;,.<br>
		The following activities are usually involved in all process models:
		<ul>
			<li>&laquo;Software Specification&raquo; functional requirements obtained from the user.</li>
			<li>&laquo;Software Design and Implementation&raquo; production of the software system as a product.</li>
			<li>&laquo;Software Validation&raquo; activity that assures that customer specifications are met.</li>
			<li>&laquo;Software Evolution&raquo; system modification to meet continuing customer needs.</li>
		</ul>
		Some criteria has been developed for assessing the capability maturity of a certain process model in an organisation by The Software Engineering Institute (SEI). Each process is evaluated according to six capability levels. The Capability Maturity Model Integration (CMMI) guidelines are quite complicated and so not every organisation may want to formally adopt them.</p>
	</div>
	<div class="mini_VARK_buttons">
		<form>
			<button formaction="mod_1_v.php">V</button>
			<button formaction="mod_1_a.php">A</button>
			<button class="r" formaction="mod_1_r.php">R</button>
			<button formaction="mod_1_k.php">K</button>
		</form>
	<p class="quiz_link"><a href="mod_1_quiz.php">Quiz</a></p>
	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>