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
	<title>UTI Symptoms</title>
</head>
<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>	
<form name = "confirm" method = "POST">
<h2>Urinary Tract Infecton(UTI) Symptoms</h2>
<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	Are you having a strong and frequent urge to urinate?<br></br>
	<input type="radio" name="urge" value="Yes" >
	<label for="urge">Yes</label>
	<input type="radio" name="urge" value="No" >
	<label for="urge">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	Is your urine cloudy, bloody or strong-smelling??<br></br>
	<input type="radio" name="urine" value="Yes">
	<label for="urine">Yes</label>
	<input type="radio" name="urine" value="No" >
	<label for="urine">No</label><br></br>

	Are you experiencing pain/burning sensation when urinating?<br></br>
	<input type="radio" name="pain" value="Yes">
	<label for="pain">Yes</label>
	<input type="radio" name="pain" value="No" >
	<label for="pain">No</label><br></br>	

	Are you feeling nauseous?<br></br>
	<input type="radio" name="nauseous" value="Yes">
	<label for="nauseous">Yes</label>
	<input type="radio" name="nauseous" value="No" >
	<label for="nauseous">No</label><br></br>

	Are you experiencing muscle aches/abdominal pains?<br></br>
	<input type="radio" name="abdominal" value="Yes">
	<label for="abdominal">Yes</label>
	<input type="radio" name="abdominal" value="No" >
	<label for="abdominal">No</label><br></br>
	
	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>
	
	<?php
	session_start();  
	if (isset($_POST["submit"]))
	{
	$answer1 = $_POST['urge'];
	$answer2 = $_POST['urine'];
	$answer3 = $_POST['pain'];
	$answer4 = $_POST['nauseous'];		
	$answer5 = $_POST['abdominal'];
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
 	echo " You may be having urinary tract infection.<br>Click the button to view some suggested on-the-counter(OTC) medications.<br>";?>
 	<a href="utidiag.php?category=uti" class="button button1">Click here</a>

<?php
//Analysis
 	$data_id = "";
 	$illness = "UTI";
 	$user_id = $_SESSION["user_id"];
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);

 }
 else 
 {
 	echo "You may not be having urinary tract infection.";

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
</html>
