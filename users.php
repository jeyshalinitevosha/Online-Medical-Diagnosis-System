<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
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
		font-size: 25px;
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
  		width: 40%;
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

  	}
</style>

<body>
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


<?php 
require_once 'connect.php';

echo "<div class='container'>";

//Search User


//Delete User
if( isset($_POST['delete']))
{
	$sql = "DELETE FROM users WHERE user_id=" . $_POST['user_id'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully deleted user!</div>";
	}
}

$sql 	= "SELECT * FROM users";
$result = $con->query($sql); 

if( $result->num_rows > 0)
{ 
?>

	<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
	<div class="button">
	 <a href="adminmain.php" class="button button1">Back</a>
	</div>

	<h2>ALL USERS</h2>
	<form method="post" action="users.php">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for user.." title="Type in a name">
</form>
	<div class="wrapper">
	<table class="table" id="myTable">
		<tr>
			<td>USERNAME</td>
			<td>EMAIL</td>
			<td>DELETE</td>
			<td>EDIT</td>
		</tr>
	</div>	
	<?php
	while( $row = $result->fetch_assoc())
	{ 
		echo "<form action='' method='POST'>";	
		echo "<input type='hidden' value='". $row['user_id']."' name='user_id' />"; 
		echo "<tr>";
		echo "<td>".$row['username'] . "</td>";
		echo "<td>".$row['email'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='edit.php?user_id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
		echo "</tr>";
		echo "</form>";
	}
	?>
	</table>
<?php 
}
else
{
	echo "<br><br>No record was found!";
}
?> 
</div>




