<?php include('server.php') ?>
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

 h2 {
  font-family: Times New Roman;
  text-align: center;
  font-size: 30px;
 } 

form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 10px;
  background: black;
  font-family: Times New Roman;
  font-size: 20px;
  color:white;
  text-align: center;
  border-radius: 10px 10px 10px 10px;
}
.input-group {
  margin: 10px 10px 10px 10px;
}
.input-group label {
  display: block;
  text-align: center;
  margin: 15px;
}
.input-group input {
  height: 30px;
  width: 50%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

.button{
  background-color: powderblue;
  color: black;
  border-radius: 15px;
  padding: 10px;
  width: 30%;
  font-size: 16px;
  font-family:Times New Roman;
  font-weight: bold;
  cursor: pointer;
}

p{
  font-family: Times New Roman;
}

a{
  font-family: Times New Roman;
  color: powderblue;
}

    
  </style>
  <title>User Login</title>
</head>

<body>
  <h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
    <form method="post" action="login.php">
    <h2>Login</h2>
    <?php include('error.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="button" name="login_user">Login</button>
    </div>
    <p>
      Not a member yet? <a href="register.php">Register</a>
    </p>
       <a href="homepage.php" class="button" name="back">Back</a>
  </form>
</body>
</html>