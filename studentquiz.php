<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>
        <form action="submitquiz.php"  class="register">

			<?php if(isset($_POST)==true && empty($_POST)==false):
				$chkbox = $_POST['chk'];
				$bus = $_POST['bus'];
				$day = $_POST['day'];
				$month = $_POST['month'];

				$type = $_POST['type'];
				$from = $_POST['from'];
				$to=$_POST['to'];

				$TFNAME=$_POST['TFNAME'];
        $BX_NAME=$_POST['BX_NAME'];
				$BX_a1=$_POST['BX_a1'];
				$BX_a2=$_POST['BX_a2'];
				$BX_a3=$_POST['BX_a3'];
        $BX_a4=$_POST['BX_a4'];

			?>
             <h1>iQuery Generated Quiz</h1>
			<fieldset class="row1">
                <legend>Quiz Information</legend>
				<p>
                    <label>Quiz Name
                    </label>
                    <input name="bus" type="text" readonly="readonly" value="<?php echo $bus ?>"/>
                    <label>Date of Quiz
                    </label>
					<input type="text" readonly="readonly" class="small" value="<?php echo $day ?>"/>
					<input type="text" readonly="readonly" class="small" value="<?php echo $month ?>"/>
					<input type="text" readonly="readonly" class="small" value="2013"/>
					<label>Quiz Type
                    </label>
                    <input  type="text" readonly="readonly" value="<?php echo $type ?>"/>

                </p>
                <p>
					<label>Class Name
                    </label>
                    <input name="from" type="text" readonly="readonly" value="<?php echo $from ?>"/>
					<label>Chapter/Section
                    </label>
					<input name="to" type="text" readonly="readonly" value="<?php echo $to ?>"/>
			<!--		<label>Quiz Type
                    </label>
					<input  type="text" readonly="readonly" value="<?php echo $root ?>"/>

        </p> -->


				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Questions
                </legend>
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>

						<tr>
							<p>
								<td >

								</td>
								<td>
									<label>MC Questions</label>
									<input type="text" readonly="readonly" name="<?php echo BX_NAME[$a]; ?>" value="<?php echo $BX_NAME[$a]; ?>">
								</td>
								<td>
									<label for="BX_a1">Answer A:</label>
                                     <input type="radio" name="<?php echo $a; ?>" value="answer<?php echo [$a]?>"> <?php echo $BX_a1[$a]; ?><br>
                                    <label for="BX_a2">Answer B: </label>
                                    <input type="radio" name="<?php echo $a; ?>" value="answer<?php echo [$a]?>"> <?php echo $BX_a2[$a]; ?><br>
                                     <label for="BX_a3">Answer C: </label>
                                    <input type="radio" name="<?php echo $a; ?>" value="answer<?php echo [$a]?>"> <?php echo $BX_a3[$a]; ?><br>
                                        <label for="BX_a4">Answer D: </label>
                                    <input type="radio" name="<?php echo $a; ?>" value="answer<?php echo [$a]?>"> <?php echo $BX_a4[$a]; ?><br>
                                </td>
							</p>
						</tr>
					<?php } ?>

                <table id="tfTable" class="form" border="1">
					<tbody>
					<?php foreach($TFNAME as $a => $b){ ?>

						<tr>

								<td>
									<label>True/False Question</label>
									<input type="text" readonly="readonly" name="<?php echo $a ; ?>" value="<?php echo $TFNAME[$a]; ?>">
								</td>
								<td>
                                    <input type="radio" name="tf<?php echo $a; ?>" value="True"> True <br>

                                    <input type="radio" name="tf<?php echo $a; ?>" value="False"> False <br>

                                </td>
							</p>
						</tr>
					<?php } ?>
					</tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">

				<div class="clear"></div>
            </fieldset>
            <fieldset class="row5">

                <p>
				<!--	<input class="submit" type="button" href="submitquiz.php" value="Submit Quiz">
   <a class="submit" href="submitquiz.php"/>Submit Quiz</a> -->
					<a class="submit" href="submitquiz.php"/>Submit Quiz</a>

                </p>
				<div class="clear"></div>
            </fieldset>
		<?php else: ?>
		<fieldset class="row1">
			<legend>Sorry</legend>
			 <p>Some things went wrong please try again.</p>
		</fieldset>
		<?php endif; ?>
			<div class="clear"></div>
        </form>
    </body>
	<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9046834;
var sc_invisible=1;
var sc_security="ec55ba17";
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free hit
counter" href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/9046834/0/ec55ba17/1/"
alt="free hit counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</html>
