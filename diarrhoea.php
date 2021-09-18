<?php include "connect.php" ?>
<!DOCTYPE html>
<html>
<head>
	<style>	
	h1{
      color: white;
      text-align: center;
      font-size: 60px;
	}	

	h2{
		color: white;
		text-align: center;
		font-size: 35px;
	}

	h3{
		font-size: 25px;
	}

	body {
     background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
      font-family: Times New Roman;
    }

    .boxed{
    font-size: 18px;
    text-align: center;
  	background-color: powderblue;
  	width: 60%;
  	padding:0px;
  	border: 5px solid gray;
  	display: block;
  	margin-left: auto;
  	margin-right: auto; 
    }

    .button{
  background-color: black;
  border-radius: 20px;
  width: 10%;
  border: none;
  color: white;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 30px 5px;
  cursor: pointer;
}

.button:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
}

.button1{
  background-color: black;
  border-radius: 20px;
  width: 10%;
  border: none;
  color: white;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 30px 5px;
  cursor: pointer;
}

.button1:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
}
	</style>
	<title>Diarrhoea Symptoms</title>
</head>
<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
<form name = "confirm" method = "POST">
<h2>Diarrhoea Symptoms</h2>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	Are you having abdominal pains?<br></br>
	<input type="radio" name="abdominal" value="Yes" >
	<label for="abdominal">Yes</label>
	<input type="radio" name="abdominal" value="No" >
	<label for="abdominal">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	Are you having an urgency to go to the toilet?<br></br>
	<input type="radio" name="toilet" value="Yes">
	<label for="toilet">Yes</label>
	<input type="radio" name="toilet" value="No" >
	<label for="toilet">No</label><br></br>

	Are you frequently passing loose, watery faeces?<br></br>
	<input type="radio" name="faeces" value="Yes">
	<label for="faeces">Yes</label>
	<input type="radio" name="faeces" value="No" >
	<label for="faeces">No</label><br></br>	

	Are you feeling nauseous?<br></br>
	<input type="radio" name="nauseous" value="Yes">
	<label for="nauseous">Yes</label>
	<input type="radio" name="nauseous" value="No" >
	<label for="nauseous">No</label><br></br>

	Are you vomitting?<br></br>
	<input type="radio" name="vomitting" value="Yes">
	<label for="vomitting">Yes</label>
	<input type="radio" name="vomitting" value="No" >
	<label for="vomitting">No</label><br></br>


	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>

	<?php  
	session_start();
	if (isset($_POST["submit"]))
	{	
	$answer1 = $_POST['abdominal'];
	$answer2 = $_POST['toilet'];
	$answer3 = $_POST['faeces'];
	$answer4 = $_POST['nauseous'];		
	$answer5 = $_POST['vomitting'];
	$totalCorrect = 0;

if ($answer1 == "Yes") 
	{ $totalCorrect++; }

if ($answer2 == "Yes") 
	{ $totalCorrect++; }

if ($answer3 == "Yes") 
	{ $totalCorrect++; }

if ($answer4 == "Yes") 
	{ $totalCorrect++; }

if ($answer5 == "Yes") 
	{ $totalCorrect++; }

 if ($totalCorrect >= 3)
 {
 	echo " You may be having diarrhoea. <br>Click the button to view some suggested on-the-counter(OTC) medications.<br>";
?>
 	<a href="diarrhoeadiag.php?category=diarrhoea" class="button">Click here</a>

<?php
//Analysis
 	$data_id = "";
 	$illness = "Diarrhoea";
 	$user_id = $_SESSION["user_id"];
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);

 }
 else 
 {
 	echo "You may not be having a diarrhoea.";

 	$data_id = "";
 	$illness = "Healthy";
 	$user_id = $_SESSION["user_id"];

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);
 }
}
?>
 </div>	
</form>
 </body>
 <a href="diagnosis.php" class="button button1">Back</a>
 <a href="logout.php" class="button button1">Logout</a>
</html>