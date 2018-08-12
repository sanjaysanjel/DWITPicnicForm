<?php
session_start();
?>


<!DOCtype HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Information Display</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<div class="jumbotron">
<?php
//$student_name = $_POST["student_name"];
	echo"<br>";
	//$_SESSION["name"] = $student_name;
	echo"<h1>Student Information</h1>";
	echo"The name of the Student is: ".$_SESSION["name"];
		echo"<br>";
		//$food_pref=$_POST["optradio"];
		echo"<br>";
		//$_SESSION["food_pref"]=$food_pref;
		echo"The food preference is: ".$_SESSION["food_pref"];
		echo"<br>";
		//$batch=$_POST["batchselect"];
		//$_SESSION["batch"]=$batch;
		echo"The batch is: ".$_SESSION["batch"];
		echo"</br>The food is: ".$_SESSION["food2"];
		for($i=0; $i<3; $i++)
	{
		
		$_SESSION["foodorder"];
			}
?>
</div>
</body>
</html>
