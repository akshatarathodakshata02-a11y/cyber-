<!DOCTYPE html>
<html>

<head>
<title>Password Checker</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Password Strength Checker</h2>

<form method="post">

Enter Password<br>

<input type="text" name="password">

<br><br>

<input type="submit" value="Check">

</form>

<?php

if(isset($_POST['password']))
{

$password=$_POST['password'];

if(strlen($password)<6)
{

echo "Weak Password";

}

else

{

echo "Strong Password";

}

}

?>

</body>
</html>