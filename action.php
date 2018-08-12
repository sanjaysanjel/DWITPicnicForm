
<?php
session_start();
?>

<?php

 
/*
	if($_POST["name"] = '')
		echo"Name is Empty !";
	elseif ($_POST["optradio"]='') 
			echo"No Food Preferences selected";
		elseif ($_POST["batchselect"]='') 
			echo" No Batch Selection Done !";
		
	}
	*/

if(isset($_POST["submit"])){
	if($_SESSION["name"] != '' || $_SESSION["food_pref"] != '' || $_SESSION["batch"] != ''){
	$student_name = $_POST["student_name"];
	//echo"<br>";
	$_SESSION["name"] = $student_name;
	//echo"The name of the Student is:".$_SESSION["name"];
		//echo"<br>";
		$food_pref=$_POST["optradio"];
		//echo"<br>";
		$_SESSION["food_pref"]=$food_pref;
		//echo"The food preference is:".$_SESSION["food_pref"];
		//echo"<br>";
		$batch=$_POST["batchselect"];
		$_SESSION["batch"]=$batch;
		//echo"The batch is".$_SESSION["batch"];
	}
		else{
			
			header("refresh:2, url=mainfile.php");
		}
	}
	
	
	
	?>
<!Doctype HTML>
<html>
<head><title>Foods Selection</title>
	</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
<h2> Please select the foods you prefer:</h2>
<form action="foods.php" method="POST">

<p>
    <input type="checkbox" id="test1" name="foodselect[]" value="Pulao" />
    <label for="test1">Pulao</label>
  </p>
  <p>
    <input type="checkbox" id="test2" name="foodselect[]" value="Paneer Sabji"/>
    <label for="test2">Paneer Sabji</label>
  </p>
  <p>
    <input type="checkbox" id="test3" name="foodselect[]" value="Chicken Curry" />
    <label for="test3">Chicken Curry</label>
  </p>
    <p>
      <input type="checkbox" id="test4"  name="foodselect[]" value="Mutton Curry" />
      <label for="test4">Mutton  Curry</label>
  </p>
 <p><input type="submit" value="Submit" class="silver-flat-button"></p>

</form>


</body>
</html>