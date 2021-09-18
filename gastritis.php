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
	</style>
	<title>Gastritis Symptoms</title>
</head>
<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
<form name = "confirm" method = "POST">
<h2>Gastritis Symptoms</h2><b></b>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	Are you having abdominal pain?<br></br>
	<input type="radio" name="pain" value="Yes" >
	<label for="pain">Yes</label>
	<input type="radio" name="pain" value="No" >
	<label for="pain">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	Are you experiencing abdominal bloating?<br></br>
	<input type="radio" name="bloating" value="Yes">
	<label for="bloating">Yes</label>
	<input type="radio" name="bloating" value="No" >
	<label for="bloating">No</label><br></br>

	Are you having a loss of appetite?<br></br>
	<input type="radio" name="appetite" value="Yes">
	<label for="appetite">Yes</label>
	<input type="radio" name="appetite" value="No" >
	<label for="appetite">No</label><br></br>	

	Are you having burning/gnawing feeling in the stomach between meals or at night?<br></br>
	<input type="radio" name="burning" value="Yes">
	<label for="burning">Yes</label>
	<input type="radio" name="burning" value="No" >
	<label for="burning">No</label><br></br>

	Are you experiencing indigestion?<br></br>
	<input type="radio" name="indigestion" value="Yes">
	<label for="indigestion">Yes</label>
	<input type="radio" name="indigestion" value="No" >
	<label for="indigestion">No</label><br></br>
	
	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>
	
	<?php  
	session_start();
	if (isset($_POST["submit"]))
	{
	$answer1 = $_POST['pain'];
	$answer2 = $_POST['bloating'];
	$answer3 = $_POST['appetite'];
	$answer4 = $_POST['burning'];		
	$answer5 = $_POST['indigestion'];
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
 	echo " You may be having gastritis.<br>Click the button to view some suggested on-the-counter(OTC) medications.<br>";?>
 	<a href="gastritisdiag.php?category=gastritis" class="button button1">Click here</a>

 <?php	
//Analysis
 	$data_id = "";
 	$illness = "Gastritis";
 	$user_id = $_SESSION["user_id"];
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);
 }
 else 
 {
 	echo "You may not be having a gastritis.";


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
