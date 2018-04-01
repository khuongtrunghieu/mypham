<?php
ob_start();
session_start();
error_reporting(0);
include('checklogin.php');
include_once("ketnoi2.php");
include"header.php";
if (!isset($_SESSION['username'])) {
     header('Location: dangnhap.php');
     set_time_limit(5);
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Trang Quản Trị </title>
	<link rel="stylesheet" type="text/css" href="css/quantri.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="topmenu">
	<ul>
		<li><h4><a href="quantri.php?page_layout=user">User</a></h4></li>
		<li><h4><a href="quantri.php?page_layout=danhmucsp">Danh Mục Sản Phẩm</a></h4></li>
		<li><h4><a href="quantri.php?page_layout=danhsachsp">Danh Sách Sản Phẩm</a></h4></li>
		<li><h4><a target="_blank" href="http://localhost:82/webmypham/index.php?trang=1">Xem Website</a></h4></li>
        <li><h4><a>Chào <?php echo $_SESSION['username']; ?></a></h4></li>
	</ul>
</div>
<?php
            switch($_GET['page_layout']){
                case 'login': include_once('dangnhap.php');
                      break;  
                case 'user': include_once('user.php');
                    break;
                case 'xoauser':include_once('xoauser.php');
                    break;
                case 'danhmucsp': include_once('dmsanpham.php');
                    break;
                case 'danhsachsp': include_once('danhsachsp.php');
                    break;
                case 'suadm': include_once('suadm.php');
                    break;
                case 'themsach': include_once('themsach.php');
                    break;
                case 'xoadm': include_once('xoadm.php');
                    break;
                case 'xoasach':include_once('xoasach.php');
                    break;
                case 'themdm':include_once('themdm.php');
                    break;
                case 'suauser':include_once('suauser.php');
                    break;
                case 'suasach':include_once('suasach.php');
                    break;
                default: include_once('user.php');
            }
        ?>
</body>
</html>



 <?php 
 include"footer.php";
  ?>