<!DOCTYPE html>
<html>
<head>
	<title>Modify User Information</title>
</head>
<style>
	body{
		 background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
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


</style>
<?php 
require_once 'connect.php';
?>

<h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
<div class="container">
	<?php 
	//Update user 	
	if(isset($_POST['update']))
	{

		if( empty($_POST['username']) || empty($_POST['email']) )
		{
			echo "Please fillout all required fields"; 
		}
		else
		{		
			$username 	= $_POST['username'];
			$email  	= $_POST['email'];
			$sql = "UPDATE users SET username='{$username}', email = '{$email}'
						WHERE user_id=" . $_POST['user_id'];

			if( $con->query($sql) === TRUE)
			{
				echo "<div class='alert alert-success'>Successfully updated user info!</div>";
			}
			else
			{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info!</div>";
			}

		}

	}
	$user_id = isset($_GET['user_id']) ? (int) $_GET['user_id'] : 0;
	$sql = "SELECT * FROM users WHERE user_id={$user_id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: users.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
		<div class="box">
			<h2>MODIFY USER</h2> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['user_id']; ?>" name="user_id">
				<label for="username" class="form-control">Username</label>
				<input type="text"  name="username" id="username" value="<?php echo $row['username']; ?>" class="form-control"><br>
				<label for="email"class="form-control">Email</label> 
				<input type="text"  name="email" id="email"  value="<?php echo $row['email']; ?>" class="form-control"><br>
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
			<div>
					<a href="users.php" class="button button1">Continue...</a>
			</div>
		</div>
	</div>
</div>
</div>


 