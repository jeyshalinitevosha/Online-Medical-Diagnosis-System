<?php include "server.php";?>
<!DOCTYPE html>
<html>
<head>
  <style>
  body {
      background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
    }
    
  h1 {
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
  padding: 20px;
}
 button{
  font-family: Times New Roman;
  background-color: black;
  border-radius: 30px;
  width: 15%;
  border: none;
  color: white;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 28px;
  margin: 30px 5px;
  cursor: pointer;
}

.wrapper{
    text-align: center;
  }

.boxed {
  font-family: Times New Roman;
  font-size: 25px;
  text-align: center;
  background-color: powderblue;
  width: 50%;
  padding:5px;
  border: 5px solid gray;
  display: block;
  margin-left: auto;
  margin-right: auto; 
}
.button1{
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
.button1:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
}


 </style>
	<title>Online Medical Diagnosis System</title>
</head>

<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>

<div class="welcome">
<?php
if(!isset($_SESSION['username'])) 
{
    echo 'Welcome Guest.';
} 
else 
{
    echo 'Welcome to the system, ' . $_SESSION['username'];
}
?>
</div>


<div class="boxed">
<h3>What is this system?</h3>
This is an Online Medical Diagnosis System created in order to help users predict if they are having a certain illness.<br>
It identifies possible conditions as well as suggests medications related to users' symptoms.<br>
 </div> 

<div class="wrapper">
<button onclick="myFunction()">Continue</button>
</div>

<a href="logout.php" class="button button1">Logout</a>
<script>
function myFunction() 
{
  var txt;
  if (confirm("This is a system created only to predict if one is having a specific illness.\nHowever, it is not a precise result. You are advised to consult a professional physician.\nMedicines shown are merely suggestions. You are advised to take note of side effects, dosages and prescriptions from a professional.\nIf symptoms continue, seek medical attention immediately.")) 
  {
    location.replace("diagnosis.php")

  } 
  else  
  {
    location.replace("login.php")
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
		
</body>
</html>