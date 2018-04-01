 <?php
session_start();
include_once('ketnoi2.php');
 // include('../login/checklogin.php');
  //$user = checkLoggedUser();
	$upload_image=$_FILES["HinhAnh"]["name"];
	move_uploaded_file($_FILES['HinhAnh']['tmp_name'],'../'.$_FILES["HinhAnh"]["name"]);
	//end upload file
//print_r($_REQUEST);exit();
//get input
$id_sp = isset($_REQUEST["idSP"]) ? $_REQUEST["idSP"] : 0;
	$id_dm = isset($_REQUEST["IdDM"]) ? $_REQUEST["IdDM"] : 0;
	$ten_sp = isset($_REQUEST["nameSP"]) ? $_REQUEST["nameSP"] : "";
	$gia_sp = isset($_REQUEST["Gia"]) ? $_REQUEST["Gia"] * 1 : 0;
	//$anh_sp = isset($_REQUEST["anh_sp"]) ? $_REQUEST["anh_sp"]  : "";
	
	$soluong = isset($_REQUEST["SoLuong"]) ? $_REQUEST["SoLuong"] : "";
	$mota = isset($_REQUEST["MoTa"]) ? $_REQUEST["MoTa"] : "";
//buoi 2.1 :tao sql
$sql = "INSERT INTO spham (IdDM,nameSP,Gia,HinhAnh,SoLuong,MoTa) ";
$sql .= " VALUES (";
$sql .= "	'{$id_dm}', ";
$sql .= "	'{$ten_sp}', ";
$sql .= "	'{$gia_sp}', ";
$sql .= "	'{$soluong}', ";
$sql .= " '{$upload_image}', ";
$sql .= "	'{$mota}' ,";
$sql .= ")";
//echo "sql=[$sql]"; exit();

//Thuc thi sql
$ret = 0;
$ret = exec_update($sql);
if ($ten_sp){
header("quantri.php?page_layout=danhsachsp");
exit();
	}
	?>
	<html>
<head>
	<meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
</head>
<style>
label{width:200px;float:left;}
button{width:111px; height: 45px; font-size: 18px; border-radius: 6px; margin: 30px 120px;}
</style>
<body>
<?php if ($ret) {?>
Bạn đã thêm thành công sản phẩm <?php echo $ten_sp?>
<?php }else {?>
<?php }?>
<br/> 
<a href="quantri.php?page_layout=themsach"><button>Thêm Tiếp</button></a>
<a href="quantri.php?page_layout=danhsachsp"><button>Trở về</button></a>
</body>
</html>