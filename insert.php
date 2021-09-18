<?php include "connect.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>Add New Medicine</title>
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
  width: 20%;
  margin: 10px 10px;
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
</head>
<body>
 <?php 
if(isset($_POST['addnew']))
{
    $name= ($_POST['name']);
    $category = ($_POST['category']);
    $description = ($_POST['description']);
    $estimated_price = ($_POST['estimated_price']);
    $image= ($_POST['image']);
    $sql = "INSERT INTO medicine(name,category,description,estimated_price,image) 
        VALUES('$name', '$category', '$description', '$estimated_price','$image')";
if(mysqli_query($con, $sql))
{       echo "<div class='alert alert-success'>Successfully added new medicine!</div>";
      }
      else
      {
        echo "<div class='alert alert-danger'>Error: There was an error while adding new medicine!</div>";
      }
}
 
?>
<div class="row">
    <div class="box">
      <h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
      <div class="wrapper">
      <h2>Add New Medicine</h2> 

      <form action="insert.php" method="POST">
        <label for="name">Name of Medicine</label>
        <input type="text" id="name"  name="name" class="form-control"><br>
        <label for="category">Category</label>
        <input type="text"  name="category" id="category" class="form-control"><br>
        <label for="description">Description</label>
        <input  name="description" id="description" class="form-control"><br>
        <label for="estimated_price">Estimated Price(RM)</label>
        <input type="text" name="estimated_price" class="form-control"><br>
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control"><br>
        <input type="submit" name="addnew" class="btn btn-success" value="Add New">
      </form>
      <div>
          <a href="medicine.php" class="button button1">Continue...</a>
      </div>
    </div>
    </div>
</div>
</body>
</html>

