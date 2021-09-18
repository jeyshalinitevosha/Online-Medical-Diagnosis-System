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

	h2{
		font-family: Times New Roman;
		color:white;
		text-align: center;
		padding: 10px;
		font-size: 30px;
	}

	table{
		width: 100%;
		padding-right: 10px;
		padding-left: 10px;
		font-family: serif;
		font-size: 20px;
	}

	.wrapper{
		text-align: center;
	}

	td{
		border: 2px black;
  		padding: 15px;
  		background-color: darkseagreen;
  		opacity: 80%;

	}

  	.hover{
  		background-color: grey;
  	}

  	.alert{
  		background-color: lavender;
  		color: black;
  		font-family: Helvetica;
  		font-size: 19px;
  		opacity: 80%;
  		width: 30%;
  		height: 40%;
  	}

  	.btn{
  		background-color: black;
 		border-radius: 10px;
  		width: 90%;
  		border: none;
  		color: white;
  		padding: 10px 5px;
  		text-align: center;
  		display: inline-block;
  		font-size: 16px;
 		margin: 10px 5px;
  		cursor: pointer;
	}

	.button1{
  background-color: black;
  border-radius: 20px;
  width: 5%;
  border: none;
  color: white;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 10px 5px;
  cursor: pointer;
  float: right;
	}


		#myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
  
      }
      .label-success{
  background-color: green;
  color: white;
}

  	}
	</style>
	<title>Medicine Details</title>
</head>

<body>
<?php  
echo "<div class='container'>";
if( isset($_POST['delete'])){
	$sql = "DELETE FROM medicine WHERE id=" . $_POST['id'];

	if($con->query($sql) === TRUE)
	{
		echo "<span class='label label-success'>Successfully deleted medicine!</span>";
	}

  else
  {
    echo "<span class='label label-danger'>There was error while deleting medicine!</span>";
  
  }
}
?>
<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
<div class="button">
	 <a href="adminmain.php" class="button button1">Back</a>
   <a href="insert.php" class="button button1">Add New</a>
</div>
</div>
<?php
$sql 	= "SELECT * FROM medicine";
$result = $con->query($sql); 

if( $result->num_rows > 0)
{ 
	?>
<h2>ALL MEDICINE</h2>
	<form method="post" action="medicine.php">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for medicine name.." title="Type in a name">
</form>
	<div class="wrapper">
	<table class="table" id="myTable">
		<tr>
			<td>MEDICINE NAME</td>
			<td>CATEGORY</td>
			<td>DESCRIPTION</td>
			<td>ESTIMATED PRICE(RM)</td>
			<td>IMAGE</td>
			<td>DELETE</td>
			<td>EDIT</td>
		</tr>

<?php
	while( $row = $result->fetch_assoc())
	{ 
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id']."' name='id' />"; 
		?>
	

	<input type="hidden" name="id" value="<?php echo $row['id'];?>" />
	<tr>
	<td><h4 class="text"><?php echo $row["name"]; ?></h4></td>
	<td><h4 class="text"><?php echo $row["category"]; ?></h4></td>
	<td><h4 class="text"><?php echo $row["description"]; ?></h4></td>
	<td><h4 class="text"><?php echo $row["estimated_price"]; ?></h4></td>
	<td><img src="image\<?php echo $row["id"]; ?>.jpg" style="width:200px;height:150px" ></td>

	<?php
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='mededit.php?id=".$row['id']."' class='btn btn-info'>Edit</a></td>";
		echo "</tr>";
		echo "</form>"; 

	}
?>
	</table>

<?php 
}
else
{
	echo "<br><br>No Record Found";
}
?> 
</div>

<script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>
</body>
</html>
