<?php

$expire = time()+60*60*18;
setcookie($nama, $expire)

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cookie 1</title>
</head>
<body>

<form>

	<div>
		<input type="text" name = "nama"  placeholder="Tulis nama di sini..." / value="<?php echo $nama;?>">
	</div>

	<div>
		<input type = "Submit" name = "submit" value="Hantar" />
	</div>

</form>
<?php
echo $nama;
?>
</body>
</html>