<html>
<head>
	<title>Module 3: Software Process Activities</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_3.php">Module 3</a>
	</div>
	<div class="main">
		<h1>Module #3</h1>
		<h1>Software Process Activities</h1>
		<h2>Requirements Engineering</h2>
		<p>This is about communicating with the customer.
		The objective is to arrive at a written agreement describing the functionality of the software to be developed, which is referred to as the specification.
		The activities of this stage of the development life cycle are among the most difficult, but are also the most important.</p>
		<p>Developing a clear understanding of what the customer needs is a classic challenge and projects frequently find themselves changing requirements throughout the development period.
		The later in the development process a requirement is changed, the higher the effort and cost involved.
		This means that the time spent, which could be considered excessive, is an excellent investment in risk reduction for the entire project.
		Many tools are used at this stage to increase the confidence in understanding the customer's requirements, including rapid protoyping, user scenarios and functions or feature lists.
		Modeling and design tools being brought into this phase is not unusual. It is also characterised by lengthy meeting between the developer and customer.</p>
		
		<h2>Requirements Analysis and Modelling</h2>
		<p>This is done to define the operational characteristics of the software. Its main goals are the following:
			<ul>
				<li>behavioural description of customer requirements emphasising the <i>what</i> over the <i>how</i>.</li>
				<li>foundation for the software design</li>
				<li>operational system definition that can be used for system validation after the software development is complete</li>
			</ul>
		</p>
		<p>The following subactivities are identified using this same method:</p>
		<blockquote><h3>Domain Analysis</h3>
		<p>Reusability is an important goal in software development as it reduces development costs, increases reliability and reduces development time.
		Domain Analysis is the process of identifying patterns that can be reused.
		These patterns can be any common functions or features that have the potential for broad use across an application domain.
		This is typically a class of problem such as financial, medical or aerospace; however the broader the reuse, the better.</p>
		<h3>Data Modelling</h3>
		<p>Analysis modelling sometimes begins with the identification of all the data objects that are to be processed in the system and the relationships between these objects.
		Data modelling is used for large database and information systems applications.</p>
		<h3>Object Oriented Analysis</h3>
		<p>The object-oriented (OO) approach to analysis represents the latest 'paradigm shift' in analysis methodology and is epitomised by the Java language at the implementation stage.</p>
		<p>Some factors that make this approach popular have been mentioned below:</p>
		<p>
			<ul>
				<li>Customers can understand OO models with no programming knowledge thus facilitating the all-important early phases of communication.</li>
				<li>OO languages promote code reuse and programmer productivity</li>
				<li>The OO design and analysis methods are accomodating to change</li>
			</ul>
		</p>
		<p>The OO approach is based on modelling of the problem domain using classes and objects:
		<br><u>Class:</u> defines the data and procedural abstractions for the information content and behaviour of some entity.<br>
		<u>Method:</u> representation of one of the behaviours of a class.<br>
		<u>Object:</u> instance of a specific class. Objects can inherit the attributes and operations defined for a class. Classes are sometimes illustrated as 'cookie cutters' and the associated objects and 'cookies'.
		<p>The goal of object-oriented analysis is the design of all classes and associated methods that are appropriate for the system being developed.</p>
		<p>The unified modelling language (UML) has been developed for the modelling and development of object-oriented (OO) systems.
		It has become an industry standard for OO development.
		Click <a href="http://www.uml.org">here</a> for more details.</p><br>
		<h3>Scenario-based modelling</h3>
		<p>End-user involvement in a software project is critical to its success.
		Scenario-based modelling provides mechanisms for capturing information on how end-users desire to interact with the system.
		UML provides support for the development of interaction scenarios that begin with writing use-cases that describe the use of the system by a specific end-user.
		The dynamics of these use-cases can be represented in UML activity diagrams similar to flow charts.
		More complex interactions can be captured in UML swimlane diagrams that can model concurrent activities.</p>
		<h3>Flow oriented Modelling</h3>
		<p>The input-process-output data flow diagrams (DFD) continue to be a very popular analysis modelling tool and can be used to augment UML diagrams.
		Data flow can be modeled in a hierarchal fashion with DFDs with higher level context diagrams being refined with greater detailed DFDs at lower levels.</p>
		<h3>Dynamic Modelling</h3>
		<p>After static data and attribute relationships have been established, behavioural models can be created to represent the system response to external events.
		Use-cases can be used to identify events and UML sequence diagrams can be used to model how events trigger transitions from one object to another.</p>
		</blockquote>
		
		<h2>Architectural Engineering and Design</h2>
		<p>The design activity is the bridge between the software requirements and analysis models, and deliverable product construction.
		Design is the process of producing the 'blueprint' for the coding and testing.
		It also establishes software quality. The results of design activities are representations which can be assessed for quality.</p>
		<p>The list of frequently cited software quality attributes is sometimes called FRUPS, an acronym for the following list:
			<ul>
				<li>Functionality</li>
				<li>Reliability</li>
				<li>Usability</li>
				<li>Performance</li>
				<li>Supportability</li>
			</ul>
		</p>
		<p>The following design concepts have been helpful in achieving software quality:</p>
		<blockquote><h3>Abstraction</h3>
		<p>When developing an architectual design of a complex system, many levels of abstraction are needed to describe the system.
		Higher levels contain fewer details and lower levels provide increasingly more system information.
		Procedural abstractions contain instructions but suppress details. Data abstractions refer to data objects and their properties.</p>
		<h3>Modularity</h3>
		<p>The strategy of designing a system as a collection of integrated modules is necessary for system understanding.</p>
		<h3>Information Hiding</h3>
		<p>Many architectual designs are possible for a given project.
		Application of the principle of information hiding in the development a modularization is known to increase quality is defined by the FRUPS attributes.
		The idea is to define module boundaries so that local information is encapsulated and hidden from its outside world.
		Module interfaces are designed to communicate only information that is essential to invoking the functionality of the module.
		Careful application of this principle pays large dividends during the testing and maintenance phases of the life of the system.</p>
		<h3>Functional Independence</h3>
		<p>Modules that are designed to be functionally independent and have simple interfaces with the remaining system are known to be easier to develop, test and maintain.
		Two criteria for assessing independence are cohesion and coupling, measures of singleness of function and intermodule connectivity, respectively.
		High cohesion and low coupling contribute to higher quality.</p>
		<h3>Refinement</h3>
		<p>The design process is sometimes called a top-down step-wise refinement of the top level system abstraction to successive lower levels of abstraction by the application of the above modularization principles. Modules are created by hierarchal decomposition. </p>
		<h3>Refactoring</h3>
		<p>This activity is usually specific to agile methods. It refers to the internal redesign or restructuring of a component or subsystem in ways that improve its quality and performance.</p>
		<h3>Design and Reuse of Patterns</h3>
		<p>As with other more mature engineering disciplines, design decisions should be approached with the mindset that design patterns used in the past should be considered first rather than proceeding with a design derived from the uniqueness of the requirements of the particular project.
		If patterns of the past do not seem to be suitable, creating new ones should be the next level of consideration and contributing to the pattern library for the use of future projects. Design patterns range from the architectural level down to component detail design.</p>
		<h3>Component Level Design</h3>
		<p>This describes the data structures, interfaces and algorithms.
		It can be represented in a programming language, but is often described in some other intermediate representation such as a program design language (PDL) 
		for conventional module design and the Object Constraint Language (OCL) in the object-oriented design world.</p>
		<h3>User Interface Design</h3>
		<p>A common failure of software projects is to spend too little time communicating with the user.  It is easy for software experts to fall into the subconscious trap of “knowing what is good for the user”.  What may seem to be “clearly good for the user” is all too frequently not the case from the perspective of the user herself.  The use of user scenarios and very early and iterative prototype screen designs can help to assure that the user is being understood.  It has been said that you should plan on building one to throw away.  Three good guidelines are the following:
			<ul>
				<li>Put the user in control</li>
				<li>Reduce the user's memory load</li>
				<li>Make the interface consistent</li>
			</ul>
		</p>
		
		</blockquote>
		<h2>Software Testing</h2>
		<p>After the software system is coded into a deliverable product, testing strategies are used to validate system requirements.  Testing strategies are designed to detect errors in the system.  Debugging is the process of finding the source of the errors for correction. Exhaustive testing is impractical. Therefore, no matter how much testing is done, it is never known with certainty if all bugs have been detected.  Since testing is a process of detecting the presence of errors, the absence of all errors cannot be guaranteed by the testing process.  A high percentage of project resources are expended on the testing phase. Testing usually proceeds in two phases, first at the component level sometimes called unit testing.  Unit testing is followed by integration testing in which increasingly larger groups of components are tested culminating in the total system.  Unit testing is usually done by the developer and integration testing by an independent test group.  Testing strategies for conventionally designed software differ somewhat from those for object-oriented systems.</p>
		<h3>Conventional software:</h3> 
		<p>unit testing focuses on execution paths through component program logic with the goal of maximizing error detection by path coverage; whereas integration testing usually involves input and output values.</p>
		<h3>Object-oriented software:</h3> 
		<p>unit testing is done with classes, whose definition involves not only internal program logic but also attributes and operations as well as communication and collaboration.  Operations must be tested in the context of a class. Two approaches to integration testing of object-oriented systems are common, thread-based and use-based testing.  The thread-based approach tests the set of classes that respond to a given system input or event.  Use-based testing begins with by testing classes that are relatively independent of all others and continues in stages with each stage defined by the addition of a layer of dependent classes until the entire system is encompassed. </p>
		<p>After unit and integration testing, the entire system is tested in accordance with customer requirements.  This final testing phase is usually called validation testing and includes alpha and beta tests.  Alpha tests are performed at the developer site and beta tests occur later at end user sites.  Final release of the software is scheduled after the beta tests are complete. </p>
		
		<h2>Product Metrics for Software</h2>
		<p>The use of objective measures of software development products as an empirical measure of quality is somewhat controversial in the software engineering community.  Some say that our lack of basic understanding of software justifies delaying the development and use of such metrics.  However, many metrics are available to help assess and guide analysis, design, source code development and testing. </p>
		<p>Some examples are given below:
		<br><u>Analysis:</u> overall system size metric defined as a function of information in the analysis model.
		<br><u>Design:</u> component level metrics that measure complexity
		<br><u>Source code:</u> length metric defined in terms of lines of code
		<br><u>Testing:</u> coverage of the program as a directed graph</p>
	</div>
		<div class="mini_VARK_buttons">
		<form>
			<button formaction="mod_3_v.php">V</button>
			<button formaction="mod_3_a.php">A</button>
			<button formaction="mod_3_r.php">R</button>
			<button formaction="mod_3_k.php">K</button>
		</form>
		<p class="quiz_link"><a href="mod_3_quiz.php">Quiz</a></p>
	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>