<?php
include('ketnoi2.php');
$id_user=isset($_REQUEST["id_user"]) ? $_REQUEST["id_user"]: 0;
$username=isset($_REQUEST["username"]) ? $_REQUEST["username"]: 0;
$password=isset($_REQUEST["password"]) ? $_REQUEST["password"]: 0;
$fullname=isset($_REQUEST["fullname"]) ? $_REQUEST["fullname"]: 0;
$gioitinh=isset($_REQUEST["gioitinh"]) ? $_REQUEST["gioitinh"]: 0;
//tao sql
$sql = "UPDATE user  ";
	$sql .= " set";
	$sql .= " username='{$username}', ";
	$sql .= "	password='{$password}', ";
	$sql .= " fullname='{$fullname}' ,";
	$sql .= " gioitinh='{$gioitinh}' ,";
	$sql .= " where id_user={$id_user}";
//thuc thi sql
	$result = 0;
	if ($username){
		$result = exec_update($sql);
	}
	header("Location:quantri.php?page_layout=user");
	exit();
	?>
