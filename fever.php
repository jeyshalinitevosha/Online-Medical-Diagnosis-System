<?php include "connect.php"?>
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
  width: 7%;
  border: none;
  color: white;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 30px 5px;
  cursor: pointer;
}

.button1:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
	</style>
	<title>Fever Symptoms</title>
</head>
<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>	
<form name = "confirm" method = "POST">
<h2>Fever Symptoms</h2>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	Are you having a headache?<br></br>
	<input type="radio" name="headache" value="Yes" >
	<label for="headache">Yes</label>
	<input type="radio" name="headache" value="No" >
	<label for="headache">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	Are you sweating?<br></br>
	<input type="radio" name="sweating" value="Yes">
	<label for="sweating">Yes</label>
	<input type="radio" name="sweating" value="No" >
	<label for="sweating">No</label><br></br>

	Are you having a loss of appetite?<br></br>
	<input type="radio" name="appetite" value="Yes">
	<label for="appetite">Yes</label>
	<input type="radio" name="appetite" value="No" >
	<label for="appetite">No</label><br></br>	

	Are you feeling generally weak?<br></br>
	<input type="radio" name="weak" value="Yes">
	<label for="weak">Yes</label>
	<input type="radio" name="weak" value="No" >
	<label for="weak">No</label><br></br>

	Are you experiencing body ache?<br></br>
	<input type="radio" name="body" value="Yes">
	<label for="body">Yes</label>
	<input type="radio" name="body" value="No" >
	<label for="body">No</label><br></br>
	
	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>
	
	<?php  
	 session_start();
	if (isset($_POST["submit"]))
	{
	$answer1 = $_POST['headache'];
	$answer2 = $_POST['sweating'];
	$answer3 = $_POST['appetite'];
	$answer4 = $_POST['weak'];		
	$answer5 = $_POST['body'];
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
 	echo " You may be having a fever.<br>Click the button to view some suggested on-the-counter(OTC) medications.<br>";?>
 	<a href="feverdiag.php?category=fever" class="button">Click here</a>	

<?php
//Analysis
	$data_id = "";
 	$illness = "Fever";
 	$user_id = $_SESSION["user_id"];
 
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);

 }
 else 
 {
 	echo "You may not be having a fever.";

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
 </body>
 <a href="diagnosis.php" class="button button1">Back</a>
 <a href="logout.php" class="button button1">Logout</a>
</html>
