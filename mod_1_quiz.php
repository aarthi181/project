<html>
<head>
<title>#1 Quiz</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="quiz.css" />
</head>
<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_1.php">Module 1 >></a><a href="mod_1_quiz.php">Quiz</a>
	</div>
	<div class="main">
		<h1>Module #1 Quiz</h1>
		<form action="grade.php" method="post" id="quiz">
			<ol>
				<li>
					<h3>Which of the following is an issue for large-scale software development today?</h3>
					
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
						<label for="question-1-answers-A">A) High cost of software development </label>
					</div>
					
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
						<label for="question-1-answers-B">B) Wasted resources</label>
					</div>
					
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
						<label for="question-1-answers-C">C) Ease of measuring progress during development</label>
					</div>
					
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
						<label for="question-1-answers-D">D) None of the above</label>
					</div>
				
				</li>
				
				<li>
				
					<h3>Which is the difference between building software and building hardware?</h3>
					
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
						<label for="question-2-answers-A">A) Software is tangible, hardware is not</label>
					</div>
					
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
						<label for="question-2-answers-B">B) Software industry has handbooks, others don't</label>
					</div>
					
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
						<label for="question-2-answers-C">C) Software systems don't wear out</label>
					</div>
					
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
						<label for="question-2-answers-D">D) None of the above</label>
					</div>
				
				</li>
				
				<li>
				
					<h3>What does software validation do?</h3>
					
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
						<label for="question-3-answers-A">A) system modification to meet continuing customer needs</label>
					</div>
					
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
						<label for="question-3-answers-B">B) functional requirements obtained from the user</label>
					</div>
					
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
						<label for="question-3-answers-C">C) Makes sure customer specifications are met</label>
					</div>
					
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
						<label for="question-3-answers-D">D) production of the software system as a product</label>
					</div>
				
				</li>
			</ol>
			<input type="submit" value="Submit Quiz" />
	
		</form>
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>