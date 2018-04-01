<?php
$ten="";
if(isset($_POST["act"]))
{
	$ten=$_POST["ten"];	
	$id=getid();
	$check=mysql_query("select count(*) from danhmuc where danhmuc='$nameDM'");
	$r=mysql_fetch_array($check);
	$n=$r[0];
	if($n!=0)
		echo "<script>alert('Lỗi!! Nhóm sản phẩm này đã có trong cơ sở dữ liệu!');window.history.go(-1);</script>";
	else{
	$sql="insert into danhmuc(IdDM,nameDM) values ('$IdDM','$nameDM')";
///	echo "$sql";
	$kq=mysql_query($sql);	
	if(!$kq)
		echo "<script>alert('Có lỗi xảy ra trong quá trình xử lý');window.history.go(-1);</script>";
	else{
		echo "<script>alert('Đã thêm');window.location='../adminpm/?m=mn&b=themnhom_sp.php'</script>";
		$ten="";
	}
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang quản trị</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
<link type="text/css" rel="stylesheet" href="../css/menu.css" />
<script type="text/javascript" src="../quanly.js"></script> 
</head>

<body onload="kt();">
<script type="text/javascript" src="Scripts/tooltip/wz_tooltip.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_balloon.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_centerwindow.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_followscroll.js"></script>

<div id="container">
 <div id="header">
	 <?php include "header.php";?> 
</div>    

<div id="menu-quantri">
	<?php include "menu_quantri.php";?>
  </div>  
  <br clear="all" />
    <div id="main">  
          <div id="content-left">
			<?php include "menu_left_nhomsp.php";?>
		  </div>
<div id="content-right">
  <table width="735" border="0" cellspacing="0" cellpadding="0">
    <form method="POST" onsubmit="return nhomsp_insert(ten.value);" name="form" id="form">
      <tr>
          <td colspan="2" class="tieude" align="center">THÊM NHÓM SẢN PHẨM</td>
      </tr>  
      <tr bgcolor="#FFFFFF">
        <td width="250" style="padding-left:80px" height="30">Tên nhóm sản phẩm:</td>
        <td width="485"><input type="text" name="ten" style="width:240px" value="" /></td>
      </tr> 
      <tr>
      	<td align="center" colspan="2" height="35">
            <input name="" type="submit" value="Thêm" class="button" onmouseover="style.background='url(img/button-2-o.gif)'" onmouseout="style.background='url(img/button-o.gif)'">
            <input name="" type="reset" value="Xóa trắng" class="button" onmouseover="style.background='url(imgs/button-2-o.gif)'" onmouseout="style.background='url(img/button-o.gif)'">    
        </td>
      </tr>
      <input type="hidden" name="act">
   </form>
  </table>
</div>  
</body>
</html>