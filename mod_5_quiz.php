<html>
<head>
	<title>#5 Quiz</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="quiz.css" />
</head>

<body>
	<div class="nav_links">
		<a href="modules.php">Modules >></a><a href="mod_5.php">Module 5 >></a><a href="mod_5_quiz.php">Quiz</a>
	</div>
	<div class="main">

		<h1>Module #5 Quiz</h1>
		<form action="grade_5.php" method="post" id="quiz">
            <ol>
                <li>
                    <h3>Which of the following are known to introduce security risks into systems?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) The increasing complexity of systems make them more difficult to understand and secure</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Increasing access to applications through various computer network technologies adds to the security risks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Software is being increasingly designed to be extensible with the incremental addition of functionality making it impossible to anticipate the kind of updates that may be downloaded</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) All of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which of the following isn't a problem with the Penetrate and Patch method approach to the security problem?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Patches are rushed out because of market pressures on vendors and often introduce new problems of their own to a system</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Developers can only patch problems which they know about. Attackers may find problems that they never report to developers</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Patches often only fix the symptom of a problem, and do nothing to address the underlying cause</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Patches often go unapplied because system administrators tend to be overworked and often don't wish to make changes to a system that works.</label>
                    </div>
					
					<div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-E" value="E" />
                        <label for="question-2-answers-E">E) System administrators are often not seurity experts</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is the recommended approach to build security into the software development life cycle?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Using community resources</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Incorporate software security as an engineering goal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) All of the above</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None of the above</label>
                    </div>
                
                </li>
				
                <li>
                
                    <h3>Which of the following is an important specific software security issue?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Language Selection</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Buffer Overflows</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) All of the above</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) None of the above</label>
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