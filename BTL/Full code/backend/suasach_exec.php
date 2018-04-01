<?php
include("ketnoi2.php");
//buoc 1

	$upload_image=$_FILES["HinhAnh"]["name"];
	move_uploaded_file($_FILES['HinhAnh']['tmp_name'],'../' .$_FILES["HinhAnh"]["name"]);
	//
	$id_sp = isset($_REQUEST["idSP"]) ? $_REQUEST["idSP"] : 0;
	$id_dm = isset($_REQUEST["IdDM"]) ? $_REQUEST["IdDM"] : 0;
	$ten_sp = isset($_REQUEST["nameSP"]) ? $_REQUEST["nameSP"] : "";
	$gia_sp = isset($_REQUEST["Gia"]) ? $_REQUEST["Gia"] * 1 : 0;
	//$anh_sp = isset($_REQUEST["anh_sp"]) ? $_REQUEST["anh_sp"]  : "";
	
	$soluong = isset($_REQUEST["SoLuong"]) ? $_REQUEST["SoLuong"] : "";
	$mota = isset($_REQUEST["MoTa"]) ? $_REQUEST["MoTa"] : "";
	
	//tao sql
	$sql = "UPDATE spham  ";
	$sql .= " set";
	$sql .= " IdDM='{$id_dm}', ";
	$sql .= " nameSP='{$ten_sp}', ";
	$sql .= "	Gia='{$gia_sp}', ";
	$sql .= " HinhAnh='{$upload_image}' ,";
	
	$sql .= "	SoLuong='{$soluong}', ";
	$sql .= "	MoTa='{$mota}' ,";
	
	$sql .= " where idSP={$id_sp}";
//Thuc thi sql
$result = 0;
	if ($ten_sp){
		$result = exec_update($sql);
	}
	header("Location:quantri.php?page_layout=danhsachsp");
	exit();
	?>


