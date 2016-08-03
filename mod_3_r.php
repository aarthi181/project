<html>
<head>
	<title>Module 3: Read/Write</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
	<link rel="stylesheet" type+"text/css" href="mod_3_vark.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_3.php">Module 3 >></a><a href="mod_3_r.php">Read/Write</a>
	</div>
	<div class="main">
		<h1>Module #3</h1>
		<h1>Software Process Activities</h1>
		<h2>Requirements Engineering</h2>
		<p class="un">This is about communicating with the customer.
		The objective is to arrive at a written agreement describing the functionality of the software to be developed, which is referred to as the specification.
		The activities of this stage of the development life cycle are among the most difficult, but are also the most important.</p>
		<p class="un">Projects frequently find themselves changing requirements throughout the development period.
		The later in the development process a requirement is changed, the higher the effort and cost involved.
		This means that the time spent, which could be considered excessive, is an excellent investment in risk reduction for the entire project.
		Many tools are used at this stage to increase the confidence in understanding the customer's requirements, including rapid protoyping, user scenarios and functions or feature lists.
		Modeling and design tools being brought into this phase is not unusual. It is also characterised by lengthy meething between the developer and customer.</p>
		
		<h2>Requirements Analysis and Modelling</h2>
		<p>This is done to define the operational characteristics of the software. Its main goals are the following:
			<ul>
				<li>behavioural description of customer requirements emphasising the <i>what</i> over the <i>how</i>.</li>
				<li>foundation for the software design</li>
				<li>operational system definition that can be used for system validation after the software development is complete</li>
			</ul>
		</p>
		<p>The following subactivities are identified using this same method:</p>
			<ul>
				<li><h3>Domain Analysis</h3></li>
					<ul>
						<li>Reusability is an important goal in software development as it reduces development costs, increases reliability and reduces development time.</li>
						<li>Domain Analysis is the process of identifying patterns that can be reused.</li>
						<li>These patterns can be any common functions or features that have the potential for broad use across an application domain.</li>
						<li>This is typically a class of problem such as financial, medical or aerospace; however the broader the reuse, the better.</li>
					</ul>
				<li><h3>Data Modelling</h3></li>
					<ul>
						<li>Analysis modelling sometimes begins with the identification of all the data objects that are to be processed in the system and the relationships between these objects.</li>
						<li>Data modelling is used for large database and information systems applications.</li>
					</ul>
				<li><h3>Object Oriented Analysis</h3></li>
					<ul>
						<li>The object-oriented (OO) approach to analysis represents the latest 'paradigm shift' in analysis methodology and is epitomised by the Java language at the implementation stage.</li>
						<p>Some factors that make this approach popular have been mentioned below:
							<ul>
								<li>Customers can understand OO models with no programming knowledge thus facilitating the all-important early phases of communication.</li>
								<li>OO languages promote code reuse and programmer productivity</li>
								<li>The OO design and analysis methods are accomodating to change</li>
							</ul>
						</p>
						<li>The OO approach is based on modelling of the problem domain using classes and objects:
							<ul>
								<li><u>Class:</u> defines the data and procedural abstractions for the information content and behaviour of some entity.</li>
								<li><u>Method:</u> representation of one of the behaviours of a class.</li>
								<li><u>Object:</u> instance of a specific class. Objects can inherit the attributes and operations defined for a class. Classes are sometimes illustrated as 'cookie cutters' and the associated objects and 'cookies'.</li>
							</ul>
						</li>
						<li>The goal of object-oriented analysis is the design of all classes and associated methods that are appropriate for the system being developed.</li>
						<li>The unified modelling language (UML) has been developed for the modelling and development of object-oriented (OO) systems.
						It has become an industry standard for OO development.
						Click <a href="http://www.uml.org">here</a> for more details.</li>
					</ul>
				<li><h3>Scenario-based modelling</h3></li>
					<ul>
						<li>End-user involvement in a software project is critical to its success.</li>
						<li>Scenario-based modelling provides mechanisms for capturing information on how end-users desire to interact with the system.</li>
						<li>UML provides support for the development of interaction scenarios that begin with writing use-cases that describe the use of the system by a specific end-user.</li>
						<li>The dynamics of these use-cases can be represented in UML activity diagrams similar to flow charts.</li>
						<li>More complex interactions can be captured in UML swimlane diagrams that can model concurrent activities.</li>
					</ul>
				 <li><h3>Flow oriented Modelling</h3></li>
					<ul>
						<li>The input-process-output data flow diagrams (DFD) continue to be a very popular analysis modelling tool and can be used to augment UML diagrams.</li>
						<li>Data flow can be modeled in a hierarchal fashion with DFDs with higher level context diagrams being refined with greater detailed DFDs at lower levels.</li>
					</ul>
				<li><h3>Dynamic Modelling</h3></li>
					<ul>
						<li>After static data and attribute relationships have been established, behavioural models can be created to represent the system response to external events.</li>
						<li>Use-cases can be used to identify events and UML sequence diagrams can be used to model how events trigger transitions from one object to another.</li>
					</ul>
			</ul>
		<h2>Architectural Engineering and Design</h2>
		<p class="un">The design activity is the bridge between the software requirements and analysis models, and deliverable product construction.
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
		<ul>
			<li><h3>Abstraction</h3></li>
				<ul>
					<li>When developing an architectual design of a complex system, many levels of abstraction are needed to describe the system.</li>
					<li>Higher levels contain fewer details and lower levels provide increasingly more system information.</li>
					<li>Procedural abstractions contain instructions but suppress details. Data abstractions refer to data objects and their properties.</li>
				</ul>
			<li><h3>Modularity</h3></li>
				<p>The strategy of designing a system as a collection of integrated modules is necessary for system understanding.</p>
			<li><h3>Information Hiding</h3></li>
				<ul>
					<li>Many architectual designs are possible for a given project.</li>
					<li>Application of the principle of information hiding in the development a modularization is known to increase quality is defined by the FRUPS attributes.</li>
					<li>The idea is to define module boundaries so that local information is encapsulated and hidden from its outside world.</li>
					<li>Module interfaces are designed to communicate only information that is essential to invoking the functionality of the module.</li>
					<li>Careful application of this principle pays large dividends during the testing and maintenance phases of the life of the system.</li>
				</ul>
			<li><h3>Functional Independence</h3></li>
				<ul>
					<li>Modules that are designed to be functionally independent and have simple interfaces with the remaining system are known to be easier to develop, test and maintain.</li>
					<li>Two criteria for assessing independence are cohesion and coupling, measures of singleness of function and intermodule connectivity, respectively.</li>
					<li>High cohesion and low coupling contribute to higher quality.</li>
				</ul>
			<li><h3>Refinement</h3></li>
				<p>The design process is sometimes called a top-down step-wise refinement of the top level system abstraction to successive lower levels of abstraction by the application of the above modularization principles. Modules are created by hierarchal decomposition. </p>
			<li><h3>Refactoring</h3></li>
				<p>This activity is usually specific to agile methods. It refers to the internal redesign or restructuring of a component or subsystem in ways that improve its quality and performance.</p>
			<li><h3>Design and Reuse of Patterns</h3></li>
				<ul>
					<li>As with other more mature engineering disciplines, design decisions should be approached with the mindset that design patterns used in the past should be considered first rather than proceeding with a design derived from the uniqueness of the requirements of the particular project.</li>
					<li>If patterns of the past do not seem to be suitable, creating new ones should be the next level of consideration and contributing to the pattern library for the use of future projects. Design patterns range from the architectural level down to component detail design.</li>
				</ul>
			<li><h3>Component Level Design</h3></li>
				<ul>
					<li>This describes the data structures, interfaces and algorithms.</li>
					<li>It can be represented in a programming language, but is often described in some other intermediate representation such as a program design language (PDL) for conventional module design and the Object Constraint Language (OCL) in the object-oriented design world.</li>
				</ul>
			<li><h3>User Interface Design</h3></li>
				<ul>
					<li>A common failure of software projects is to spend too little time communicating with the user.</li>
					<li>It is easy for software experts to fall into the subconscious trap of “knowing what is good for the user”.  What may seem to be “clearly good for the user” is all too frequently not the case from the perspective of the user themselves.</li>
					<li>The use of user scenarios and very early and iterative prototype screen designs can help to assure that the user is being understood.</li>
					<li>It has been said that you should plan on building one to throw away.</li>
				</ul>
				<p>Three good guidelines are the following:
					<ul>
						<li>Put the user in control</li>
						<li>Reduce the user's memory load</li>
						<li>Make the interface consistent</li>
					</ul>
				</p>
		</ul>
		<h2>Software Testing</h2>
			<ul>
				<li>After the software system is coded into a deliverable product, testing strategies are used to validate system requirements.</li>
				<li>Testing strategies are designed to detect errors in the system.</li>
				<li>Debugging is the process of finding the source of the errors for correction.</li>
				<li>Exhaustive testing is impractical. Therefore, no matter how much testing is done, it is never known with certainty if all bugs have been detected.</li>
				<li>Since testing is a process of detecting the presence of errors, the absence of all errors cannot be guaranteed by the testing process.  A high percentage of project resources are expended on the testing phase.</li>
				<li>Testing usually proceeds in two phases, first at the component level sometimes called unit testing.  Unit testing is followed by integration testing in which increasingly larger groups of components are tested culminating in the total system.  Unit testing is usually done by the developer and integration testing by an independent test group.</li>
				<li>Testing strategies for conventionally designed software differ somewhat from those for object-oriented systems.</li>
			</ul>
		<p><h3>Conventional software:</h3>
		Unit testing focuses on execution paths through component program logic with the goal of maximizing error detection by path coverage; whereas integration testing usually involves input and output values.</p>
		<p><h3>Object-oriented software:</h3>
		Unit testing is done with classes, whose definition involves not only internal program logic but also attributes and operations as well as communication and collaboration.  Operations must be tested in the context of a class. Two approaches to integration testing of object-oriented systems are common, thread-based and use-based testing.  The thread-based approach tests the set of classes that respond to a given system input or event.  Use-based testing begins with by testing classes that are relatively independent of all others and continues in stages with each stage defined by the addition of a layer of dependent classes until the entire system is encompassed.<br>
		<p>After unit and integration testing, the entire system is tested in accordance with customer requirements.  This final testing phase is usually called validation testing and includes alpha and beta tests.  Alpha tests are performed at the developer site and beta tests occur later at end user sites.  Final release of the software is scheduled after the beta tests are complete. </p>
		
		<h2>Product Metrics for Software</h2>
		<p class="un">The use of objective measures of software development products as an empirical measure of quality is somewhat controversial in the software engineering community.  Some say that our lack of basic understanding of software justifies delaying the development and use of such metrics.  However, many metrics are available to help assess and guide analysis, design, source code development and testing. </p>
		<p>Some examples are given below:
			<ul>
				<li>&laquo;Analysis&raquo; overall system size metric defined as a function of information in the analysis model</li>
				<li>&laquo;Design&raquo; component level metrics that measure complexity</li>
				<li>&laquo;Source code&raquo; length metric defined in terms of lines of code</li>
				<li>&laquo;Testing&raquo; coverage of the program as a directed graph</li>
			</ul>
		</p>
	</div>
	<div class="mini_VARK_buttons">
		<form>
			<button formaction="mod_3_v.php">V</button>
			<button formaction="mod_3_a.php">A</button>
			<button class="r" formaction="mod_3_r.php">R</button>
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