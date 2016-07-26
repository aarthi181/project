<html>
<head>	
	<title>#2 Quiz Results</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="quiz.css" />
</head>

<body>
<div class="nav_links">
<a href="modules.php">Modules >></a><a href="mod_2.php">Module 2 >></a><a href="mod_2_quiz.php">Quiz >></a><a href="grade_2.php">Results</a>
</div>
	<div class="main">
		<h1>Module #2 Quiz</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
			$answer4 = $_POST['question-4-answers'];
			$answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
			
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
			if ($answer4 == "B") { $totalCorrect++; }
			if ($answer5 == "B") { $totalCorrect++; }
			if ($answer6 == "D") { $totalCorrect++; }
			
            
            echo "<div id='results'>$totalCorrect / 6 correct</div>";
            
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