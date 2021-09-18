<?php include "server.php"?>
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

.welcome{
  font-family: Times New Roman;
  font-size: 27px;
  font-weight: bold;
  color: lightcyan;
  text-align: center;
  padding: 30px;
}

.boxed{
  font-size: 30px;
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
	<title>Registration Successful</title>
</head>

<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
<div class="welcome">
<?php
if(!isset($_SESSION['username'])) 
{
    echo "Welcome Guest.";
} 
else 
{
    echo "Welcome to the system, " . $_SESSION['username'];?> <br>
    <?php echo "Your registration was successful!";
}
?>
</div>

<div class="boxed">
Thank you for registering.<br>You are required to login.<br>
</div>
</body>
<div class="wrapper">
<a class="button" href="login.php">Login</a>
</div>
</html>