<html>
<head>
	<title>Module 2: Software Process Models</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_2.php">Module 2</a>
	</div>
	<div class="main">
		<h1>Module #2</h1>
		<h1>Software Process Models</h1>
		<h2>The Waterfall Model</h2>
		<p>It is a simple linear model that is considered a 'first approximation' of the activities needed.
		 Some versions provide feedback loops from each stage to the previous ones.
		 This method can only be used when all the customer requirements are known at the beginning of the project.
		 One problem of the waterfall method is that a working version of the system is only available late in the project.</p>
		<img src="uncus/mod_2/waterfall.jpg" alt="The Waterfall Method Process: requirements definition, architectural and detail design, implementation(programming), unit and integration testing, operation and maintenance" width="300" height="250" 
		title="The Waterfall Process Method"/>
		<br />
		
		<h2>Incremental Process Models</h2>
		<p>This builds on the waterfall method by adding incremental iteration processes.
		 This means that each function of the system can be treated as a separate system and developed in accordance with the waterfall model.
		 This means that the system can be delivered to the customer incrementally with each function delivered initially as a separately operating function.</p>
		<p>Another method that uses increments is Rapid Application Development (RAD).
		 It applies the software specification stage to the entire system but for software design and implementation stages the system is divided into team projects to enable development time to be scaled down to the range of two to three months.
		 To use this method, the system must be able to be modularized and the customers developers must be prepared for the rapid pace.</p>
		
		<h2>Evolutionary Process Models</h2>
		<p>These models develop the final software system by iterative cumulative development.
		 <br><b>Rapid Prototyping</b> is sometimes used at the beginning of projects to improve the understanding of the customer requirements.
		 The prototype produced could either be a throw-away or extended to develop the entire system.
		 <br><b>The Spiral Model</b> combines elements of the waterfall model and rapid prototyping to implement evolutionary development as shown in the diagram below.
		 Each path around the spiral represents a new more complete version of the system with a risk assessment each time around.
		 Each version can be viewed as a system prototype during any phase of the evolutionary development.
		<br><img src="uncus/mod_2/evolutionary.jpg" alt="Evolutionary Process Model: spiral going through the sections objectives, risk assessment, production and validation, next phase planning on each iteration" width="300" height="210" 
		title="The Evolutionary Process Model"/><br>
		<p>In the <b>Concurrent Development Model</b>, all the activities in the process model exist concurrently in different states, for example, 'awaiting changes', 'none' and 'under development'. 
		This model descibes the software process to be implemented as a network of activities rather than a simple linear process.
		<br><b>Component-Based Development</b> uses off-the-shelf software packages as the defining characteristic of the process.
		This is a software reuse approach and often leads to large reductions in cost and development time but depends on the nature and quality of the components library available.</p>
		
		<h2>Clean Room Software Engineering</h2>
		<p>This model uses formal methods in design and serves as the basis for identifying errors that might not be detected during the testing phase.
		This requires special mathematical skills and produces difficulties in communication to the customers.
		More details can be found <a href="http://www.dacs.dtic.mil/databases/url/key.hts?keycode=64">here.</a></p>
		
		<h2>Aspect-Oriented Software Development (AOSD)</h2>
		<p>AOSD is a new concept intended to model localised features, functions and information content that have impact across the software system.
		It is sometimes referred to as crosscutting concerns that go beyond mechanisms such as subroutines.
		Details on this new model are available <a href="http://aosd.net">here. </a></p>
		
		<h2>Agile Development</h2>
		<p>This is a method to compress and overlap the traditional life cycle phases as much as possible with close customer partnership.
		For more details on philosophy, see <a href="http://www.agilemanifesto.org">this</a>.<br>
		The main objective is rapid time to delivery. "Extreme Programming" is also a term that is associated with this strategy.
		Some say that agile development models are appropriate for web applications developers, a group that have tended to resist the discipline of software processes.</p>
	</div>
	<div class="mini_VARK_buttons">
		<form>
			<button formaction="mod_2_v.php">V</button>
			<button formaction="mod_2_a.php">A</button>
			<button formaction="mod_2_r.php">R</button>
			<button formaction="mod_2_k.php">K</button>
		</form>
		<p class="quiz_link"><a href="mod_2_quiz.php">Quiz</a></p>
	</div>
</body>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>