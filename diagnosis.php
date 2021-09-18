<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<style>
body{
	 background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
}

h1 {
      font-family: Times New Roman; 
      color: white;
      text-align: center;
      font-size: 60px;
    }


.button{
	font-family: Times New Roman;
	border: none;
	border-radius: 12px;
  	color: white;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 24px;
  	margin: 20px 20px;
  	width: 25%;
  	cursor: pointer;
  	padding: 50px 40px;
}

.button1{
	background-color: black;
}
.button1:hover{
	background-color: silver;
	border: 2px solid black;
	color:black;
}

.button2{
	background-color: crimson;
}
.button2:hover{
	background-color: silver;
	border: 2px solid crimson;
	color:black;
}

.button3{
	background-color: darkorange;
}
.button3:hover{
	background-color: silver;
	border: 2px solid darkorange;
	color:black;
}

.button4{
	background-color: green;
}
.button4:hover{
	background-color: silver;
	border: 2px solid green;
	color:black;
}

.button5{
	background-color: purple;
}
.button5:hover{
	background-color: silver;
	border: 2px solid purple;
	color:black;
}

.button6{
  font-family: Times New Roman;
  background-color: black;
  border-radius: 20px;
  width: 7%;
  border: none;
  color: white;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 23px;
  margin: 30px 5px;
  cursor: pointer;
}
.button6:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
}

.button7{
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

.button7:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
}
.wrapper{
	text-align: center;
}
	</style>
	<title>Diagnosis</title>
</head>
<body>
	<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
	<a href="diarrhoea.php" class="button button1">Diarrhoea</a>
  	<a href="fever.php" class="button button2">Fever</a>
  	<a href="flu.php" class="button button3">Flu</a>

  	<div class="wrapper">
  	<a href="gastritis.php" class="button button4">Gastritis</a>
  	<a href="uti.php" class="button button5">Urinary Tract Infection(UTI)</a>  	
  </div>
</body>
<a href="usermain.php" class="button button7">Back</a>
</html>