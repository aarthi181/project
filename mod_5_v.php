<html>
<head>
	<title>Module 5: Visual</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type+"text/css" href="mod_v_r.css" />
	<link rel="stylesheet" type+"text/css" href="mod_5_vark.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_5.php">Module 5>></a><a href="mod_5_v.php">Visual</a>
	</div>
	<div class="main">
		<h1>Module #5</h1>
		<h1>Software Security</h1>
		<p>Security is one of the most important issues in the computer field. Security challenges are frequently software problems. The weak points are the applications at the ends of the communications link and therefore represent the points of greatest vulnerability to attack.</p>
		<img src="visual/mod_5/trends.png" alt="Trends are often cited as introducing security risks into systems and contributing to the magnitude of the security problem today: The increasing complexity of systems make them more difficult to understand and hence more difficult to secure. Increasing access to applications through various computer network technologies adds considerably to the security risks. Software is being increasingly designed to be extensible with the incremental addition of functionality making it impossible to anticipate the kind of updates that may be downloaded." width="600" height="400"/>
		
		<h2>Can Security be Defined?</h2>
		<p>Security is a relative quantity and 100% security is unachievable. </p>
		
		<h2>Approaches to the Security Problem</h2>
		<p>Often software is developed in a highly compressed schedule in order to be first to market. When vulnerabilities are found, frequently as a result of attack, patches are developed and issued to the user community. There are many problems with this approach, a few have been displayed below:</p>		
		<img src="visual/mod_5/pen.png" alt="Penetrate and Patch: 1. Developers can only patch problems which they know about. Attackers may find problems that they never report to developers.
		2.Patches are rushed out as a result of market pressures on vendors, and often introduce new problems of their own to a system
		3. Patches often only fix the symptom of a problem, and do nothing to address the underlying cause
		4. Patches often go unapplied, because system administrators tend to be overworked and often do not wish to make changes to a system that works. It should also be noted that system administrators are often not security experts. Build security into the software development life cycle: Requirements: Add security specifications
Design: Develop threat models by viewing the system form an adversary's perspective and apply security design principles
Implementation: Add secure coding standards and language subsets
Testing: Add security test plans and use random input testing (e.g. Fuzz Testing or vulnerability analysis using penetration testing)
" width="1000" height="600"/>


		<p>The recommended approach is to incorporate software security as an engineering goal  throughout the software engineering life cycle. Since many of the issues of software security are issues of risk management, the spiral model of software development is often mentioned as appropriate, with the repetitive spiral refining and converging security considerations toward the final goal.  Some activities that should be added to each life cycle stage have been listed above in the graphic.</p>
		
		</blockquote><h2>Principles for Software Security</h2>
		<p>It has been said that 90% of security problems can be avoided if the following principles are followed:
		<img src="visual/mod_5/secure.png" alt="Secure the weakest link, practice defence in depth, fail securely, follow the principle of least privilege, compartmentalise, keep it simple, promote privacy, remember that hiding secrets is inherently difficult, be reluctant to truts, use your community resources." width="700" height="500"/>

		</p>
		
		<h2>Some important Specific Software Security Issues</h2>
		<p><blockquote><b>Language Selection</b></p>
		<p> Many factors influence the choice of a programming language to use for implementation. It is common for efficiency considerations to dominate the language selection process. One of the factors should be security considerations. For example, choosing the C programming language for efficiency should take into account the inherent security risks associated with a language that has no bounds checks on array and pointer references. The programmer must build these checks into the program code. C program efficiencies and low-level data manipulation capabilities come at the high risk of security vulnerabilities and very special diligence is required. Using a language like Java can greatly reduce these risks, since it performs bounds checking. However, the system requirements must tolerate a lower level run-time performance for this to be a viable option.</p>
		<p><b>Buffer Overflows</b></p>
		<p>Buffer Overflows as a security vulnerability have been discussed for 40 years and remains one of the most frequently reported instances of system attacks. A buffer overflow is a condition caused by a write operation into a fixed-size buffer in which the size of the data is larger than the size of the buffer. Most buffer overflows are the result of the properties of the C language mentioned in the last section above. This is the case with C++ as well.</p></p>
		</blockquote>
	</div>
	<div class="mini_VARK_buttons">
		<form>
			<button class="v" formaction="mod_5_v.php">V</button>
			<button formaction="mod_5_a.php">A</button>
			<button formaction="mod_5_r.php">R</button>
			<button formaction="mod_5_k.php">K</button>
		</form>
		<p class="quiz_link"><a href="mod_5_quiz.php">Quiz</a></p>
	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>