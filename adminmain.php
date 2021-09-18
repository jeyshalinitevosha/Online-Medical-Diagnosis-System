<!DOCTYPE html>
<html>
<title>Admin</title>
<head>
  <style>
  body {
      background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
      font-family: Times New Roman;

    }
    
  h1 { 
      color: white;
      text-align: center;
      font-size: 60px;
    }
  
  h2{
    color: white;
    font-size: 30px;
  } 

  .wrapper{
    text-align: center;
  }

  .button{

  background-color: black;
  border-radius: 50px;
  width: 20%;
  border: none;
  color: white;
  padding: 30px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 28px;
  margin: 30px 5px;
  cursor: pointer;
}
.button:hover{
  background-color: silver;
  border: 5px black;
  color:black;
}
.button3{
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



    }
  
  </style>
<body>
 <h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>


<div class="wrapper">
  <h2>WELCOME ADMINISTRATOR!</h2>
  <a href="users.php" class="button">User Details</a><br>
  <a href="medicine.php" class="button button1">Medicine Details</a><br>
  <a href="chart.php" class="button button2">Diagnosis Report</a><br>

</div>
</body>
<a href="logout.php" class="button button3">Logout</a>

</html>


	