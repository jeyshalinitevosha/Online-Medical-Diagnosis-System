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
	<title>Flu Symptoms</title>
</head>
<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>	
<form name = "confirm" method = "POST">
<h2>Flu Symptoms</h2><b></b>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	Are you having a sorethroat?<br></br>
	<input type="radio" name="sorethroat" value="Yes" >
	<label for="sorethroat">Yes</label>
	<input type="radio" name="sorethroat" value="No" >
	<label for="sorethroat">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	Are you having a runny/stuffy nose?<br></br>
	<input type="radio" name="nose" value="Yes">
	<label for="nose">Yes</label>
	<input type="radio" name="nose" value="No" >
	<label for="nose">No</label><br></br>

	Are you having a cough?<br></br>
	<input type="radio" name="cough" value="Yes">
	<label for="cough">Yes</label>
	<input type="radio" name="cough" value="No" >
	<label for="cough">No</label><br></br>	

	Are you feeling tired?<br></br>
	<input type="radio" name="tired" value="Yes">
	<label for="tired">Yes</label>
	<input type="radio" name="tired" value="No" >
	<label for="tired">No</label><br></br>

	Are you experiencing muscle or body ache?<br></br>
	<input type="radio" name="body" value="Yes">
	<label for="body">Yes</label>
	<input type="radio" name="body" value="No" >
	<label for="body">No</label><br></br>
	
	<div>
		<input type="submit" class="button button1" name="submit" value="Submit" />
	</div>
	
	<?php  
	session_start();
	if (isset($_POST["submit"]))
	{
	$answer1 = $_POST['sorethroat'];
	$answer2 = $_POST['nose'];
	$answer3 = $_POST['cough'];
	$answer4 = $_POST['tired'];		
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
 	echo " You may be having a flu.<br>Click the button to view some suggested on-the-counter(OTC) medications.<br>";
 	?>
 	<a href="fludiag.php?category=flu" class="button">Click here</a>

<?php
 	//Analysis
	$data_id = "";
 	$illness = "Flu";
 	$user_id = $_SESSION["user_id"];
 
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);

 }
 else 
 {
 	echo "You may not be having a flu.";

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
