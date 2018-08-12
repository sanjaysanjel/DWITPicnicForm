<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Information Display</title>
</head>
<body>
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

<?php
/*
$just = $_POST['foodselect'];
if(empty($just))
{
	echo"NO SELECTION !";
}
else{
	$N=count($just);
	echo ("You selected $N foods");
	echo"<br>";
	$_SESSION["num"]=$N;
	for($i=0; $i<$N; $i++)
	{
		echo ($just[$i]."");
		echo"<br>";
		$new_array=array($just[$i]);
		
			}
			$_SESSION['foodselect']=$new_array;
			foreach($_SESSION['foodselect'] as $key=>$value)
    {
    // and print out the values
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
    }

}
/*	if(!empty($_POST['foodselect'])){
		foreach ($_POST['foodselect'] as $selected) {
			echo $selected."</br>";
		}
	
	}
} 
	
?>



</body>
</html>