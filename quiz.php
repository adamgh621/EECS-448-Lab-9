<!DOCTYPE html>
<html>
<body>
 <div id="quizform">
        <?php  
            $answer1 = $_POST['q1'];
            $answer2 = $_POST['q2'];
            $answer3 = $_POST['q3'];
            $answer4 = $_POST['q4'];
            $answer5 = $_POST['q5'];

            
            echo "What is KU's Mascot?<br>";
            echo "Answer: Jayhawk <br>";
            echo "Your answer: " . $answer1 . "<br>";
            echo "<br>";


            echo "What color is the sky? <br>";
            echo "Answer: Blue <br>";
            echo "Your answer: " . $answer2 . "<br>";
            echo "<br>";


            echo "What is the largest country by area in South America? <br>";
            echo "Answer: Brazil <br>";
            echo "Your answer: " . $answer3 . "<br>";
            echo "<br>";


            echo "What is the capital of Italy? <br>";
            echo "Answer: Rome <br>";
            echo "Your answer: " . $answer4 . "<br>";
            echo "<br>";


            echo "Who is known for their contributions to Electricity? <br>";
            echo "Answer: Nikola Tesla <br>";
            echo "Your answer: " . $answer5 . "<br>";
            echo "<br>";


            $totalScore = 0;


            if ($answer1 == "Jayhawk") 
            { 
               $totalScore++; 
            }
            if ($answer2 == "Blue") 
            { 
               $totalScore++; 
            }
            if ($answer3 == "Brazil") 
            { 
               $totalScore++; 
            }
            if ($answer4 == "Rome") 
            { 
               $totalScore++; 
            }
            if ($answer5 == "Nikola Tesla")
            { 
               $totalScore++; 
            }     
            echo "Correct Answers: " . $totalScore . " / 5 <br>";
            $percentage =  ($totalScore / 5) * 100;
            echo "Score: " . $percentage . "% <br>";
        ?>
 </div>
</body>
</html>