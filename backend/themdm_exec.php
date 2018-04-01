 <?php
session_start();
include_once('ketnoi2.php');
	//print_r($_REQUEST);exit();
	//print_r($_FILES);exit();
	//buoc 1
	
//print_r($_REQUEST);exit();
//get input
$id_dm = isset($_REQUEST["IdDM"]) ? $_REQUEST["IdDM"]* 1 : 0;
$ten_danhmuc = isset($_REQUEST["nameDM"]) ? $_REQUEST["nameDM"] : "";
//buoi 2.1 :tao sql
$sql = "INSERT INTO danhmuc (nameDM) ";
$sql .= " VALUES (";
$sql .= "	'{$ten_danhmuc}' ";
$sql .= ")";
//echo "sql=[$sql]"; exit();
//Thuc thi sql
$ret = 0;
$ret = exec_update($sql);
header("Location:quantri.php?page_layout=danhmucsp");
exit();
	?>
