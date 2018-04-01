<?php
	include("ketnoi2.php");
	//get input
	$fields = "IdDM,nameSP,Gia,HinhAnh,SoLuong,MoTa";
	$data = array();
	$id_sp = isset($_REQUEST["idSP"]) ? $_REQUEST["idSP"] : 0;
	//tao sql
	$sql = "delete from spham  " ;
	$sql.= " WHERE idSP = {$id_sp}" ;
	//echo $sql;exit();
	$ret = exec_update($sql);
	header("Location:quantri.php?page_layout=danhsachsp");
	print_r($ret);exit();
	?>
