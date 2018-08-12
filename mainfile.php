
<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title> Dwit Picnic Registration </title></head>
	<body>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!--<div class="container">
  		<h1>DWIT <mark>Picnic</mark> Registration</h1>
  		
	</div>-->

		<div class="container">
		<div class="jumbotron">
			<img src="dwLogoWhite.png" width="250px" height="70px">
			
					</div>
	<div class="container" align="center" >	
  		<div class="col-lg-4 col-sm-6 col-md-4 col-xs-12">
			<h1>PICNIC FORM</h1>
		<form action="action.php" method="post">
  			<div class="form-group">
    		<label for="name">Student Name:</label>
    		<input type="text" class="form-control" id="name" name="student_name" required placeholder="Enter your name here.."> 
  			</div>
  			
   			<div class="form-group">
    		<label for="pwd">E-mail</label>
		    <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your E-mail here...">
  			</div>

  			<!-- THE RADIO BUTTONS-->
  			<h3>Food Preferences</h3>
  			
  			<div class="radio">
 			 <label><input type="radio" name="optradio" checked value="Veg">Veg</label>
			</div>

			<div class="radio">
  			<label><input type="radio" name="optradio" value="Non-Veg">Non-Veg</label>
			</div>

			
  			</div>
  			<!--THE RADIO BUTTONS-->

  			<!-- Batch Selection-->
  			<h3>Batch:</h3>
  			<div class="input-field col s12" >
   			 <select name="batchselect" >
      			<option value="" disabled selected>Choose your Batch	</option>
      			<option value="Batch 2018" >Batch 2018</option>
      			<option value="Batch 2019" >Batch 2019</option>
	  			<option value="Batch 2020" >Batch 2020</option>
	  			<option value="Batch 2021" >Batch 2021</option>
   			 </select>
    
  			</div>
  			<!-- batch Selection Code ends-->
  			</br>
  			<br>
  			<button type="submit" name="submit" class="btn btn-info">Submit</button> 
  			</div>
  
</form>

</div>

</div>

<style>
	.jumbotron{
		 
    background: linear-gradient(to bottom, #0066ff 0%, #00ccff 100%);
    background-size: cover;
    padding:10px 0 10px 0;
}


.container{
padding: 10px 0 20px 0;
background-image: url();
}
</style>

</div>


</body>
</html>