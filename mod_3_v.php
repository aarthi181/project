<html>
<head>
	<title>Module 3: Visual</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
	<link rel="stylesheet" type+"text/css" href="mod_3_vark.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_3.php">Module 3 >></a><a href="mod_3_v.php">Visual</a>
	</div>
	<div class="main">
		<h1>Module #3</h1>
		<h1>Software Process Activites</h1>
		<h2>Requirements Engineering</h2>
		<p>This is about communicating with the customer.
		The objective is to arrive at a written agreement describing the functionality of the software to be developed, which is referred to as the specification.
		The activities of this stage of the development life cycle are among the most difficult, but are also the most important.</p>
		
		<p>Projects frequently find themselves changing requirements throughout the development period.
		The later in the development process a requirement is changed, the higher the effort and cost involved.
		This means that the time spent, which could be considered excessive, is an excellent investment in risk reduction for the entire project.
		Many tools are used at this stage to increase the confidence in understanding the customer's requirements, including rapid protoyping, user scenarios and functions or feature lists.
		Modeling and design tools being brought into this phase is not unusual. It is also characterised by lengthy meeting between the developer and customer.</p>
		
		<h2>Requirements Analysis and Modelling</h2>
		<img src="visual/mod_3/main_goals.png" alt="This is done to define the operational characteristics of the software. Its main goals are: behavioural description of customer requirements emphasising the what over the how, foundation for the software design, operational system definition that can be used for validation after software development complete." width="600" height="400" title="Req Analysis and Mod"/>
		<p class="intro"> The following subactivities are identified the same way: </p>
		<img src="visual/mod_3/the_following.png" alt="Please refer to module 3 read/write page" width="1300" height="700"/>
		
		<h2>Architectural Engineering and Design</h2>
		<p>The design activity is the bridge between the software requirements and analysis models, and deliverable product construction. Design is the process of producing the 'blueprint' for the coding and testing. It also establishes software quality. The results of design activities are representations which can be assessed for quality.</p>
		
		<img src="visual/mod_3/the_list.png" alt="The list of frequently cited software quality attributes is an acronym for the following list: Functionality, Reliability, Usability, Performancce, Supportability." width="600" height="500"/>
		<p class="intro"> The following design concepts have been helpful in achieving software quality: </p>
		<br><img src="visual/mod_3/the_following2.png" alt="Please refer to module 3 read/write page" width="1300" height="800"/>
		
		<h2>Software Testing</h2>
		<img src="visual/mod_3/after_the.png" alt="Testing strategies are used to validate system requirements and detect errors in the system. Debugging is the process of finding the source of the errors for correction. Exhaustive testing is impractical therefore it is never known with certainty if all bugs have been detected. The absence of all errors can't be guaranteed by the testing processes. Testing usually happens at two phases, first at the component level and then at integration testing. Unit testing is usually done by the developer and integration testing by an independent test group. Testing strategies for conventionally designed software differ somewhat from those for OO systems." width="1300" height="300"/>
		<p>
		<b>Conventional software:</b> unit testing focuses on execution paths through component program logic with the goal of maximizing error detection by path coverage; whereas integration testing usually involves input and output values.</p>
		<b>Object-oriented software:</b> unit testing is done with classes, whose definition involves not only internal program logic but also attributes and operations as well as communication and collaboration.  Operations must be tested in the context of a class. Two approaches to integration testing of object-oriented systems are common, thread-based and use-based testing.
		<br>The <u>thread-based approach</u> tests the set of classes that respond to a given system input or event.
		<br><u>Use-based testing</u> begins with by testing classes that are relatively independent of all others and continues in stages with each stage defined by the addition of a layer of dependent classes until the entire system is encompassed. </p>
		<p>After unit and integration testing, the entire system is tested in accordance with customer requirements.  This final testing phase is usually called validation testing and includes alpha and beta tests.  Alpha tests are performed at the developer site and beta tests occur later at end user sites.  Final release of the software is scheduled after the beta tests are complete. </p>
		
		<h2>Product Metrics for Software</h2>
		<p>The use of objective measures of software development products as an empirical measure of quality is somewhat controversial in the software engineering community.  Some say that our lack of basic understanding of software justifies delaying the development and use of such metrics.  However, many metrics are available to help assess and guide analysis, design, source code development and testing. </p>
		<p>Some examples are given below:
		<br><img src="visual/mod_3/ana.png" alt="Analysis - Overall system size metric defines as a function of information in the analysis model. Design - Component level metrics that measure complexity. Source code - Length metric defined in terms of lines of code. Testing - coverage of the program as a directed graph." width="900" height="200"/>
	</div>
	<div class="mini_VARK_buttons">
		<form>
			<button class="v" formaction="mod_3_v.php">V</button>
			<button formaction="mod_3_a.php">A</button>
			<button formaction="mod_3_r.php">R</button>
			<button formaction="mod_3_k.php">K</button>
		</form>
	<p class="quiz_link"><a href="mod_3_quiz.php">Quiz</a></p>
	<!--Other things that'll help you as a visual learner-->
	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>