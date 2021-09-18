<?php
if(isset($_POST['name']) && !empty($_POST['name'])){
$cookie_value=$_POST['name'];
setcookie('user',$cookie_value, time() + 3600, '/');
}
?>
<html>
<body>

<?php
if(isset($cookie_value)&& !empty($cookie_value)) {
    echo "user is".$cookie_value;
} else {
    echo "Cookies are not set";
}
?>
<form action=<?php echo $_SERVER['PHP_SELF'] ?> method='post'>
<input type='text' name='name'>
<input type='submit' value='submit'>
</form>

</body>
</html>