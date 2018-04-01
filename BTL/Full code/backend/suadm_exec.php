<?php
include('ketnoi2.php');
$id_dm = isset($_REQUEST["IdDM"]) ? $_REQUEST["IdDM"] : 0;
$ten_danhmuc = isset($_REQUEST["nameDM"]) ? $_REQUEST["nameDM"] : "";
//tao sql
$sql = "UPDATE danhmuc  ";
$sql .= " set";
$sql .= "	nameDM='{$ten_danhmuc}' ";
$sql .= " where IdDM={$id_dm}";
//echo "sql=[$sql]"; exit();
//Thuc thi sql
$ret = exec_update($sql);
header("Location:quantri.php?page_layout=danhmucsp");
exit();
?>
