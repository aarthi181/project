<html>
<head>
	<title>Module 5: Software Security</title>
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
		<h2>Software Security</h2>
		<p>Security is one of the most important issues in the computer field. Security challenges are frequently software problems. The weak points are the applications at the ends of the communications link and therefore represent the points of greatest vulnerability to attack.</p>
		<img src="visual/mod_5/trends.png" width="600" height="400"/>
		
		<h3>Can Security be Defined?</h3>
		<p>Security is a relative quantity and 100% security is unachievable. </p>
		
		<h3>Approaches to the Security Problem</h3>
		<p>Often software is developed in a highly compressed schedule in order to be first to market. When vulnerabilities are found, frequently as a result of attack, patches are developed and issued to the user community. There are many problems with this approach, a few have been displayed below:</p>		
		<img src="visual/mod_5/pen.png" width="1000" height="600"/>


		<p>The recommended approach is to incorporate software security as an engineering goal  throughout the software engineering life cycle. Since many of the issues of software security are issues of risk management, the spiral model of software development is often mentioned as appropriate, with the repetitive spiral refining and converging security considerations toward the final goal.  Some activities that should be added to each life cycle stage have been listed above in the graphic.</p>
		
		</blockquote><h3>Principles for Software Security</h3>
		<p>It has been said that 90% of security problems can be avoided if the following principles are followed:
		<img src="visual/mod_5/secure.png" width="700" height="500"/>

		</p>
		
		<h3>Some important Specific Software Security Issues</h3>
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