
<!DOCTYPE html>
<html>
<head>
  <p>your quiz has been submitted</p>
  <?php
  if (isset($_POST['test']))
{
      $answer1 = $_POST["test"];
      $answer2 = $_POST["test"];
      $answer3 = $_POST["test"];
      $answer4 = $_POST["test"];
      $answer5 = $_POST["test"];
      $answer6 = $_POST["test"];
      $answer7 = $_POST["test"];
      $answer8 = $_POST["test"];
      $answer9 = $_POST["test"];
      $answer10 = $_POST["test"];

}
      $totalCorrect = 0;

      if ($answer1 == "$CORRECT") { $totalCorrect++; }
      if ($answer2 == "$CORRECT") { $totalCorrect++; }
      if ($answer3 == "$CORRECT") { $totalCorrect++; }
      if ($answer4 == "$CORRECT") { $totalCorrect++; }
      if ($answer6 == "$CORRECT") { $totalCorrect++; }
      if ($answer7 == "$CORRECT") { $totalCorrect++; }
      if ($answer8 == "$CORRECT") { $totalCorrect++; }
      if ($answer9 == "$CORRECT") { $totalCorrect++; }
      if ($answer10 == "$CORRECT") { $totalCorrect++; }

        // code...

        echo "<div id='results'>$totalCorrect / 10 correct</div>";

  ?>
</div>

</body>
</html>
