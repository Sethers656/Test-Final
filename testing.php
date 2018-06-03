<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<?php if(isset($_POST)==true && empty($_POST)==false):
$CORRECT=$_POST['CORRECT'];

?>

	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>

        <?php

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

						}

            echo "<div id='results'>$totalCorrect / 10 correct</div>";

        ?>
	<?php endif; ?>
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

</html>
