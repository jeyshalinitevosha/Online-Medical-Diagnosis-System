<?php include "connect.php";
session_start();
 ?>

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
    color: white;
		font-size: 25px;
	}

	body {
     background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
      font-family: Times New Roman;
    }

    table{
		width: 100%;
		padding-right: 10px;
		padding-left: 10px;
		font-family: serif;
		font-size: 20px;
	}

	td{
		border: 2px black;
  		padding: 15px;
  		background-color: darkseagreen;
  		opacity: 80%;
}

 th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  background-color: black;
  opacity: 80%;
  font-size: 18px;
  color: white;
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
}
	</style>
	<title>Gastritis Diagnosis</title>
</head>

<body>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
<h2>Suggested Medications</h2>
<h3>Select medicines and click 'Submit' in order to view total estimated price of medications.</h3>   

<div align="center" class="display">
<table class='table1'>
<table width="100%">
<tr class='table2'> 
<th>Medicine Name</th>
<th>Description</th>
<th>Estimated Price(RM)</th>
<th>Image</th>
<th>Select</th>
</tr>

<?php
$category=$_GET["category"];
$sql="SELECT * FROM medicine WHERE category='$category'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0)
{
	while ($row = $result->fetch_assoc())
	{
?>
<form action="total.php" method="POST">
<input type="hidden" name="category" value="<?php echo $row["category"]; ?>"/>
<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/> 
<tr>
<td><h4 class="text"><?php echo $row["name"]; ?></h4></td>
<td><h4 class="text"><?php echo $row["description"]; ?></h4></td>
<td><h4 class="text"><?php echo $row["estimated_price"]; ?></h4></td>
<td><img src="image\<?php echo $row["id"]; ?>.jpg" style="width:200px;height:150px" ></td>
<td><input type="checkbox"  name = "price[]"  value= "<?php echo $row["estimated_price"]; ?>"  id="price" > </td>
</tr>
<?php
}
}
?>
</table>
<input class="button" type="submit" value="Submit">
</form>
</div>
</body>
<a href="diagnosis.php" class="button button1">Back</a>
<a href="logout.php" class="button button1">Logout</a>
</html>
