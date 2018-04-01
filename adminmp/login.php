<?php
$username = $_POST['user'];
$password = $_POST['pass'];


if($username == "hanhhip" && $password == "12345")
{
	echo "<font color=red>Wellcom to ".$username."<font>";
	header("Location: indexad.php");
	}
else
{
	echo "<font color=red>Username hoac Password sai.Vui long nhap lai<font>";
	header("Location: admin.php");
	}
?>