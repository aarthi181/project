<html>
<head>
	<title>Module 2: Kinesthetic</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
	<link rel="stylesheet" type+"text/css" href="mod_2_vark.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_2.php">Module 2 >></a><a href="mod_2_k.php">Kinesthetic</a>
	</div>
	<div class="main">
		<h1>Module #2</h1>
		<h1>Software Process Models</h1>
	</div>
	<div class="carousel">
		<div class="item col3 slide-in" id="item4" tabindex="4"><p>&#10125; One problem of the waterfall method is that a working version of the system is only available late in the project</p></div>
		<div class="item col2 slide-in" id="item3" tabindex="3"><p>&#10124; This method can only be used when all the customer requirements are known at the beginning of the project</p></div>
		<div class="item col1 slide-in" id="item2" tabindex="2"><p>&#10123; Some versions provide feedback loops from each stage to the previous ones</p></div>
		<input type="checkbox" autofocus="autofocus" tabindex="1" />
		<div class="item col slide-in" id="item1" tabindex="1" autofocus><p>&#10122; A simple linear model that is considered a 'first approximation' of the activities needed</p></div>
		<div class="controls">
			<a href="#item1" class="btn" tabindex="-1"></a>
			<a href="#item2" class="btn" tabindex="-1"></a>
			<a href="#item3" class="btn" tabindex="-1"></a>
			<a href="#item4" class="btn" tabindex="-1"></a>
		</div>
	</div>
	<div class="main">
		<br>
		
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">Incremental Process Models</span>
			</div>
			<div class="card__back col4">
				<span class="card__text"><ul>
				<li>Builds on the waterfall method by adding incremental iteration processes</li>
				<li>Each function of the system can be treated as a separate system and developed in accordance with the waterfall model</li>
				<li>The system can be delivered to the customer incrementally with each function delivered initially as a separately operating function</li></ul></span>
			</div>
		</div>
		<p>Another method that uses increments is Rapid Application Development (RAD).
		 It applies the software specification stage to the entire system but for software design and implementation stages the system is divided into team projects to enable development time to be scaled down to the range of two to three months.
		 To use this method, the system must be able to be modularized and the customers developers must be prepared for the rapid pace.</p>
		
		<h2>Evolutionary Process Models</h2>
	</div>
		
	<div class="special">
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">Rapid Prototyping</span>
			</div>
			<div class="card__back col5">
				<span class="card__text"><p>used at the beginning of projects to improve the understanding of the customer requirements</p><p>prototype produced could either be a throw-away or extended to develop the entire system</p></span>
			</div>
		</div>
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">The spiral model</span>
			</div>
			<div class="card__back col1">
				<span class="card__text"><p>combines elements of the waterfall model and rapid prototyping to implement evolutionary development</p><p>Each path around the spiral represents a new more complete version of the system with a risk assessment each time around</p>
		 <p>Each version can be viewed as a system prototype during any phase of the evolutionary development</p></span>
			</div>
		</div>
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">Concurrent Development Model</span>
			</div>
			<div class="card__back col2">
				<span class="card__text"><p>all the activities in the process model exist concurrently in different states</p><p>descibes the software process to be implemented as a network of activities rather than a simple linear process</p></span>
			</div>
		</div>
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">Component-based Development</span>
			</div>
			<div class="card__back col2">
				<span class="card__text"><p>uses off-the-shelf software packages as the defining characteristic of the process</p><p>software reuse approach and often leads to large reductions in cost and development time but depends on the nature and quality of the components library available</p></span>
			</div>
		</div>
	</div>
	<div class="main">
		<h2>Clean Room Software Engineering</h2>
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">Clean Room Software Engineering</span>
			</div>
			<div class="card__back col3">
				<span class="card__text"><p>uses formal methods in design and serves as the basis for identifying errors that might not be detected during the testing phase</p>
		<p>requires special mathematical skills and produces difficulties in communication to the customers</p></span>
			</div>
		</div>
		<h2>Aspect-Oriented Software Development (AOSD)</h2>
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">Aspect-Oriented Software Development (AOSD)</span>
			</div>
			<div class="card__back col4">
				<span class="card__text"><p>AOSD is a new concept intended to model localised features, functions and information content that have impact across the software system</p>
		<p>Sometimes referred to as crosscutting concerns that go beyond mechanisms such as subroutines</p></span>
			</div>
		</div>
		<h2>Agile Development</h2>
		<div class="card effect__hover">
			<div class="card__front">
				<span class="card__text">Agile Development</span>
			</div>
			<div class="card__back col5">
				<span class="card__text"><p>This is a method to compress and overlap the traditional life cycle phases as much as possible with close customer partnership.</p>
		<p>The main objective is rapid time to delivery. "Extreme Programming" is also a term that is associated with this strategy.</p>
		<p>Some say that agile development models are appropriate for web applications developers, a group that tend to resist the discipline of software processes.</p></span>
			</div>
		</div>
		</div>
	<div class="mini_VARK_buttons">
		<form>
			<button formaction="mod_2_v.php">V</button>
			<button formaction="mod_2_a.php">A</button>
			<button formaction="mod_2_r.php">R</button>
			<button class="k" formaction="mod_2_k.php">K</button>
		</form>
	<p class="quiz_link"><a href="mod_2_quiz.php">Quiz</a></p>
	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>