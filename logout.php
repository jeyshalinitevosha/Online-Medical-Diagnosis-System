<?php include "connect.php"?>
<!DOCTYPE html>
<html>
<head>
	<style>
body{
	background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
	font-family: Times New Roman;
}
    
h1{
    font-family: Times New Roman; 
    color: white;
    text-align: center;
    font-size: 60px;
 }

h3{
	color: white;
	font-size: 35px;
	text-align: center;
}

.boxed{
  font-size: 35px;
  text-align: center;
  background-color: powderblue;
  color: black;
  width: 50%;
  padding:5px;
  border: 5px solid gray;
  display: block;
  margin-left: auto;
  margin-right: auto; 
}

.wrapper{
	text-align: center;
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
  font-size: 23px;
  margin: 30px 5px;
  cursor: pointer;
}

.button:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
}

	</style>
	<title>Logged Out</title>
</head>
<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>	
<?phpbackground-color: silver;
  border: 2px solid black;
  color:black;
session_start();
session_destroy();
?>
<h3> <?php echo 'You have been logged out.'?></h3>
<div class="boxed">
	<h4>Thank you for using our system!</h4>
</div>

<div class="wrapper">
<a class="button" href="homepage.php">Go back</a>
</div>
</body>
</html>
