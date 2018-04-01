<?php
	include("ketnoi2.php");
	//get input
	$fields = "username";
	$data = array();
	$id_user = isset($_REQUEST["id_user"]) ? $_REQUEST["id_user"] : 0;
	//tao sql
	$sql = "delete from user  " ;
	$sql.= " WHERE id_dm = {$id_dm}" ;
	//echo $sql;exit();
	$ret = exec_update($sql);
	header("Location:quantri.php?page_layout=user");
	print_r($ret);exit();
	?>