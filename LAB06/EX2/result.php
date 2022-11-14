<!DOCTYPE html>
<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>Result</title>
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Result</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "Green Bay") { $totalCorrect++; }
            if ($answer2 == "meerkat") { $totalCorrect++; }
            if ($answer3 == "900 degrees") { $totalCorrect++; }
            if ($answer4 == "plantlife") { $totalCorrect++; }
            if ($answer5 == "Ohio") { $totalCorrect++; }
            
            echo "<p>1) Which NFL city has the smallest population?</p>";
            echo "<p> Your answer: $answer1</p>";
            echo "<p> Correct Answer: Green Bay  </p>";
            echo "<br>";

            echo "<p>2) In the movie The Lion King, what kind of animal is Timon?</p>";
            echo "<p> Your answer: $answer2</p>";
            echo "<p> Correct Answer: meerkat </p>";
            echo "<br>";

            echo "<p>3) What is the measure of all of the interior angles of a heptagon?</p>";
            echo "<p> Your answer: $answer3</p>";
            echo "<p> Correct Answer: 900 degrees </p>";
            echo "<br>";

            echo "<p>4) Which one of these is not an agent of erosion?</p>";
            echo "<p> Your answer: $answer4</p>";
            echo "<p> Correct Answer: plantlife </p>";
            echo "<br>";

            echo "<p>5) Which American state is known as the Buckeye State?</p>";
            echo "<p> Your answer: $answer5</p>";
            echo "<p> Correct Answer: Ohio </p>";
            echo "<br>";

            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo 'Your score: ' . $totalCorrect / 5 *100 . '% <br>'; 

        ?>
	
	</div>
 
</body>
 
</html>