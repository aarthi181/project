<html>
<head><title>All Quiz Results</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="quiz.css" />
</head>

<body>
<div class="nav_links">
<a href="try_it_yourself.php">Try It Yourself >></a><a href="quizzes.php">Quizzes >></a><a href="mod_all_quiz.php">All >></a><a href="grade_all.php">Results</a>
</div>
	<div class="main">
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
			$answer26 = $_POST['question-26-answers'];
			$answer27 = $_POST['question-27-answers'];
			$answer28 = $_POST['question-28-answers'];
			$answer29 = $_POST['question-29-answers'];
			$answer30 = $_POST['question-30-answers'];
			$answer31 = $_POST['question-31-answers'];
			$answer32 = $_POST['question-32-answers'];
			$answer33 = $_POST['question-33-answers'];
			$answer34 = $_POST['question-34-answers'];
			$answer35 = $_POST['question-35-answers'];
			$answer36 = $_POST['question-36-answers'];
			$answer37 = $_POST['question-37-answers'];
			$answer38 = $_POST['question-38-answers'];
			$answer39 = $_POST['question-39-answers'];
			$answer40 = $_POST['question-40-answers'];
			$answer41 = $_POST['question-41-answers'];
			$answer42 = $_POST['question-42-answers'];
			$answer43 = $_POST['question-43-answers'];
			$answer44 = $_POST['question-44-answers'];
			
			
			
			
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
			if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "C") { $totalCorrect++; }
			if ($answer7 == "B") { $totalCorrect++; }
			if ($answer8 == "B") { $totalCorrect++; }
			if ($answer9 == "D") { $totalCorrect++; }
			if ($answer10 == "A") { $totalCorrect++; }
            if ($answer11 == "C") { $totalCorrect++; }
            if ($answer12 == "D") { $totalCorrect++; }
			if ($answer13 == "D") { $totalCorrect++; }
			if ($answer14 == "B") { $totalCorrect++; }
			if ($answer15 == "A") { $totalCorrect++; }
			if ($answer16 == "D") { $totalCorrect++; }
			if ($answer17 == "A") { $totalCorrect++; }
			if ($answer18 == "B") { $totalCorrect++; }
			if ($answer19 == "C") { $totalCorrect++; }
			if ($answer20 == "A") { $totalCorrect++; }
			if ($answer21 == "C") { $totalCorrect++; }
			if ($answer22 == "B") { $totalCorrect++; }
			if ($answer23 == "C") { $totalCorrect++; }
			if ($answer24 == "B") { $totalCorrect++; }
			if ($answer25 == "D") { $totalCorrect++; }
			if ($answer26 == "D") { $totalCorrect++; }
			if ($answer27 == "A") { $totalCorrect++; }
			if ($answer28 == "D") { $totalCorrect++; }
			if ($answer29 == "D") { $totalCorrect++; }
			if ($answer30 == "A") { $totalCorrect++; }
			if ($answer31 == "C") { $totalCorrect++; }
			if ($answer32 == "C") { $totalCorrect++; }
			if ($answer33 == "C") { $totalCorrect++; }
			if ($answer34 == "D") { $totalCorrect++; }
			if ($answer35 == "C") { $totalCorrect++; }
            if ($answer36 == "D") { $totalCorrect++; }
            if ($answer37 == "D") { $totalCorrect++; }
			if ($answer38 == "D") { $totalCorrect++; }
			if ($answer39 == "A") { $totalCorrect++; }
			if ($answer40 == "D") { $totalCorrect++; }
			if ($answer41 == "D") { $totalCorrect++; }
            if ($answer42 == "E") { $totalCorrect++; }
            if ($answer43 == "B") { $totalCorrect++; }
			if ($answer44 == "C") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 44 correct</div>";
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