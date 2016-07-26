<html>
<head>	
	<title>#3 Quiz Results</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="quiz.css" />
</head>

<body>
<div class="nav_links">
<a href="modules.php">Modules >></a><a href="mod_3.php">Module 3 >></a><a href="mod_3_quiz.php">Quiz >></a><a href="grade_3.php">Results</a>
</div>
	<div class="main">
		<h1>Module #3 Quiz</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
			$answer4 = $_POST['question-4-answers'];
			$answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
			$answer7 = $_POST['question-7-answers'];
			$answer8 = $_POST['question-8-answers'];
			$answer9 = $_POST['question-9-answers'];
			$answer10 = $_POST['question-10-answers'];
			$answer11 = $_POST['question-11-answers'];
			$answer12 = $_POST['question-12-answers'];
			$answer13 = $_POST['question-13-answers'];
			$answer14 = $_POST['question-14-answers'];
			$answer15 = $_POST['question-15-answers'];
			$answer16 = $_POST['question-16-answers'];
			$answer17 = $_POST['question-17-answers'];
			$answer18 = $_POST['question-18-answers'];
			$answer19 = $_POST['question-19-answers'];
			$answer20 = $_POST['question-20-answers'];
			$answer21 = $_POST['question-21-answers'];
			$answer22 = $_POST['question-22-answers'];
			$answer23 = $_POST['question-23-answers'];
			$answer24 = $_POST['question-24-answers'];
			$answer25 = $_POST['question-25-answers'];

			
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
			if ($answer4 == "D") { $totalCorrect++; }
			if ($answer5 == "B") { $totalCorrect++; }
			if ($answer6 == "A") { $totalCorrect++; }
			if ($answer7 == "D") { $totalCorrect++; }
			if ($answer8 == "A") { $totalCorrect++; }
			if ($answer9 == "B") { $totalCorrect++; }
			if ($answer10 == "C") { $totalCorrect++; }
			if ($answer11 == "A") { $totalCorrect++; }
			if ($answer12 == "C") { $totalCorrect++; }
			if ($answer13 == "B") { $totalCorrect++; }
			if ($answer14 == "C") { $totalCorrect++; }
			if ($answer15 == "B") { $totalCorrect++; }
			if ($answer16 == "D") { $totalCorrect++; }
			if ($answer17 == "D") { $totalCorrect++; }
			if ($answer18 == "A") { $totalCorrect++; }
			if ($answer19 == "D") { $totalCorrect++; }
			if ($answer20 == "D") { $totalCorrect++; }
			if ($answer21 == "A") { $totalCorrect++; }
			if ($answer22 == "C") { $totalCorrect++; }
			if ($answer23 == "C") { $totalCorrect++; }
			if ($answer24 == "C") { $totalCorrect++; }
			if ($answer25 == "D") { $totalCorrect++; }
			
            echo "<div id='results'>$totalCorrect / 25 correct</div>";
            
        ?>
	
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