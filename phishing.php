<!DOCTYPE html>
<html>
<head>
<title>Phishing Checker</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Phishing Website Checker</h2>

<form method="post">

Enter Website URL<br>

<input type="text" name="url">

<br><br>

<input type="submit" value="Check">

</form>

<?php

if(isset($_POST['url']))
{

$url=$_POST['url'];

if(strpos($url,"https://")!==false)
{
echo "Safe Website";
}
else
{
echo "Suspicious Website";
}

}

?>

</body>
</html>