<?php
	include("ketnoi2.php");
	//get input
	$fields = "ten_danhmuc";
	$data = array();
	$id_dm = isset($_REQUEST["id_dm"]) ? $_REQUEST["id_dm"] : 0;
	//tao sql
	$sql = "delete from dmsanpham  " ;
	$sql.= " WHERE id_dm = {$id_dm}" ;
	//echo $sql;exit();
	$ret = exec_update($sql);
	header("Location:quantri.php?page_layout=danhmucsp");
	print_r($ret);exit();
	?>