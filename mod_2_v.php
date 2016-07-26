<html>
<head>
	<title>Module 2: Software Process Models</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
	<link rel="stylesheet" type+"text/css" href="mod_2_vark.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_2.php">Module 2 >></a><a href="mod_2_v.php">Visual</a>
	</div>
	<div class="main">
		<h1>Module #2</h1>
		<h2>Software Process Models</h2>
		<h3>The Waterfall Model</h3>
		<img src="visual/mod_2/waterfall.png" alt="The Waterfall Method Process" width="600" height="400" 
		title="The Waterfall Process Method"/>
		<br />
		
		<h3>Incremental Process Models</h3>
		<img src="visual/mod_2/incremental.png" alt="The incremental process model" width="700" height="150" title="The Incremental Process Model"/>
		<p>Another method that uses increments is Rapid Application Development (RAD).
		<img class="img1" src="visual/mod_2/RAD.png" alt="RAD" width="700" height="250" 
		title="Rapid Application Development"/>
		 <br>It applies the software specification stage to the entire system but for software design and implementation stages the system is divided into team projects to enable development time to be scaled down to the range of two to three months.
		 To use this method, the system must be able to be modularized and the customers developers must be prepared for the rapid pace.</p>
		
		<h3>Evolutionary Process Models</h3>
		
		<p>These models develop the final software system by iterative cumulative development.
		<br><img class="img2"src="uncus/mod_2/evolutionary.jpg" alt="Evolutionary Process Model" width="300" height="210" 
		title="The Evolutionary Process Method"/><br>
		<br><b>Rapid Prototyping</b> is sometimes used at the beginning of projects to improve the understanding of the customer requirements.
		 The prototype produced could either be a throw-away or extended to develop the entire system.
		 <br>
		 <img class="spiral"src="visual/mod_2/spiral.png" alt="The Spiral Model" width="400" height="300" 
		title="The Spiral Model"/>
		 
		
		<p class="concurrent"> In the <b>Concurrent Development Model</b>, all the activities in the process model exist concurrently in different states, for example, 'awaiting changes', 'none' and 'under development'. 
		This model descibes the software process to be implemented as a network of activities rather than a simple linear process.</p>
		<p><b>Component-Based Development</b> uses off-the-shelf software packages as the defining characteristic of the process.
		This is a software reuse approach and often leads to large reductions in cost and development time but depends on the nature and quality of the components library available.</p>
		
		<h3>Clean Room Software Engineering</h3>
		<p>This model uses formal methods in design and serves as the basis for identifying errors that might not be detected during the testing phase.
		This requires special mathematical skills and produces difficulties in communication to the customers.
		More details can be found <a href="http://www.dacs.dtic.mil/databases/url/key.hts?keycode=64">here.</a></p>
		
		<h3>Aspect-Oriented Software Development (AOSD)</h3>
		<p>AOSD is a new concept intended to model localised features, functions and information content that have impact across the software system.
		It is sometimes referred to as crosscutting concerns that go beyond mechanisms such as subroutines.
		Details on this new model are available <a href="http://aosd.net">here. </a></p>
		
		<h3>Agile Development</h3>
		<p>This is a method to compress and overlap the traditional life cycle phases as much as possible with close customer partnership.
		For more details on philosophy, see <a href="http://www.agilemanifesto.org">this</a>.<br>
		The main objective is rapid time to delivery. "Extreme Programming" is also a term that is associated with this strategy.
		Some say that agile development models are appropriate for web applications developers, a group that has tended to resist the discipline of software processes.</p>
	</div>
	<div class="mini_VARK_buttons">
		<form>
			<button class="v" formaction="mod_2_v.php">V</button>
			<button formaction="mod_2_a.php">A</button>
			<button formaction="mod_2_r.php">R</button>
			<button formaction="mod_2_k.php">K</button>
		</form>
	<p class="quiz_link"><a href="mod_2_quiz.php">Quiz</a></p>
	<!--Other things that'll help you as a visual learner-->
	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>