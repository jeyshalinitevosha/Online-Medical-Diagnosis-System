<!DOCTYPE html>
<html>
<head>
	<style>
body {
     background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
      font-family: Times New Roman;
}

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


 .boxed{
    font-size: 20px;
    color: black;
    text-align: center;
  	background-color: powderblue;
  	width: 50%;
  	padding:0px;
  	border: 5px solid gray;
  	display: block;
  	margin-left: auto;
  	margin-right: auto; 
    }

    .button{
  background-color: black;
  border-radius: 18px;
  width: 10%;
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
}
	</style>
	<title>Total Estimated Price</title>
</head>
<body>
	<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
	<h2>Estimated Total Price</h2>
	<div class="boxed">
	<?php
		$name = $_POST['price'];
		$total=0;
			if (isset($_POST['price']))
			 {
    			echo "The total estimated price of the medicine you have selected is :<br>
    			 RM ";

    		foreach ($name as $price)
    		{
    			$total = $total + $price;
        
			}
    			echo $total;
			} 
			else
			{
    			echo "You did not choose a medicine.";
			}
	?>
	</div>	
</body>
<a href="diagnosis.php" class="button button1">Back</a>
<a href="logout.php" class="button button1">Logout</a>
</html>
