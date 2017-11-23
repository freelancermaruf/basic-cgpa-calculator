<!DOCTYPE html>
<html>
<head>
	<title>Basic CGPA Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>CGPA Calculator</h1>
	
	<div class="form"> <form action=" " method="post">
		
		<label>Subject 1: </label> 
		<input type="number" name="cre1" placeholder="Credits"> 
		<input type="number" name="gre1" placeholder="Grade Points" step="0.01"> <br><br>

		<label>Subject 2: </label> 
		<input type="number" name="cre2" placeholder="Credits"> 
		<input type="number" name="gre2" placeholder="Grade Points" step="0.01"> <br><br>

		<label>Subject 3: </label> 
		<input type="number" name="cre3" placeholder="Credits"> 
		<input type="number" name="gre3" placeholder="Grade Points" step="0.01"> <br><br>

		<label>Subject 4: </label> 
		<input type="number" name="cre4" placeholder="Credits"> 
		<input type="number" name="gre4" placeholder="Grade Points" step="0.01"> <br><br>

		<label>Subject 5: </label> 
		<input type="number" name="cre5" placeholder="Credits"> 
		<input type="number" name="gre5" placeholder="Grade Points" step="0.01"> <br><br>

		<label>Subject 6: </label> 
		<input type="number" name="cre6" placeholder="Credits"> 
		<input type="number" name="gre6" placeholder="Grade Points" step="0.01"> <br><br>

		<label>Subject 7: </label> 
		<input type="number" name="cre7" placeholder="Credits"> 
		<input type="number" name="gre7" placeholder="Grade Points" step="0.01"> <br><br>

		<label>Subject 8: </label> 
		<input type="number" name="cre8" placeholder="Credits"> 
		<input type="number" name="gre8" placeholder="Grade Points" step="0.01"> <br><br><br><br>
		<input type="submit" name="submit" value="Calculate My CGPA"> 
		
	</form> 


<?php 
ini_set('display_errors', 'off');
	$credit1 = 0; 
	$credit2 = 0; 
	$credit3 = 0; 
	$credit4 = 0; 
	$credit5 = 0; 
	$credit6 = 0; 
	$credit7 = 0; 
	$credit8 = 0; 
	$grade1 = 0;
	$grade2 = 0;
	$grade3 = 0;
	$grade4 = 0;
	$grade5 = 0;
	$grade6 = 0;
	$grade7 = 0;
	$grade8 = 0;
	
	if (isset($_POST["submit"])){

		if (!empty($_POST["cre1"])) {
			$credit1 = $_POST["cre1"];
		}
		if (!empty($_POST["cre2"])) {
			$credit2 = $_POST["cre2"];
		}
		if (!empty($_POST["cre3"])) {
			$credit3 = $_POST["cre3"];
		}
		if (!empty($_POST["cre4"])) {
			$credit4 = $_POST["cre4"];
		}
		if (!empty($_POST["cre4"])) {
			$credit4 = $_POST["cre4"];
		}
		if (!empty($_POST["cre5"])) {
			$credit5 = $_POST["cre5"];
		}
		if (!empty($_POST["cre6"])) {
			$credit6 = $_POST["cre6"];
		}
		if (!empty($_POST["cre7"])) {
			$credit7 = $_POST["cre7"];
		}
		if (!empty($_POST["cre8"])) {
			$credit8 = $_POST["cre8"];
		}
		if (!empty($_POST["gre1"])) {
			$grade1 = $_POST["gre1"];
		}
		if (!empty($_POST["gre2"])) {
			$grade2 = $_POST["gre2"];
		}
		if (!empty($_POST["gre3"])) {
			$grade3 = $_POST["gre3"];
		}
		if (!empty($_POST["gre4"])) {
			$grade4 = $_POST["gre4"];
		}
		if (!empty($_POST["gre5"])) {
			$grade5 = $_POST["gre5"];
		}
		if (!empty($_POST["gre6"])) {
			$grade6 = $_POST["gre6"];
		}
		if (!empty($_POST["gre7"])) {
			$grade7 = $_POST["gre7"];
		}
		if (!empty($_POST["gre8"])) {
			$grade8 = $_POST["gre8"];
		}
		
	$sub1= $credit1 * $grade1;
	$sub2= $credit2 * $grade2;
	$sub3= $credit3 * $grade3;
	$sub4= $credit4 * $grade4;
	$sub5= $credit5 * $grade5;
	$sub6= $credit6 * $grade6;
	$sub7= $credit7 * $grade7;
	$sub8= $credit8 * $grade8;

	$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6 + $sub7 + $sub8;
	$totalcredit = $credit1 + $credit2 + $credit3 + $credit4 + $credit5 + $credit6 + $credit7 + $credit8;
	$cgpa = $total / $totalcredit;
	} ?>
	
	<p> <br><strong> You have got <input type="textarea" name="cgpa" value="<?php echo "$cgpa";?>" size= "4"></strong></p></div>

</body>
</html>