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
<style>
	.jumbotron{
		 
    background: linear-gradient(to bottom, #0066ff 0%, #00ccff 100%);
    background-size: cover;
    padding:10px 0 10px 0;
}
body {
  font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif;
  color: white;
}
h1, h2 {
  margin-bottom: .25em;
  font-weight: normal;
  text-align: center;
}
h2 {
  margin: .25em 0 2em;
  color: #aaa;
}
form {
  width: 7em;
  margin: 0 auto;
}
.txtcenter {
  margin-top: 4em;
  font-size: .9em;
  text-align: center;
  color: #aaa;
}
.copy {
 margin-top: 2em; 
}
.copy a {
 text-decoration: none;
 color: #4778d9;
}
</style>
</body>
</html>
