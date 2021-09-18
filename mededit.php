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
		font-size: 30px;
	}

	.box{
		text-align: center;
		padding: 20px;
		font-family: Times New Roman;
		color: white;
		font-size: 25px;
	}

	.button{
	font-family: Times New Roman;
	background-color: black;
	border: none;
	border-radius: 12px;
  	color: white;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 20px;
  	margin: 4px 2px;
  	width: 10%;
  	cursor: pointer;
  	padding: 20px 20px;
}

.btn{
	font-family: Times New Roman;
	background-color: black;
	border: none;
	border-radius: 12px;
  	color: white;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 20px;
  	margin: 4px 2px;
  	width: 10%;
  	cursor: pointer;
  	padding: 20px 20px;
}

.form-control{
  width: 30%;
  margin: 20px 20px;
  padding: 20px;
  background: white;
  font-family: Times New Roman;
  font-size: 20px;
  color:black;
  text-align: center;
  border-radius: 10px 10px 10px 10px;
}
.wrapper{
		text-align: center;
	}
.label-success{
	background-color: green;
	color: white;
}

	</style>
	<title>Modify Medicine</title>
</head>
<body>
<div class="container">
	<?php 
	
	if(isset($_POST['update']))
	{

		if( empty($_POST['name']) || empty($_POST['category']) || empty($_POST['description'])||
			empty($_POST['estimated_price']) )
		{
			echo "Please fillout all required fields."; 
		}
		else
		{		
			$name  				= $_POST['name'];
			$category			= $_POST['category'];
			$description		= $_POST['description'];
			$estimated_price	= $_POST['estimated_price'];

			$sql = "UPDATE medicine SET name='{$name}', category = '{$category}', description ='{$description}',
						estimated_price = '{$estimated_price}'
						WHERE id=" . $_POST['id'];

			if( $con->query($sql) === TRUE)
			{
				echo "<span class='label label-success'>Successfully updated medicine!</span>";
			}else
			{
				echo "<span class='label label-danger'>Error: There was an error while updating medicine!</span>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM medicine WHERE id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1)
	{
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
	<div class="wrapper">
		<div class="box">
			<h2>MODIFY MEDICINE</h2> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
				<label for="name">Name of Medicine</label>
				<input type="text" id="name"  name="name" value="<?php echo $row['name']; ?>" class="form-control"><br>
				<label for="category">Category</label>
				<input type="text"  name="category" id="" value="<?php echo $row['category']; ?>" class="form-control"><br>
				<label for="description">Description</label>
				<input type="text" name="description" value="<?php echo $row['description']; ?>" class="form-control"><br>
				<label for="estimated_price">Estimated Price(RM)</label>
				<input type="text" name="estimated_price" value="<?php echo $row['estimated_price']; ?>" class="form-control">
				<br>
				<input type="submit" name="update" class="btn" value="Update">
			</form>
			<div>
					<a href="medicine.php" class="button button1">Continue...</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>


 