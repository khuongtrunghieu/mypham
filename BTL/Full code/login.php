<?php
	session_start();
	if (isset($_REQUEST['username'])) {
		$_SESSION['login_user']=$_REQUEST['username'];
	}
	if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
	header("Location: index.php");
?>