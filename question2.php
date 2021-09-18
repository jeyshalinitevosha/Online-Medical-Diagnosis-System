<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}
?>



<!doctype html>
<html>
<head>
<title>PBU Merchandise Item</title>
</head>

<body>
  
<h3> SHOP PBU MERCHANDISE</h3>
  <p><em></i>All merchandises are RM50 only!<br>
    Half price for PBU student!</em></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <p>Name : <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error"><?php echo $nameErr;?></span>
  </p>
  
  <p>Email : <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error"><?php echo $emailErr;?></span>
  </p>
  
  <p>Merchandise : 
    <select name="merch" id="select">
      <option value="Sweater" id = "sweater">Sweater</option>
      <option value="Cap" id = "cap">Cap</option>
      <option value="T-Shirt" id = "tshirt">T-Shirt</option>
    </select>
  </p>
  <p>Are you PBU's student ? 
    <select name="offer" >
      <option value="yes">Yes, I am!</option>
      <option value="no" selected >No</option>
    </select>
  </p>
  <p>
    <input type="submit" name="submit" value="Submit Order">
  </p>
</form>
</body>

</html>