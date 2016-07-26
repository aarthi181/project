<html>
<head>
	<title>Module 1: Introduction and Definitions</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
	<link rel="stylesheet" type+"text/css" href="mod_1_vark.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_1.php">Module 1 >></a><a href="mod_1_k.php">Kinesthetic</a>
	</div>
	<div class="main">
		<h1>Module #1</h1>
		<h2>Introduction and Definitions</h2>
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">IEEE defines Software Engineering as...</span>
			</div>
			<div class="card__back">
				<span class="card__text">the application of a systematic disciplined quantifiable approach to the development, operation and maintenance of software</span>
			</div>
		</div>
		<br>
		<p>Some issues that are encountered when developing software include:
	</div>
	<div class="carousel">
		<div class="item col5 slide-in" id="item5" tabindex="5"><p>&#10126; problems measuring progress</p></div>
		<div class="item col4 slide-in" id="item4" tabindex="4"><p>&#10125; time and effort required for maintenance</p></div>
		<div class="item col3 slide-in" id="item3" tabindex="3"><p>&#10124; errors discovered after extensive testing</p></div>
		<div class="item col2 slide-in" id="item2" tabindex="2"><p>&#10123; high cost</p></div>
		<input type="checkbox" autofocus="autofocus" tabindex="1" />
		<div class="item col1 slide-in" id="item1" tabindex="1" autofocus><p>&#10122; meeting deadlines</p></div>
		<div class="controls">
			<a href="#item1" class="btn" tabindex="-1"></a>
			<a href="#item2" class="btn" tabindex="-1"></a>
			<a href="#item3" class="btn" tabindex="-1"></a>
			<a href="#item4" class="btn" tabindex="-1"></a>
			<a href="#item5" class="btn" tabindex="-1"></a>
		</div>
	</div>
	<div class="main">	
		<p>These arise due to factors such as:
			<ul>
				<li>Software is manufactured differently because it is intangible</li>
				<li>Software systems do not wear out</li>
				<li>No well-developed design handbooks and components-based development</li>
			</ul>
		</p>
		<p>To address the problems stated above, a software process is created to organise and ensure a high quality software product.<br>
		The following activities are usually involved in all process models:
	</div>
	<div class="card effect__hover ss">
		<div class="card__front">
			<span class="card__text">Software Specification</span>
		</div>
		<div class="card__back">
			<span class="card__text">functional requirements obtained from the user</span>
		</div>
	</div>
	<div class="card effect__hover sd">
		<div class="card__front">
			<span class="card__text">Software Design and Implementation</span>
		</div>
		<div class="card__back">
			<span class="card__text">production of the software system as a product</span>
		</div>
	</div>
	<div class="card effect__hover sv">
		<div class="card__front">
			<span class="card__text">Software Validation</span>
		</div>
		<div class="card__back">
			<span class="card__text">activity that assures that customer specifications are met</span>
		</div>
	</div>
	<div class="card effect__hover se">
		<div class="card__front">
			<span class="card__text">Software Evolution</span>
		</div>
		<div class="card__back">
			<span class="card__text">system modification to meet continuing customer needs</span>
		</div>
	</div>
	<div class="main">
		<br><br><br><br><br><br><br><br><br><br><br>
		Some criteria has been developed for assessing the capability maturity of a certain process model in an organisation by The Software Engineering Institute (SEI). Each process is evaluated according to six capability levels. The Capability Maturity Model Integration (CMMI) guidelines are quite complicated and so not every organisation may want to formally adopt them.</p>
	</div>
	<div class="mini_VARK_buttons">
		<form>
			<button formaction="mod_1_v.php">V</button>
			<button formaction="mod_1_a.php">A</button>
			<button formaction="mod_1_r.php">R</button>
			<button class="k" formaction="mod_1_k.php">K</button>
		</form>
	<p class="quiz_link"><a href="mod_1_quiz.php">Quiz</a></p>
	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>